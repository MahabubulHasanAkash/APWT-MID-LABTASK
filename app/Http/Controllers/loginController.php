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
			->where('email', $req->username)
			->where('password', $req->password)
			->count();

		if ($user > 0) {
			$req->session()->put('username', $req->username);
			$req->session()->put('type', $req->username);

			return redirect()->route('home.index');
		} else {
			$req->session()->flash('msg', 'invalid username/password');
			return redirect('/login');
		}
	}
}
