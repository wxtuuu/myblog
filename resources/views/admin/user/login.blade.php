@extends('admin.user.index')
@section('content')
    <div class="container col-sm-6 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">登陆</div>
            <div class="panel-body">
                <form role="form" action="/admin/login" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="user" class="control-label col-sm-3">用户名:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="user" name="user" placeholder="请输入用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label col-sm-3">密码:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="password" name="password" placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">记住我
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">登陆</button>
                        </div>
                    </div>
                    @if (count($errors) > 0)
                        <div class="col-sm-offset-1 col-sm-11">
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                            @endforeach
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection