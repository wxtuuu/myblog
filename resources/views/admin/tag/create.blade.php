@extends('admin.index')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">@include('admin.layout.banav')</div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" action="/admin/tag/add" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-1 control-label">标签名</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="请输入标签名">
                    </div>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <div class="col-sm-offset-1 col-sm-11">
                        <button type="submit" class="btn btn-default">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ URL::asset('assets/js/ue.js') }}"></script>
@endsection