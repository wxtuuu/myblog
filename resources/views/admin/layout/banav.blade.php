<ol class="breadcrumb">
    @foreach(explode('/',Request::path()) as $value)
        <li><a href="{{config('menu.nav.'.$value.'.1')}}">{{config('menu.nav.'.$value.'.0')}}</a></li>
    @endforeach
</ol>
