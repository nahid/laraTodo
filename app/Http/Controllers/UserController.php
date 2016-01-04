<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Validator;
use Hash;
use Auth;

use App\User;

class UserController extends Controller
{
    public function getSignup()
    {
        return View::make('signup');
    }

    public function postSignup(Request $r)
    {
        $rules=[
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|same:repassword'
        ];

        $valid= Validator::make($r->input(), $rules);

        if($valid->fails()) {
            return redirect()->back()->withErrors($valid);
        }

        $user=new User;

        $user->name=$r->input('name');
        $user->email=$r->input('email');
        $user->password=Hash::make($r->input('password'));

        if($user->save()) {
            return redirect()->back()->with('msg', 'Successfully Registered');
        }

    }

    public function getLogin()
    {
        return View::make('login');
    }

    public function postLogin(Request $r)
    {
        if(Auth::attempt(['email'=>$r->input('email'), 'password'=>$r->input('password')])) {
            return redirect('/todo');
        }

        return redirect()->back()->with('error', 'Wrong email or password');
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect('/user/login');
    }

}
