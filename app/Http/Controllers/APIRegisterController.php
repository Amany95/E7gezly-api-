<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use JWTFactory;
use JWTAuth;

use Validator;
use ValidatesRequests;

use Response;


class APIRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        if($validate->fails())
        {
            return response()->json($validate->errors());
        }

        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);

        $user->save();

        $user=User::first();
        $token=JWTAuth::FromUser($user);

        return Response::json(compact('token'));
    }


    
}
