@extends('pengurus.layout')

@section('title')
<title>Pengurus RT</title>
@endsection

@section('breadcrumb')

<section class="content-header">
  <h1>
    Selamat Datang Pengurus RT. 004 / RW. 011 Akcaya
    <small>Dashboard</small>
  </h1>
</section>

@endsection

@section('content')

<section class="content">
    <!-- Info boxes -->
    <div class="row">
      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Keluarga</span>
            <span class="info-box-number">{{ $jml_keluarga }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Warga</span>
            <span class="info-box-number">{{ $jml_warga }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-male"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Laki-Laki</span>
            <span class="info-box-number">{{ $jml_laki }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa fa-female"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Perempuan</span>
            <span class="info-box-number">{{ $jml_perempuan }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection