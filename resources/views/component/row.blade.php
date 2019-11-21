<div class="row">
    @foreach ($columns as $column)
    <div class="col-md-{{$column['colWidth']}}">
        @foreach ($column['column'] as $c)
            {{ $c['content'] }}
        @endforeach
    </div>
    @endforeach
</div>
