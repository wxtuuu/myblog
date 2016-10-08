<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Hash;
use Ender\UEditor\UEditor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function login()
    {
        return view('admin.user.login');
    }

    public function postLogin(Requests\AdminRequest $request)
    {

        $admin = Admin::where('user',$request->input('user'))->first();
        if ($admin){
            if (Hash::check($request->input('password') ,$admin->password )) {
                session(['user' =>$request->input('user'),'name'=>$admin->name]);
                return redirect('/admin');
            }else{
                return redirect('/admin/login')->withErrors('用户密码不正确');
            };
        }else{
            return redirect('/admin/login')->withErrors('用户不存在');
        }
    }

}
