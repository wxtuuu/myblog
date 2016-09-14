@extends('admin.index')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">@include('admin.layout.banav')</div>
        <div class="panel-body">
            <a type="button" class="btn btn-primary">添加文章</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>标题</th>
                    <th>副标题</th>
                    <th>标题链接</th>
                    <th>状态</th>
                    <th>创建时间</th>
                    <th>修改时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                    <td class="update">
                        <a href="#" class="glyphicon glyphicon-pencil"></a>
                        <a href="#" class="glyphicon glyphicon-remove"></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection