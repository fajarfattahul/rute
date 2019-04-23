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
                                <a href="{{ route('createpemasaran') }}" class="btn btn-lg">
                                    <span class="label label-warning">Tambah Data Pemasaran</span>
                                </a>

                                <div class="box-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Cari Data">

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
                                    <th>Nama Sales</th>
                                    <th>Lokasi</th>
                                    <th>Waktu</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$d->id_sales}}</td>
                                        <td>{{$d->id_lokasi}}</td>
                                        <td>{{$d->waktu_pemasaran}}</td>
                                        <td>
                                            <a href="{{ route('editpemasaran', $d->id) }}"><span class="label label-warning">Edit</span></a>
                                            <a><span class="label label">       </span></a>
                                            <form action="{{ route('deletepemasaran') }}" method="post">
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
