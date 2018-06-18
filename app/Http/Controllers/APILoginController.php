<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use JWTFactory;
use JWTAuth;

use Validator;
use ValidatesRequests;
use Auth;
use Response;
class APILoginController extends Controller
{
    public function login(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required'
        ]);

        if($validate->fails())
        {
            return response()->json($validate->errors());
        }

        $credentials=$request->only('email','password');

        try
        {
            if(!$token=JWTAuth::attempt($credentials))
            {
                return response()->json(['error'=>'invalide user or password'],[401]);
            }
        }
        catch(JWTException $e)
        {
             return response()->json(['error'=>'could not create token'],[500]);
        }

        return response()->json(compact('token'));
    }
}
