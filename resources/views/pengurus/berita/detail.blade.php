@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | Informasi | {{ $post->judul }}</title>
@endsection

@section('breadcrumb')

<section class="content-header">
  <h1>
    Informasi
    <small>detail informasi</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ URL::to('pengurus') }}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('pengurus/berita') }}"><i class="fa fa-th"></i> Informasi</a></li>
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
        <form method="POST" action="{{ URL::to('/pengurus/berita/'.$post->id.'/delete')}}" enctype="multipart/form-data">
          {{ method_field('DELETE')}}
          {{csrf_field() }}
        <div class="box-body">
          <a href='{{ URL::to('pengurus/berita/tambah') }}'>
            <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
          </a>
          <a href='{{ URL::to('pengurus/berita/'.$post->id.'/edit') }}'>
            <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button>
          </a>
          <a>
            <button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
          </a>
        </div>
        </form>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <tbody>
              <tr>
                <td colspan="2" align="center"><b>{{$post->judul}}</b></td>
              </tr>
              <tr>
                <td width="250">Tanggal : {{ date('j M Y', strtotime($post->created_at)) }}</td>
                <td>Penulis : {{$post->penulis}}</td>
              </tr>
              <tr>
                <td colspan="2" align="center" max-width="100%">
                    @if($post->gambar == '') 
                    <img src=""/>
                    @else
                    <img width="500px" src="{{ asset('uploads/berita/'.$post->gambar) }}"/>   
                    @endif
                </td>
              </tr>
              <tr>
                <td colspan="2">{!! $post->isi !!}</td>
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