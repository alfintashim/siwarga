@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | Android | Edit</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/backend/pengurus/bower_components/select2/dist/css/select2.min.css')}}">

<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{ asset('backend/pengurus/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endsection

@section('breadcrumb')

<section class="content-header">
  <h1>
    Pengguna Android
    <small>Edit Pengguna Android Terbaru</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('pengurus') }}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('pengurus/pengguna/android') }}"><i class="fa fa-mobile-phone"></i> Android</a></li>
    <li class="active"><i class="fa fa-edit"></i> Edit Pengguna</li>
  </ol>
</section>

@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
    
          <div class="box box-info">

            <!-- form start -->
            <form role="form" method="POST" action="{{ URL::to('pengurus/android/'.$post->id.'/edit') }}">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label>No. KK</label>
                <input type="text" name="no_KK" class="form-control" value="{{ $post->no_KK }}" readonly="readonly">
                {{-- <h4>{{ $keluarga->kepala_keluarga }}</h4> --}}
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="text" name="pass" class="form-control">
                <small>Tekan "batal" jika tidak jadi ganti password</small>
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="{{ URL::to('pengurus/android') }}" title="Cancel">
                <button type="button" class="btn btn-default" id="button-reg">
                    Batal
                </button>
              </a>  
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

{{-- @section('script')

<!-- Select2 -->
<script src="{{ asset('/backend/pengurus/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    })

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
</script>

@endsection --}}