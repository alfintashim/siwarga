@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | Keluarga | {{ $post->kepala_keluarga }}</title>
@endsection

@section('breadcrumb')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Keluarga
    <small>detail keluarga</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('/pengurus') }}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/pengurus/keluarga') }}"><i class="fa fa-list-alt"></i> Keluarga</a></li>
    <li class="active"><i class="fa fa-info-circle"></i> Detail</li>
  </ol>
</section>

@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

      <div class="box">

      <form method="POST" action="{{ URL::to('pengurus/keluarga/'.$post->id.'/delete') }}">
        {{ method_field('DELETE') }}
           {{ csrf_field() }}
        <div class="box-body">
          <a href='{{ URL::to('pengurus/keluarga/'.$post->id.'/edit') }}'>
            <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button>
          </a>
          <a>
            <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
          </a>
        </div>
      </form>

        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <tbody>
            <tr>
              <th width="150">Nomor KK</th>
              <td>{{ $post->no_KK }}</td>
            </tr>
            <tr>
            	<th width="150">Nama KK</th>
            	<td>{{ $post->kepala_keluarga }}</td>
            </tr>
            <tr>
            	<th width="150">Alamat</th>
            	<td>{{ $post->alamat }}</td>
            </tr>
            </tbody>
          </table>
      	</div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <div class="box">

        <div class="box-header">
          <h3 class="box-title">Anggota Keluarga</h3>
        </div>
        <!-- /.box-header -->
        
      	<div class="box-body">

          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th width='20'>No.</th>
              <th width="180">NIK</th>
              <th width="400">Nama</th>
              <th width="150">Jenis Kelamin</th>
              <th width="150">SHDK</th>
              <th width="150"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($warga as $post)
            <tr>
            
              <td align='center'>{{ $no++ }}</td>
              <td>
                {{ $post->NIK }}
              </td>
              <td>
                {{ $post->nama }}
              </td>
              <td>
                {{ $post->jk }}
              </td>
              <td>
                {{ $post->SHDK }}
              </td>
              <td align='center'>
                <div class="btn-group">
                  <a href='{{ URL::to('pengurus/warga/'.$post->id) }}'>
                    <button type="button" class="btn btn-info"><i class="fa fa-info-circle"></i></button>
                  </a>
                  <a href='{{ URL::to('pengurus/warga/'.$post->id.'/edit') }}'>
                    <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                  </a>
                </div>
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