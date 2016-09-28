<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index()
    {
        $data = Tag::get();
        return view('admin.tag',['data'=>$data]);
    }

    public function add()
    {
        $data = Tag::get();
        return view('admin.tag.create',['data' => $data]);
    }

    public function store(Requests\TagRequest $request)
    {
        Tag::create($request->postFillData());
        return redirect('/admin/tag')->withSuccess('标签添加成功');
    }

    public function update($id)
    {
        $tag = Tag::find($id);
        return view('admin.tag.edit',['tag'=>$tag]);
    }

    public function edit(Requests\TagRequest $request,$id)
    {
        $data = Tag::find($id);
        $data->fill($request->postFillData())->save();
        return redirect('/admin/tag')->withSuccess('标签修改成功');
    }

    public function delete($id)
    {
        $article = Tag::find($id);
        $article->delete();
        return redirect('/admin/tag')->withSuccess('文章删除成功');
    }
}
