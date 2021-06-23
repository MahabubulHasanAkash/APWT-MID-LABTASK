<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Models\User;

class homeController extends Controller
{

    function index(Request $req)
    {

        $email = $req->session()->get('email');
        $usertype = $req->session()->get('usertype');

        return view('home.index', compact('email', 'usertype'));
    }



    public function create()
    {
        return view('home.create');
    }

    public function store(UserRequest $req)
    {

        if ($req->hasFile('myimg')) {

            $file = $req->file('myimg');
            /*echo "File Name: ".$file->getClientOriginalName()."<br/>";
        	echo "File Extension: ".$file->getClientOriginalExtension()."<br/>";
        	echo "File Size: ".$file->getSize();*/

            if ($file->move('upload', $file->getClientOriginalName())) {

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
                $user->profile_img  = $file->getClientOriginalName();

                if ($user->save()) {
                    return redirect()->route('home.userlist');
                } else {
                    return back();
                }
            } else {
                return back();
            }
        }
    }

    public function userlist()
    {
        $users  = User::all();
        return view('home.userlist')->with('users', $users);
    }

    public function show($id)
    {
        //$user = $id
        $user = ['id' => 1, 'name' => 'xyz', 'email' => 'xyz@aiub.edu', 'cgpa' => 4, 'img' => 'abc.png'];
        return view('home.show', $user);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('home.edit', $user);
    }

    public function update($id, Request $req)
    {

        $user = User::find($id);
        $user->username     = $req->username;
        $user->password     = $req->password;
        $user->name         = $req->name;
        $user->dept         = $req->dept;
        $user->type         = $req->type;
        $user->save();

        return redirect()->route('home.userlist');
    }

    public function delete($id)
    {
        //$user = $id
        //return view('home.show')->with('user', $user);
    }

    public function destroy($id)
    {
        //$user = $id
        //return view('home.show')->with('user', $user);
    }

    private function getUserlist()
    {
        return [
            ['id' => 1, 'name' => 'xyz', 'email' => 'xyz@aiub.edu', 'cgpa' => 4],
            ['id' => 2, 'name' => 'abc', 'email' => 'abc@aiub.edu', 'cgpa' => 3],
            ['id' => 3, 'name' => 'asd', 'email' => 'asd@aiub.edu', 'cgpa' => 3.5],
            ['id' => 4, 'name' => 'pqr', 'email' => 'pqr@aiub.edu', 'cgpa' => 2.4],
            ['id' => 5, 'name' => 'alamin', 'email' => 'alamin@aiub.edu', 'cgpa' => 1.2]
        ];
    }
}
