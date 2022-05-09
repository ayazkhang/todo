<?php

namespace App\Services;
use App\Models\Note;
use PHPUnit\Framework\Exception;
use phpseclib\Crypt\Hash;

class NoteService extends Service{

    public static $CREATE_RULES = [
        'title' => 'required'

    ];

    public static $UPDATE_RULES = [
        'title' => 'required'
    ];

    
    public function create($request) {

        $request_data = $request->all();
        $this->validateOrAbort($request_data, self::$CREATE_RULES);
        $Note=new Note();
        if($request->has('name') && !empty($request->name)){

            $request_data['name'] = json_encode($request->name);
        
        }
        $Note = Note::create($request_data);
        return $Note;

    }

    public function update($id,$request){
        
        $request_data = $request->all();
        $this->validateOrAbort($request_data, self::$UPDATE_RULES);
        $Note= Note::findOrFail($id);
        $updatable = ['title', 'name', 'content', 'due_date', 'is_done'];

        foreach ($request->all() as $key => $val) {
            if (in_array($key, $updatable)) {
                if($key == "name"){
                    $Note->$key = json_encode($val);
                }else{
                    $Note->$key = $val;
                }
                
            }
        }

        $Note->save();
        return $Note;

    }

    public function delete($id){
     
        $Note = Note::findOrFail($id);
        $Note->delete();
        $data = "No Data";
        return $data;
    }

    public function getOne($id){
    
        $model = Note::select('*');
        $model->where('id',$id);
        $result = $model->get();
        return $result; 
    

    }

    public function get($request){
        
        
        $result = $this->search(Note::class, $request);
        return $result; 

     
    }
}

?>
