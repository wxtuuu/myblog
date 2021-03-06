@extends('admin.index')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">@include('admin.layout.banav')</div>
        <div class="panel-body">
            <a type="button" class="btn btn-primary" href="/admin/article/add">添加文章</a>
            @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    {{session('success')}}
                </div>
            @endif
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>标题</th>
                    <th>创建时间</th>
                    <th>修改时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                    <td>{{$article->created_at}}</td>
                    <td>{{$article->updated_at}}</td>
                    <td class="update">
                        <a href="/admin/article/update/{{$article->id}}" class="glyphicon glyphicon-pencil"></a>
                        <a href="/admin/article/delete/{{$article->id}}" class="glyphicon glyphicon-remove"></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection