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

    public function add()
    {
        $data = array('0'=>'0','1'=>'1');
        return view('admin.operation.create',['data' => $data]);
    }

    public function update(Request $request)
    {
        $id = $request->get('id');
        $data = array('0'=>'0','1'=>'1');
        return view('admin.operation.edit',['data' => $data]);
    }
}
