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
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name='email' value="{{ isset($formData['email']) ? $formData['email']  : '' }}">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="col-md-2 control-label">Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
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
        </div>
        <!-- /.box-body -->

        <div class="box-footer"> 
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>
