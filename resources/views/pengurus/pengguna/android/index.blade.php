@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | Android</title>
@endsection

@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ URL::asset('backend/pengurus/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
@endsection

@section('breadcrumb')

<section class="content-header">
  <h1>
    Pengguna
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('/pengurus') }}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-mobile-phone"></i> Android</li>
  </ol>
</section>

@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

      <div class="box">

        <div class="box-body">
          <a href='{{ URL::to('pengurus/android/tambah') }}'>
            <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
          </a>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
        @if(Session::has('success'))
        <div class="alert alert-info alert-dismissible col-md-3">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i> Sukses!</h4>
          {{Session::get('success')}}
        </div>
        @endif
        </div>
        
        <div class="box-body">
          <table class="table table-bordered table-striped" id="example1">
            <thead>
            <tr>
              <th width='15'>No.</th>
              <th width="110">Nomor KK</th>
              <th>Nama KK</th>
              <th width="150">Password</th>
              <th>Dibuat</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($post as $data)
            <tr>
              <td align='center'>{{$no++}}</td>
              <td>{{ $data->no_KK }}</td>
              <td>{{ $data->kepala_keluarga }}</td>
              <td>{{ $data->password }}</td>
              <td align='center'>{{ date('j M Y', strtotime($data->created_at)) }}</td>
              <td align='center' width='140'>
                <form method="POST" action="{{ URL::to('pengurus/android/'.$data->id.'/delete') }}">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                  <div class="btn-group">
                    <a href='{{ URL::to('pengurus/android/'.$data->id.'/edit') }}'>
                      <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                    </a>
                    <a>
                      <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i></button>
                    </a>
                  </div>
                  <div class="modal modal-danger fade" id="modal-danger">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Peringatan!</h4>
                        </div>
                        <div class="modal-body">
                          <p><img src="{{ asset('images/warning2.png') }}" width="150px" height="150px"></p>
                          <p>Apakah anda yakin akan menghapus akun android atas nama keluarga</p>
                          <p> <b>{{ $data->kepala_keluarga }}</b> ?</p>
                          <br>
                          <p>Jika iya, hal ini tidak dapat dikembalikan. Hati-hati!</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Batal</button>
                          <button class="btn btn-outline">Ya, Tetap Hapus</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                </form>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>
<!-- /.content -->

@endsection

@section('script')
<!-- DataTables -->
<script src="{{ asset('backend/pengurus/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('backend/pengurus/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection