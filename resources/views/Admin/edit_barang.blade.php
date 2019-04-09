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
        <form action="{{ route('updatebarang', $edit->id) }}" method="POST">
        {{ csrf_field() }}
        
              <!-- SELECT2 EXAMPLE -->
            <div class="box box-default">
                <div class="box-header with-border">
                <h3 class="box-title">Data Barang</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">

                    <div class="row">

                        <div class="col-md-3"><div class="form-group"></div></div>

                        <div class="col-md-6">

                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Barang" value="{{ $edit->nama_barang }}">
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                    <label>Jenis Barang</label>
                                    <select class="form-control select2" style="width: 100%;" name="jenis" value="{{ $edit->jenis_barang }}">
                                        <option selected="selected" value="snack">Snack</option>
                                        <option value="mie">Mie Instan</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                    <label>Harga Barang</label>
                                    <input type="text" class="form-control" name="harga" placeholder="Masukkan Harga Barang" value="{{ $edit->harga }}">
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                    <label>Jumlah Stok</label>
                                    <input type="text" class="form-control" name="stock" placeholder="Masukkan Jumlah Stok" value="{{ $edit->stock }}"
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group">
                                    <label>Waktu Pembuatan</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" name="pembuatan" value="{{ $edit->pembuatan }}">
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
