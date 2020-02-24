@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | Tentang</title>
@endsection

@section('breadcrumb')

<section class="content-header">
  <h1>
    Tentang
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{URL::to('/pengurus')}}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-edit"></i> Tentang RT. 004</li>
  </ol>
</section>

@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

      <div class="box">

        @foreach($post as $data)
          <div class="box-body">
            <a href='{{ URL::to('pengurus/tentang/'.$data->id.'/edit') }}'>
              <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button>
            </a>
          </div>

          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <tbody>
                <tr>
                  Isi Tentang
                </tr>
                <tr>
                  <td>{!! $data->isi !!}</td>
                </tr>

              </tbody>
            </table>
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