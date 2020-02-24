@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | Keluarga | Tambah</title>
@endsection

@section('breadcrumb')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Keluarga
    <small>tambah keluarga baru</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('/pengurus') }}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/pengurus/keluarga') }}"><i class="fa fa-list-alt"></i> Keluarga</a></li>
    <li class="active"><i class="fa fa-plus"></i> Tambah</li>
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
    <div class="col-md-6">

      <div class="box box-primary">

        <div class="box-body">
          <form class="form-horizontal" role="form" method="POST" action="{{ URL::to('/pengurus/keluarga/tambah') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label class="col-md-4 control-label">Nomor KK</label>
                <div class="col-md-6">
                    <input type="text" name="no_kk" class="form-control" required>
                </div> 
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Nama Kepala Keluarga</label>
                <div class="col-md-6">
                    <input type="text" name="nama_kk" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Alamat</label>
                <div class="col-md-6">
                    <textarea type="text" name="alamat" class="form-control" required></textarea>
                </div>
            </div> 

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" name="simpan" class="btn btn-primary" id="button-reg">
                        Simpan
                    </button>

                    
                    <a href="{{ URL::to('pengurus/keluarga') }}" title="Cancel">
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