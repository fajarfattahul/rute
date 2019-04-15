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
                @if ($errors->any())
                    <div class="alert alert-danger">
                         <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            
                <form action="{{ route('updateuser', $edit->id) }}" method="POST">
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
                                                <label>Nama User</label>
                                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lokasi" value="{{ $edit->name }}">
                                            </div>
                                            <!-- /.form-group -->
            
                                            <div class="form-group">
                                                <label>Jabatan</label>
                                                    <select class="form-control select2" style="width: 100%;" name="jabatan" value="{{ $edit->jabatan }}">
                                                        <option selected="selected" value="sales">Sales</option>
                                                        <option value="helper">Helper</option>
                                                        <option value="supir">Supir</option>
                                                    </select>
                                            </div>
                                            <!-- /.form-group -->
            
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Masukkan Password" value="{{ $edit->email }}">
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
