@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | Android | Tambah</title>
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
    <small>Tambah Pengguna Android Terbaru</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('pengurus') }}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('pengurus/android') }}"><i class="fa fa-mobile-phone"></i> Android</a></li>
    <li class="active"><i class="fa fa-plus"></i> Tambah Pengguna</li>
  </ol>
</section>

@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
    
          <div class="box box-info">

            <!-- form start -->
            <form role="form" method="POST" action="{{url::to('/pengurus/android/tambah')}}">
              {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label>Nama KK</label>
                <select class="form-control select2" style="width: 100%;" name="no_KK" required>
                  <option selected="selected"></option>
                  @foreach($keluarga as $data)
                    @if($data->checkUser())
                      <option value="{{$data->no_KK}}">{{$data->kepala_keluarga}}</option>
                    @endif
                  @endforeach              
                </select>
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="text" name="pass" class="form-control" placeholder="Masukan Password ..." required>
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

<!-- Select2 -->
<script src="{{ asset('/backend/pengurus/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

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

@endsection