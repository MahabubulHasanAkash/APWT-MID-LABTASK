<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Models\User;

class signupController extends Controller
{
    public function index()
    {
        return view('auth.signup');
    }

    public function signup(SignupRequest $req)
    {
        $user = new User();
        $user->name = $req->name;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->phone = $req->phone;
        $user->company = $req->company;
        $user->city = $req->city;
        $user->country = $req->country;
        $user->usertype = $req->usertype;
        if ($user->save()) {
            return redirect()->route('/login');
        } else {
            return back();
        }
    }
}
