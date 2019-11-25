<div class="box">
    @if(isset($table['title']) && $table['title'])
        <div class="box-header">
            <h3 class="box-title">{{$table['title']}}</h3>
        </div>
    @endif
    <!-- /.box-header -->
    <div class="box-body">
        <!---
        |---------------------------------------------------------|
        | TABLE TYPE    | table-hover                             |
        |               | table-striped                           |
        |---------------------------------------------------------|
        -->
        <table id="{{$table['id']}}" class="table table-bordered {{isset($table['style']) ? $table['style'] : 'table-striped'}}" >
            <thead>
                <tr>
                    @foreach ($table['header'] as $header)
                    <th>{{$header}}</th>
                    @endforeach
                </tr>
            </thead>
            @if (isset($table['footer']))
                <tfoot>
                    <tr>
                        @foreach ($table['footer'] as $footer)
                            <th>{{$footer}}</th>
                        @endforeach
                    </tr>
                </tfoot>
            @endif
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
