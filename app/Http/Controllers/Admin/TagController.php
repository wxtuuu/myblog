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
        $article = Article::create($request->postFillData());
        $article->tags()->attach($request->tag);
        return redirect('/admin/tag')->withSuccess('文章添加成功');
    }

    public function update($id)
    {
        $article = Article::find($id);
        $has_tag = $article->tags;
        foreach ($has_tag as $value){
            $tags[] = $value->name;
        }
        $tags =json_encode($tags);
        $tag = Tag::get();
        return view('admin.tag.edit',['article'=>$article,'tag'=>$tag,'tags'=>$tags]);
    }

    public function edit(Requests\BlogPostRequest $request,$id)
    {
        $data = Article::find($id);
        $data->fill($request->postFillData())->save();
        $data->tags()->sync($request->tag);
        return redirect('/admin/tag')->withSuccess('文章修改成功');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        $article->tags()->detach();
        return redirect('/admin/tag')->withSuccess('文章删除成功');
    }
}
