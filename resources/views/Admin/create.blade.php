<!DOCTYPE html>
<html>

    @include('master.head')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('master.header')

  <!-- Left side column. contains the logo and sidebar -->
    @include('master.sidebar')

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <form action="{{ route('storeuser') }}" method="POST">
        {{ csrf_field() }}
        
              <!-- SELECT2 EXAMPLE -->
            <div class="box box-default">
                <div class="box-header with-border">
                <h3 class="box-title">Data User</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">

                    <div class="row">

                        <div class="col-md-3"><div class="form-group"></div></div>

                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" name="tgl">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                        <select class="form-control select2" style="width: 100%;" name="gender">
                                            <option selected="selected" value="L">Laki - Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                    <label>Jabatan</label>
                                        <select class="form-control select2" style="width: 100%;" name="jabatan">
                                            <option selected="selected" value="sales">Sales</option>
                                            <option value="helper">Helper</option>
                                            <option value="supir">Supir</option>
                                        </select>
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-success btn-lg">Simpan</button>
                                </div>
                                <!-- /.form-group -->

                            </div>
                            <!-- /.col -->
                        </div>

                        <div class="col-md-3"><div class="form-group"></div></div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->    
        </form>
    </div>
  <!-- /.content-wrapper -->

    @include('master.footer')

  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

    @include('master.script')

</body>
</html>
