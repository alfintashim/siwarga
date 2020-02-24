@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | Tentang | Edit</title>
@endsection

@section('breadcrumb')

<section class="content-header">
  <h1>
    Tentang
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{URL::to('/pengurus')}}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="{{URL::to('/pengurus/tentang')}}"><i class="fa fa-edit"></i> Tentang</a></li>
    <li class="active"><i class="fa fa-edit"></i> Edit</li>
  </ol>
</section>

@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

      <div class="box box-info">

        <div class="box-header">
          <h3 class="box-title">Tentang
          <small>Edit jika terdapat perubahan</small>
          </h3>
          <!-- tools box -->
        </div>

        <!-- form start -->
        <form role="form" method="POST" action="{{ URL::to('pengurus/tentang/'.$post->id.'/edit')}}">

          <div class="box-body">
              {{ csrf_field() }}
            <textarea class="textarea" name="isi" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> {{ $post->isi }} </textarea>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
          </div>
          <input type="hidden" name="_method" value="PUT"/>
        </form>
        <!-- /. form -->

      </div>
      <!-- /. box info -->

    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>
<!-- /.content -->

@endsection