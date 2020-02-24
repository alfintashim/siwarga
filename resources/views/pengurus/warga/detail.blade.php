@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | Warga | {{ $post->nama }}</title>
@endsection

@section('breadcrumb')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Warga
    <small>Detail Warga</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('/pengurus') }}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/pengurus/warga') }}"><i class="fa fa-list-alt"></i> Warga</a></li>
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

        <div class="box-body">
          <a href='{{ URL::to('pengurus/warga/'.$post->id.'/edit') }}'>
            <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button>
          </a>
        </div>

        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <tbody>
            <tr>
              <td colspan="2" align="center" width="100%">
                <img src="{{ asset('uploads/warga/'.$post->foto) }}">
              </td>
            </tr>
            <tr>
              <th width="150">NIK</th>
              <td width="400">{{ $post->NIK }}</td>
            </tr>
            <tr>
            	<th width="150">Nama Lengkap</th>
            	<td>{{ $post->nama }}</td>
            </tr>
            <tr>
            	<th width="150">Jenis Kelamin</th>
            	<td>{{ $post->jk }}</td>
            </tr>
            <tr>
              <th width="150">Tanggal Lahir</th>
              <td>{{ $post->tgl_lahir }}</td>
            </tr>
            <tr>
              <th width="150">SHDK</th>
              <td>{{ $post->shdk }}</td>
            </tr>
            <tr>
              <th width="150">Status</th>
              <td>{{ $post->status }}</td>
            </tr>
            <tr>
              <th width="150">Agama</th>
              <td>{{ $post->agama }}</td>
            </tr>
            <tr>
              <th width="150">Golongan Darah</th>
              <td>{{ $post->goldar }}</td>
            </tr>
            <tr>
              <th width="150">Pendidikan Akhir</th>
              <td>{{ $post->pddk_akhir }}</td>
            </tr>
            <tr>
              <th width="150">Pekerjaan</th>
              <td>{{ $post->pekerjaan }}</td>
            </tr>
            <tr>
              <th width="150">Akta Lahir</th>
              <td>{{ $post->akta_lhr }}</td>
            </tr>
            <tr>
              <th width="150">No Akta Lahir</th>
              <td>{{ $post->no_akta_lhr }}</td>
            </tr>
            <tr>
              <th width="150">No. Akta Kawin</th>
              <td>{{ $post->no_akta_kwn }}</td>
            </tr>
            <tr>
              <th width="150">No. Akta Cerai</th>
              <td>{{ $post->no_akta_cerai }}</td>
            </tr>
            <tr>
              <th width="150">cacat</th>
              <td>{{ $post->cacat }}</td>
            </tr>
            <tr>
              <th width="150">Tanggal Rekam</th>
              <td>{{ $post->tgl_rekam }}</td>
            </tr>
            <tr>
              <th width="150">Nama Ayah</th>
              <td>{{ $post->nama_ayah }}</td>
            </tr>
            <tr>
              <th width="150">Nama Ibu</th>
              <td>{{ $post->nama_ibu }}</td>
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