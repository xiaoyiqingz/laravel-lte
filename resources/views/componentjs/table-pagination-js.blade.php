<script src="{{asset('/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('/adminlte/bower_components/fastclick/lib/fastclick.js')}}"></script>

<script>
    $(function () {
        $('{{'#' . $table['id']}}').DataTable({
            'paging'      : {{json_encode($paging)}},
            'lengthChange': {{json_encode($lengthChange)}},
            'searching'   : {{json_encode($searching)}},
            'ordering'    : {{json_encode($ordering)}},
            'info'        : {{json_encode($info)}},
            'autoWidth'   : {{json_encode($autoWidth)}},
            'order'       : [],     // 通过columns设置第一列不可排序，但是第一次加载第一列仍显示排序按钮，通过此设置可禁止默认第一列排序
            //'columnDefs'  : [
            //    {'orderable' : false, 'targets' : [0, 2, 4]}
            //],
            //'columns'     : [
            //    {"orderable": false, "name": "test1"},
            //    {"orderable": true, "name": "test2"},
            //    {"orderable": false, "name": "test3"},
            //    {"orderable": false, "name": "test4"},
            //    {"orderable": false, "name": "test5"},
            //    {"orderable": false, "name": "test6"}
            //],
            'serverSide'  : true,
            'ajax'        : {!! json_encode($url) !!},
        })
    })
</script>
