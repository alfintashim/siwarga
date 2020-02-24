@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | Warga</title>
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

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Warga
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('pengurus')}}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-list-alt"></i> Warga</li>
  </ol>
</section>

@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

      <div class="box">

        <div class="box-header">
          <h3 class="box-title">Daftar Warga</h3>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <a href='{{ URL::to('pengurus/warga/tambah') }}'>
            <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
          </a>
        </div>
        <!-- /.box-body -->

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

          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th width='20'>No. </th>
              <th></th>
              <th width="130">NIK</th>
              <th width="200">Nama</th>
              <th width="110">Jenis Kelamin</th>
              <th width="110">Tanggal Lahir</th>
              <th>Agama</th>
              <th>Pekerjaan</th>
              <th width="150"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($post as $data)
            <tr>
              <td align='center'>{{ $no++ }}</td>
              <td align="center"><img width="40px" class="img-circle" src="{{ asset('uploads/warga/'.$data->foto) }}"></td>
              <td><a href="{{ URL::to('pengurus/warga/'.$data->id) }}">{{ $data->NIK }}</a></td>
              <td>{{ $data->nama }}</td>
              <td>{{ $data->jk }}</td>
              <td>{{ $data->tgl_lahir }}</td>
              <td>{{ $data->agama }}</td>
              <td>{{ $data->pekerjaan }}</td>
              <td align='center'>
                <form method="POST" action="{{ URL::to('/pengurus/warga/'.$data->id.'/delete')}}">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                <div class="btn-group">
                  <a href='{{ URL::to('pengurus/warga/'.$data->id) }}'>
                    <button type="button" class="btn btn-info"><i class="fa fa-info-circle"></i></button>
                  </a>
                  <a href='{{ URL::to('pengurus/warga/'.$data->id.'/edit') }}'>
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
                          <p>Apakah anda yakin akan menghapus semua data dari warga atas nama</p>
                          <p> <b>{{ $data->nama }}</b> ?</p>
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
            @endforeach
            </tr>
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
<script src="{{ URL::asset('backend/pengurus/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('backend/pengurus/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

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