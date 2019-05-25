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
              Selamat Datang
              <small>Semoga dapat membantu anda.</small>
            </h1>

            <div class="content">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="fa fa-user-o"></i></span>
                        
                            <div class="info-box-content">
                                <span class="info-box-text">User</span>
                                <span class="info-box-number">{{$count_user}}</span>
                            </div>
                        <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                        <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="fa fa-shopping-cart"></i></span>
                        
                            <div class="info-box-content">
                              <span class="info-box-text">Sales</span>
                              <span class="info-box-number">{{$count_sales}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                          <!-- /.info-box -->
                    </div>
                        <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-car"></i></span>
                        
                            <div class="info-box-content">
                              <span class="info-box-text">Supir</span>
                              <span class="info-box-number">{{$count_supir}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="fa fa-handshake-o "></i></span>
                        
                            <div class="info-box-content">
                              <span class="info-box-text">Helper</span>
                              <span class="info-box-number">{{$count_helper}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <table class="table table-hover">
                    <h3>Data User</h3>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$d->name }}</td>
                                <td>{{ preg_replace('/[^A-Za-z0-9\-]/', '', $d->jabatan) }}</td>
                                <td>{{$d->email}}</td>
                                <td>
                                    <a href="{{ route('edituser', $d->id) }}"><span class="label label-warning">Edit</span></a>
                                    <a><span class="label label">       </span></a>
                                    <form action="{{ route('deleteuser') }}" method="post">
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
