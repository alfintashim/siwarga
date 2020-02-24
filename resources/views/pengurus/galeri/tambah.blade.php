@extends('pengurus.layout')

@section('css')
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ URL::asset('backend/pengurus/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endsection

@section('title')
<title>Pengurus RT | Galeri | Tambah</title>
@endsection

@section('breadcrumb')

<section class="content-header">
  <h1>
    Galeri
    <small>tambah gambar baru</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('pengurus') }}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('pengurus/galeri') }}"><i class="fa fa-photo"></i> Galeri</a></li>
    <li class="active"><i class="fa fa-plus"></i> Tambah Gambar</li>
  </ol>
</section>

@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
  	@if($errors)
      @foreach($errors->all() as $error)
        <div class="alert alert-danger"> {{$error}}</div>
      @endforeach
    @endif
    <div class="col-md-5">

      <div class="box box-info">
        <!-- form start -->
        <form role="form" method="POST" action="{{ URL::to('/pengurus/galeri/tambah')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label>Judul</label>
              <input type="text" name="judul" class="form-control" placeholder="Masukan judul gambar..." required>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Gambar</label>
              <input type="file" name="nama_file" id="exampleInputFile" required>
              <p class="help-block">Gambar berformat .jpg atau .png</p>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
      <!-- /.box -->


    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>
<!-- /.content -->

@endsection