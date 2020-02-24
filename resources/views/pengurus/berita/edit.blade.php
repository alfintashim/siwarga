@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | Informasi | Edit</title>
@endsection

@section('css')
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('backend/pengurus/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endsection

@section('breadcrumb')

<section class="content-header">
  <h1>
    Informasi
    <small>edit informasi</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('pengurus') }}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('pengurus/berita') }}"><i class="fa fa-th"></i> Informasi</a></li>
    <li class="active"><i class="fa fa-edit"></i> Edit</li>
  </ol>
</section>

@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

      <div class="box box-info">

        <!-- form start -->
        <form role="form" method="POST" action="{{ URL::to('/pengurus/berita/'.$post->id.'/edit')}}" enctype="multipart/form-data">
          {{ method_field('PUT') }}
          {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label>Judul Informasi</label>
              <input type="text" name="judul" class="form-control" value="{{ $post->judul }}" required>
            </div>
            <div class="form-group">
              <label>Isi Informasi</label>
                <textarea name="isi" class="textarea"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{{ $post->isi }}</textarea>
            </div>
            <div class="form-group">
              <label>Penulis</label>
              <input type="text" name="penulis" class="form-control" value="{{ $post->penulis }}" required>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Gambar Informasi</label>
              <input type="file" name="nama_file" id="exampleInputFile" value="{{ $post->gambar }}">
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

@section('script')
<!-- CK Editor -->
<script src="../../bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
@endsection