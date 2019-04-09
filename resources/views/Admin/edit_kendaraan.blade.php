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
        <form action="{{ route('updatekendaraan', $edit->id) }}" method="POST">
        {{ csrf_field() }}
        
              <!-- SELECT2 EXAMPLE -->
            <div class="box box-default">
                <div class="box-header with-border">
                <h3 class="box-title">Data Kendaraan</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">

                    <div class="row">

                        <div class="col-md-3"><div class="form-group"></div></div>

                        <div class="col-md-6">

                                <div class="form-group">
                                    <label>Tipe Kendaraan</label>
                                    <select class="form-control select2" style="width: 100%;" name="tipe" value="{{ $edit->tipe_kendaraan }}">
                                        <option selected="selected" value="truck">Mobil Truck</option>
                                        <option value="pickup">Mobil Pick Up</option>
                                        <option value="box">Mobil Box</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                    <label>Nomor Kendaraan</label>
                                    <input type="text" class="form-control" name="nomork" placeholder="Masukkan Nomor Kendaraan" value="{{ $edit->no_kendaraan }}">
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                    <label>Jumlah Unit</label>
                                    <input type="text" class="form-control" name="jumlahk" placeholder="Masukkan Jumlah Kendaraan" value="{{ $edit->jumlah_unit }}">
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
