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

        <section class="content-header">
            <h1>
              <i>Data Barang</i><br>
            </h1>

            <div class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <a href="{{ route('createbarang') }}" class="btn btn-lg">
                                    <span class="label label-warning">Tambah Barang</span>
                                </a>

                                <div class="box-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Cari Lokasi">

                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>NO</th>
                                    <th>Nama Barang</th>
                                    <th>Jenis Barang</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Pembuatan</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$d->nama_barang }}</td>
                                        <td>{{$d->jenis_barang}}</td>
                                        <td>{{$d->harga}}</td>
                                        <td>{{$d->stock}}</td>
                                        <td>{{$d->pembuatan}}</td>
                                        <td>
                                            <a href="{{ route('editbarang', $d->id) }}"><span class="label label-warning">Edit</span></a>
                                            <a><span class="label label">       </span></a>
                                            <form action="{{ route('deletebarang') }}" method="post">
                                                {{ csrf_field() }}
                                                <button type="submit" name="delete" value="{{$d->id}}" class="label label-danger">Hapus</button>
                                                {{ method_field('delete') }}
                                            </form>
                                            {{-- <a href="{{ route('deletelokasi', $d->id) }}"><span class="label label-danger">Hapus</span></a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
        </section>

  </div>
  <!-- /.content-wrapper -->

    @include('master.footer')

  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

    @include('master.script')

</body>
</html>
