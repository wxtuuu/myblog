<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function login()
    {
        return view('admin.user.login');
    }

    public function postLogin(Requests\UserRequest $request)
    {
        $user = $request->input('user');
        print_r($user);die;
        $password = $request->input('password');

    }
}
