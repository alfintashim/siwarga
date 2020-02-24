@extends('layouts.login')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="{{ URL::to('/')}}"><b>Sistem Informasi Data Warga RT. 004 Akcaya</b> Pengurus RT</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Log In</p>

    <form action="{{ route('login') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group has-feedback {{ $errors->has('username') ? ' has-error' : '' }}">
        <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}" required autofocus>
        @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <a href="{{ URL::to('/')}}"><button type="button" class="btn btn-default pull-left">Batal</button></a>
{{--           <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
          </div> --}}
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
