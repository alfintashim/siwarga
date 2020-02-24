@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | APK</title>
@endsection

@section('breadcrumb')

<section class="content-header">
  <h1>
    APK
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{URL::to('/pengurus')}}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-mobile-phone"></i> APK</li>
  </ol>
</section>

@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-5">

      <div class="box">

        @foreach($post as $data)
          <div class="box-body">
            <a href='{{ URL::to('pengurus/apk/'.$data->id.'/edit') }}'>
              <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button>
            </a>
          </div>

          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <tbody>
                <tr>
                  Link Download
                </tr>
                <tr>
                  <td><a href="{!! $data->link !!}">{!! $data->link !!}</a></td>
                </tr>
              </tbody>
            </table>

            Google Drive<br>
                  email : <b>rt4rw11@gmail.com</b><br>
                  password : <b>akcayart4rw11</b><br>
          </div>
          <!-- /.box-body -->

          
        @endforeach
        
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>
<!-- /.content -->

@endsection