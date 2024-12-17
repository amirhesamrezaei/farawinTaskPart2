<?php

namespace App\Http\Controllers;

use App\Models\userinfo;
use Illuminate\Http\Request;

class userinfocontroller extends Controller
{

    public function showform()
    {
        return view('userInformation.userForm');
    }


    public function register2(Request $request)
    {
        // $request->input('name');
        // $request->input('last_name');
        // $request->input('number');
        // $request->input('address');
        // $request->input('email');




        // first_name اسم فرمت اون ور تو ویو 
        // که همراه ریکوست میاد واست 
        
        $data = $request->all();

        userinfo::adduser($data['first_name'],$data['last_name'],$data['number'],$data['address'],$data['email']);

        return response()->json([

            'message' => 'User registered successfully.',
         ], 201);

    }


    // public function vv(Request $request){
    //   $validate =  $request->all()([

    //         'firstname' =>'required|string|max:255',
    //         'lastname' =>'required|string|max:255',
    //         'number' => 'required|string|max:11',
    //         'address' => 'required|string',
    //         'email' =>'required|string|email|max:255|unique:users',
    //     ]);

        // userinfo::registerUser();

    //     // $user = User::create([
    //     //     'name' => $request->name,
    //     //     'email' => $request->email,
    //     //     'password' => bcrypt($request->password),
    //     // ]);
    // }
}
