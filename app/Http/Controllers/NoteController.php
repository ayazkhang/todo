<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\NoteService;

class NoteController extends Controller{

    public function __construct()
    {
        $this->service=new NoteService();
    }

    public function get_all(Request $request)
    {
        $Note=$this->service->get($request);
        $message="All Notes has been fetched successfully";
        return $this->success($Note,200,$message);
    }

    public function get_one($id)
    {
        
        $Note=$this->service->getOne($id);
        $message="Note has been fetched successfully";
        return $this->success($Note,200,$message);
    }



    public function create(Request $request)
    {
        $Note=$this->service->create($request);
        $message="Note has been created successfully";
        return $this->success($Note,200,$message);
    }
    
    public function update($id, Request $request)
    {
        $Note=$this->service->update($id,$request);
        $message="Note has been updated successfully";
        return $this->success($Note,200,$message);

    }


    public function destroy($id)
    {
        $Note=$this->service->delete($id);
        $message="Note has been deleted successfully";
        return $this->success($Note,200,$message);

    }
}
