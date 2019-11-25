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
            'serverSide'  : true,
            'ajax'        : 'http://127.0.0.1:8092/body1',
        })
    })
</script>
