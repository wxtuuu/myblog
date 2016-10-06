<?php

namespace App\Http\Controllers\Admin;

use Ender\UEditor\UEditor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $admin = Auth::guard('admin')->user();
        return $admin->name;
    }

    public function user()
    {
        return view('admin.user');
    }

}
