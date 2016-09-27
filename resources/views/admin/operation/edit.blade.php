@extends('admin.index')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">@include('admin.layout.banav')</div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" action="/admin/article/update/{{$article->id}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-1 control-label">标题</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="标题" value="{{$article->title}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-1 control-label">内容</label>
                    <div class="col-sm-10">
                        <!-- 加载编辑器的容器 -->
                        <input type="hidden" id="content" value="{{$article->content}}">
                        <script id="container" name="content" type="text/plain"></script>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-1 control-label">TAG</label>
                    <input type="hidden" value="{{$tags}}" id="tags">
                    <div class="col-sm-10">
                        <select id="usertype" name="tag[]" class="selectpicker show-tick form-control" multiple data-live-search="false">
                            @foreach($tag as $key => $value)
                                <option>{{$value->name}}</option>
                            @endforeach
                        </select>
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
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ URL::asset('assets/js/ue.js') }}"></script>
    <script src="{{ URL::asset('assets/js/tag.js') }}"></script>
@endsection