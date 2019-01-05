<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function register(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'confirmpassword' => 'required|same:password',
            'dob' => 'required',
            'address' => 'required',
            'cardnum' => 'required|regex:/\b\d{10}\b/|integer',
            'terms&conditions' => 'required'
        ]);

        //Create New User
        $newUser = new User();
        $newUser->name = $request->input('name');
        $newUser->email = $request->input('email');
        $newUser->dob = $request->input('dob');
        $newUser->address = $request->input('address');
        $newUser->cardnum = $request->input('cardnum');
        $newUser->password = $request->input('password');

        //Save Message
        $newUser->save();

        //Redirect
        return redirect('/')->with('success', 'Congratulations, you have become our member !');


    }

    public function login(Request $request){
        $data = User::where('email', $request->email)->first();

        if ($data != null) {
            if ($data->password == $request->password) {

                return redirect('/homeMember');
            } else {
                return redirect('/login')->with("alert", "Invalid Password !");
            }
        }

        return redirect('/login')->with("alert", "Invalid E-Mail !");

    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
