@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | Galeri | {{ $post->judul }}</title>
@endsection

@section('breadcrumb')

<section class="content-header">
  <h1>
    Galeri
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('pengurus') }}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('pengurus/galeri') }}"><i class="fa fa-photo"></i> Galeri</a></li>
    <li class="active"><i class="fa fa-info-circle"></i> Detail</li>
  </ol>
</section>

@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

      <div class="box">

        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <tbody>
              <tr>
                <td align="center"><h3>{{$post->judul}}</h3></td>
              </tr>
              <tr>
                <td align="center" max-width="100%"><img width="500px" src="{{ asset('uploads/galeri/'.$post->gambar) }}"></td>
              </tr>
            </tbody>
          </table>
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