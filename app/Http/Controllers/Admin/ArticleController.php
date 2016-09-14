<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        return view('admin.article');
    }

    public function add(Request $request)
    {
        return view('admin.operation.add');
    }
    public function update(Request $request)
    {
        $id = $request->get('id');
        return view('admin.operation.add');
    }
}
