@section('extend-style')
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/iCheck/all.css')}}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/timepicker/bootstrap-timepicker.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

<div class="box {{ $style }}">
    @if ($header)
        <div class="box-header with-border">
            <h3 class="box-title">{{ $header }}</h3>
        </div>
        <!-- /.box-header -->
    @endif

    <!-- form start -->
    <form role="form" class='form-horizontal' action='/data/form1' method="post">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1" class="col-md-2 control-label">Email address</label>
                <div class="col-md-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name='email' value={{$formData['email'] ?? ''}}>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="col-md-2 control-label">Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value={{$formData['password'] ?? ''}}>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Date</label>

                <div class="date col-md-9">
                    <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Date range</label>

                <div class="col-md-9">
                    <input type="text" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
            </div>
            <div class="form-group">
                <label for="exampleInputFile" class="col-md-2 control-label">File input</label>
                <div class='col-md-9'>
                    <input type="file" id="exampleInputFile">

                    <p class="help-block">Example block-level help text here.</p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="checkbox"> Check me out
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Select</label>
                <div class="col-md-9">
                    <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>
@section('js')
    <!-- Select2 -->
    <script src="{{asset('adminlte/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- InputMask -->
    <script src="{{asset('adminlte/plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{asset('adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{asset('adminlte/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
    <!-- date-range-picker -->
    <script src="{{asset('adminlte/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{asset('adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- bootstrap color picker -->
    <script src="{{asset('adminlte/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
    <!-- bootstrap time picker -->
    <script src="{{asset('adminlte/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{asset('adminlte/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('adminlte/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- Page script -->
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                {
                    ranges   : {
                        'Today'       : [moment(), moment()],
                        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate  : moment()
                },
                function (start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            })

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass   : 'iradio_minimal-blue'
            })
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass   : 'iradio_minimal-red'
            })
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass   : 'iradio_flat-green'
            })

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            //Timepicker
            $('.timepicker').timepicker({
                showInputs: false
            })
        })
    </script>
@endsection
