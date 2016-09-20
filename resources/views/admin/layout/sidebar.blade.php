<div class="row">
    <div class="panel sidebar">
        <div class="panel-body">
            <ul class="list-group">
                @foreach (config('menu.menu') as $url=>$menu)
                    <a href="{{ $url }}" class="list-group-item">{{ $menu }}</a>
                @endforeach
            </ul>
        </div>
    </div>
</div>