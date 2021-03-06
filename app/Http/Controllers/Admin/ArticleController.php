<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Article::get();
        return view('admin.article',['data'=>$data]);
    }

    public function add()
    {
        $data = Tag::get();
        return view('admin.operation.create',['data' => $data]);
    }

    public function store(Requests\BlogPostRequest $request)
    {
        $article = Article::create($request->postFillData());
        $article->tags()->attach($request->tag);
        return redirect('/admin/article')->withSuccess('文章添加成功');
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
        return view('admin.operation.edit',['article'=>$article,'tag'=>$tag,'tags'=>$tags]);
    }

    public function edit(Requests\BlogPostRequest $request,$id)
    {
        $data = Article::find($id);
        $data->fill($request->postFillData())->save();
        $data->tags()->sync($request->tag);
        return redirect('/admin/article')->withSuccess('文章修改成功');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        $article->tags()->detach();
        return redirect('/admin/article')->withSuccess('文章删除成功');
    }
}
