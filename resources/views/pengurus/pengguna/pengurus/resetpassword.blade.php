@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | {{ Auth::User()->username }} | Password</title>
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
    <div class="col-xs-7">
      <div class="box-body flash-message" data-uk-alert>
        <a href="" class="uk-alert-close uk-close"></a>
        <p>{{  isset($successMessage) ? $successMessage : '' }}</p>
         @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Ada kesalahan saat melakukan input data.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      </div>
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Ganti Password</h3>
        </div><!-- /.box-header -->
        
        
        <div class="box box-primary">   
          <div class="box-header">
            <br>
          </div><!-- /.box-header -->               
          <div class="box-body no-padding">
              <form id="formResetPassword" class="form-horizontal" role="form" method="POST" action="{{ route('reset') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                  <label class="col-md-4 control-label">Password Lama</label>
                  <div class="col-md-4 @if ($errors->has('passwordlama')) has-error @endif">
                      <input type="password" class="form-control" name="passwordlama" value="{{Request::old('passwordlama')}}">
                      <small class="help-block"></small>
                  </div> 
              </div>

              <div class="form-group">
                  <label class="col-md-4 control-label">Password Baru </label>
                  <div class="col-md-4  @if ($errors->has('password')) has-error @endif">
                      <input type="password" class="form-control" name="password" value="{{Request::old('password')}}">
                      <small class="help-block"></small>
                      <!-- @if ($errors->has('jurNama')) <small class="help-block">{{ $errors->first('jurNama') }}</small> @endif -->
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-md-4 control-label">Konfirmasi Password Baru </label>
                  <div class="col-md-4  @if ($errors->has('password_confirmation')) has-error @endif">
                      <input type="password" class="form-control" name="password_confirmation" value="{{Request::old('password_confirmation')}}">
                      <small class="help-block"></small>
                      <!-- @if ($errors->has('jurNama')) <small class="help-block">{{ $errors->first('jurNama') }}</small> @endif -->
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary" id="button-reg">
                          Simpan
                      </button>                              
                      <a href="{{ URL::to('/pengurus/user') }}" title="Cancel">
                      <button type="button" class="btn btn-default" id="button-reg">
                          Cancel
                      </button>
                      </a>  
                  </div>
              </div>
              </form>   
          </div><!-- /.box-body -->
        </div><!-- /.box -->

      </div><!-- /.box -->

    </div><!-- /.col -->
  </div><!-- /.row -->
</section>
<!-- /.content -->

@endsection