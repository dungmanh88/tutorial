<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function login(Request $req)
    {
        $data=[];
        $name = $req->input('name');
        $password = $req->input('password');

        $user = DB::select('select * from users where name = :name and password = :password', ['name' => $name, 'password' => $password]);
        

        $data['user'] = $user;

        return view('home', $data);
    }
}
