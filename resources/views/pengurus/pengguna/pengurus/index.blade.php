@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | {{ Auth::User()->username }}</title>
@endsection

@section('breadcrumb')

<section class="content-header">
  <h1>
    {{ Auth::User()->username }}
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('pengurus') }}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-mobile-user"></i> {{ Auth::User()->username }}</li>
  </ol>
</section>

@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="box-body">
      @if(Session::has('success'))
      <div class="alert alert-info alert-dismissible col-md-3">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Sukses!</h4>
        {{Session::get('success')}}
      </div>
      @endif
    </div>

    <div class="col-md-3">
      <div class="box">
        <div class="box-body">
          <a href="{{ URL::to('pengurus/user/'.Auth::user()->id) }}">
            <button type="button" class="btn btn-block btn-primary btn-lg">Ganti Username</button>
          </a>
        </div>
        <div class="box-body">
          <a href="{{ route('reset') }}">
            <button type="button" class="btn btn-block btn-warning btn-lg">Ganti Password</button>
          </a>
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