<?php

namespace App\Services;
use Illuminate\Support\Facades\Validator;
use DB;

class Service {

    protected function validateOrAbort($input,$rules){
        $validator = Validator::make($input,$rules);

        if($validator->fails()){
            abort(400,$validator->errors()->first());
        }
    }

    public function search($modelName, $request) {

     
        $model = $modelName::select('*');
        

        // Selected Columens
        $columns = $this->jsonStrToArray($request->get('columns'));
        if ($columns) {
            $columns[] = 'id';
            $model->select($columns);
        }
      
        // Order by clause
        $order = $this->jsonStrToArray($request->get('order'));
        if ($order) {
            foreach ($order as $column) {
                $model->orderBy($column->column, $column->value);
            }
        }

          // Where clause
          $where = $this->jsonStrToArray($request->get('where'));
          if ($where) {
              //return $where;
              foreach ($where as $key => $value) {
                  $operator = !empty($value->operator) ? $value->operator : '=';
                      $model->where($value->column, $operator, $value->value);
              }
          }

        $tags = $this->jsonStrToArray($request->get('tags'));
        if($tags){
            if(is_array($tags)){
                foreach($tags as $tag){                    
                 
                    $model->where(function ($q) use ($tags) {
                          foreach ($tags as $tag) {
                            $q->orWhere('name', 'like', "%{$tag}%");
                            $q->orWhere('content', 'like', "%{$tag}%");

                          }
                        });

               }
            }else{

                $query_param = str_replace('+',' ',$request->tags);
                $model->where('name', 'LIKE', '%'.$query_param.'%')->orwhere('content', 'LIKE', '%'.$query_param.'%');
            
            }
        }
        

        // Limited data
        $limit = (int) $request->get('limit');
        if ($limit) {
            $limit = $request->get('limit');
            $limit = $limit ? (int) $limit : 5;
            $result = $model->take($limit)->get();
            
        } else {
            $result = $model->get();
        }

        return $result;
    }

    /**
     * Convert JSON string to Array
     * @param str $string
     * @return Array|False
     */
    public function jsonStrToArray($string) {
        $json = json_decode($string);
        if (json_last_error() !== JSON_ERROR_NONE || is_numeric($json)) {
            return FALSE;
        }

        return $json;
    }
    
}
