<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ResponsesTrait;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use ResponsesTrait;

    public function signup(Request $request)
    {
        try{
            // if(!$request->has('name'))
            // {
            //     return $this->required($request, 'name');
            // }

            // if(!$request->has('email'))
            // {
            //     return $this->required($request, 'email');
            // }
        
            return $this->HasKey($request, 'name') == 0 ? 'Ok' : 'Not';

        }catch(\Exception $e)
        {
            return $this->exception();
        }
    }
}
