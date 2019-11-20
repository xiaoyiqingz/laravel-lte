<div class="box">
    <div class="box-header">
        <h3 class="box-title">Hover Data Table</h3>
    </div>
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
            <tbody>
                @foreach ($table['body'] as $body)
                <tr>
                    @foreach ($body as $b)
                        <td>{{$b}}</td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
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
