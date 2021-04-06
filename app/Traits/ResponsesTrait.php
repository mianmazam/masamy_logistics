<?php

namespace App\Traits;

use Illuminate\Http\Request;
use App\User;

trait ResponsesTrait{

    // protected function HasKey(Request $request, $key)
    // {
    //     if(!$request->has($key))
    //     {
            
    //     }
    // }

    protected function required($key)
    {  
               
        return response()->json([
            'status' => 400,
            'message' => ucfirst($key).' is required!',
            'data' => null,
        ], 200);
    
    }

    protected function user_exists($id)
    {        
        $data = User::find($id);
        
        if(empty($data))
        {
            return response()->json([
                'status' => 400,
                'message' => 'User does not exists!',
                'data' => null,
            ], 200);
        }
    }

    protected function success($message, $data)
    {        
        return response([
            'status' => 200,
            'message' => $message,
            'data' => $data,
        ], 200);               
    }

    protected function failure($message)
    {        
        return response([
            'status' => 400,
            'message' => $message,
            'data' => null,
        ], 200);               
    }

    protected function exception()
    {
        return response([
            'status' => 400,
            'message' => 'There is some trouble to proceed your action!',
            'data' => null,
        ], 200);
    }

    protected function exception_with_message($e)
    {
        return response([
            'status' => 400,
            'message' => 'There is some trouble to proceed your action!',
            'data' => $e->getMessage(),
        ], 200);
    }
}

?>