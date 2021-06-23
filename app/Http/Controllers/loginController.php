<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\DB;
use App\User;

class loginController extends Controller
{
	public function index()
	{
		return view('auth.login');
	}

	public function verify(LoginRequest $req)
	{
		$user = DB::table('users')
			->where('email', $req->email)
			->where('password', $req->password)
			->count();


		if ($user > 0) {
			$user = DB::table('users')
				->where('email', $req->email)
				->first();

			$req->session()->put('email', $req->email);
			$req->session()->put('usertype', $user->usertype);

			return redirect()->route('home.index');
		} else {
			$req->session()->flash('msg', 'invalid credentials');
			return redirect('/login');
		}
	}
}
