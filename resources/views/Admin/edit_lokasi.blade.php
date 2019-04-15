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
            @if ($errors->any())
                <div class="alert alert-danger">
                     <ul>
                     @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <form action="{{ route('updatelokasi', $edit->id) }}" method="POST">
        {{ csrf_field() }}

              <!-- SELECT2 EXAMPLE -->
            <div class="box box-default">
                <div class="box-header with-border">
                <h3 class="box-title">Data Lokasi</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">

                    <div class="row">

                        <div class="col-md-3"><div class="form-group"></div></div>

                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <input type="text" class="form-control" name="lokasi" placeholder="Masukkan Nama Lokasi" value="{{ $edit->nama_lokasi }}">
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                    <label>Wilayah</label>
                                        <select class="form-control select2" style="width: 100%;" name="wilayah" value="{{ $edit->wilayah }}">
                                            <option selected="selected" value="utara">Utara</option>
                                            <option value="selatan">Selatan</option>
                                        </select>
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                    <label>Waktu Pemasaran</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="datetime-local" class="form-control pull-right" name="waktu" value="{{ $edit->waktu_pemesanan}}">
                                    </div>
                                    <!-- /.input group -->
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
            {{ method_field('put') }}
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
