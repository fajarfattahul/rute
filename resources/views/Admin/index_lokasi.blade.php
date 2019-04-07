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
              <i>Data Lokasi</i><br>
            </h1>

            <div class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <a href="{{ route('createlokasi') }}" class="btn btn-lg">
                                    <span class="label label-warning">Tambah Lokasi</span>
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
                                    <th>Nama</th>
                                    <th>Wilayah</th>
                                    <th>Waktu Pemasaran</th>
                                    <th>Aksi</th>
                                </tr>

                                {{ $no = 1 }}
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$d->nama_lks }}</td>
                                        <td>{{$d->wilayah}}</td>
                                        <td>{{$d->waktu_pemasaran}}</td>
                                        <td>
                                            <a href="{{ route('editlokasi', $d->id) }}"><span class="label label-warning">Edit</span></a>
                                            <a><span class="label label">       </span></a>
                                            <a href="{{ route('deletelokasi', $d->id) }}"><span class="label label-danger">Hapus</span></a>
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