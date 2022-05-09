<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    public function success($data, $code = 200,$message) {
        
        $response = array(
            'status' => 'success',
            'message' => $message,
            'data' => $data,
            'code' => $code
        );
        return response()->json($response, $code);
    }
    
    public function error($message, $code = 401) {
        $response = array(
            'status' => 'error',
            'error' => array(
                'code' => $code,
                'message' => $message
            )
        );
        return response()->json($response, $code);
    }

}
