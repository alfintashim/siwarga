@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | Warga | Tambah</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ URL::asset('/backend/pengurus/bower_components/select2/dist/css/select2.min.css')}}">

<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{ URL::asset('backend/pengurus/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endsection

@section('breadcrumb')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Warga
    <small>Tambah warga baru</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('/pengurus') }}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/pengurus/warga') }}"><i class="fa fa-list-alt"></i> Warga</a></li>
    <li class="active"><i class="fa fa-plus"></i> Tambah</li>
  </ol>
</section>

@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    
    <div class="col-md-9">

      <div class="box box-primary">

        <div class="box-body">
          <form class="form-horizontal" role="form" method="POST" action="{{ URL::to('/pengurus/warga/tambah') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label class="col-md-2 control-label">Nama KK</label>
                <div class="col-md-5">
                <select class="form-control select2" style="width: 100%;" name="no_KK" required>
                  <option selected="selected"></option>
                @foreach($keluarga as $data)
                  <option value="{{$data->no_KK}}">{{$data->kepala_keluarga}}</option>
                @endforeach
                </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">NIK</label>
                <div class="col-md-3">
                    <input type="text" name="nik" class="form-control" required>
                </div> 
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Nama</label>
                <div class="col-md-6">
                    <input type="text" name="nama" class="form-control" required>
                </div> 
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Jenis Kelamin</label>
                <div class="col-md-3">
                <select class="form-control select2" style="width: 100%;" name="jk" required>
                  <option selected="selected"></option>
                  <option>Laki-Laki</option>
                  <option>Perempuan</option>              
                </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Tanggal Lahir</label>
                <div class="col-md-3">
                  <!-- Date -->
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="tgl_lahir" class="form-control pull-right" id="datepicker" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">SHDK</label>
                <div class="col-md-4">
                <select class="form-control select2" style="width: 100%;" name="shdk" required>
                  <option selected="selected"></option>
                  <option>Kepala Keluarga</option>
                  <option>Istri</option>              
                  <option>Anak</option>
                  <option>Famili Lain</option>
                </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Status</label>
                <div class="col-md-2">
                <select class="form-control select2" style="width: 100%;" name="status" required>
                  <option selected="selected"></option>
                  <option>Belum</option>
                  <option>Kawin</option>              
                </select>
                </div> 
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Agama</label>
                <div class="col-md-3">
                <select class="form-control select2" style="width: 100%;" name="agama" required>
                  <option selected="selected"></option>
                  <option>Islam</option>
                  <option>Kristen</option>              
                  <option>Katholik</option>
                  <option>Budha</option>
                  <option>Hindu</option>
                </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Golongan Darah</label>
                <div class="col-md-1">
                    <input type="text" class="form-control" name="goldar" value="-" required>
                </div> 
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Pendidikan Akhir</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="pendidikan" value="-" required>
                </div> 
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Pekerjaan</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="pekerjaan" value="-" required>
                </div> 
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Akta Lahir</label>
                <div class="col-md-3">
                <select class="form-control select2" style="width: 100%;" name="akta_lahir" required>
                  <option selected="selected">Tidak Ada</option>
                  <option>Ada</option>              
                </select>
                </div> 
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">No. Akta Lahir</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="no_akta_lahir" value="-" required>
                </div> 
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">No. Akta Kawin</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="no_akta_kawin" value="-" required>
                </div> 
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">No. Akta Cerai</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="no_akta_cerai" value="-" required>
                </div> 
            </div>

            
            <div class="form-group">
                <label class="col-md-2 control-label">Cacat</label>
                <div class="col-md-3">
                <select class="form-control select2" style="width: 100%;" name="cacat" required>
                  <option selected="selected">Tidak Ada</option>
                  <option>Ada</option>              
                </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Tanggal Rekam</label>
                <div class="col-md-2">
                    <input type="text" name="tgl_rekam" class="form-control" value="0000-00-00" required>
                </div> 
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Nama Ayah</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nama_ayah" value="-" required>
                </div> 
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Nama Ibu</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nama_ibu" value="-" required>
                </div>  
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="exampleInputFile">Foto</label>
                <div class="col-md-4">
                  <input type="file" name="nama_file" id="exampleInputFile">
                  <p class="help-block">Gambar berformat .jpg atau .png</p>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" name="simpan" class="btn btn-primary" id="button-reg">
                        Simpan
                    </button>                    
                    <a href="{{ URL::to('pengurus/warga') }}" title="Cancel">
                    <button type="button" class="btn btn-default" id="button-reg">
                        Batal
                    </button>
                    </a>  
                </div>
            </div>
          </form>   

        </div><!-- /.box-body -->
      </div><!-- /.box -->

    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>
<!-- /.content -->

@endsection

@section('script')

<!-- Select2 -->
<script src="{{ URL::asset('/backend/pengurus/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ URL::asset('/backend/pengurus/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    })

    //Date picker
    $('#datepicker').datepicker({
      format: "yyyy-mm-dd",
      autoclose: true
    })
</script>

@endsection