@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | {{ Auth::User()->username }} | Edit</title>
@endsection

@section('breadcrumb')

<section class="content-header">
  <h1>
    {{ Auth::User()->username }}
    <small>Control Panel</small>
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
        <div class="col-md-3">
    
          <div class="box box-info">

            <!-- form start -->
            <form role="form" method="POST" action="{{ URL::to('pengurus/user/'.Auth::User()->id) }}">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label>Username Baru</label>
                <input type="text" name="username" class="form-control">
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="{{ URL::to('pengurus/user') }}" title="Cancel">
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