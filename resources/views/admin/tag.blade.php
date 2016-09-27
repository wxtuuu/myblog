@extends('admin.index')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">@include('admin.layout.banav')</div>
        <div class="panel-body">
            <a type="button" class="btn btn-primary" href="/admin/tag/add">添加标签</a>
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
                    <th>标签名</th>
                    <th>创建时间</th>
                    <th>修改时间</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td>{{$tag->created_at}}</td>
                        <td>{{$tag->updated_at}}</td>
                        <td class="update">
                            <a href="/admin/tag/update/{{$tag->id}}" class="glyphicon glyphicon-pencil"></a>
                            <a href="/admin/tag/delete/{{$tag->id}}" class="glyphicon glyphicon-remove"></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection