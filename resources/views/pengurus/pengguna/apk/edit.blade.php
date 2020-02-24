@extends('pengurus.layout')

@section('title')
<title>Pengurus RT | APK | Edit</title>
@endsection

@section('breadcrumb')

<section class="content-header">
  <h1>
    APK
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{URL::to('/pengurus')}}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="{{URL::to('/pengurus/apk')}}"><i class="fa fa-mobile-phone"></i> APK</a></li>
    <li class="active"><i class="fa fa-edit"></i> Edit</li>
  </ol>
</section>

@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-5">

      <div class="box box-info">

        <!-- form start -->
        <form role="form" method="POST" action="{{ URL::to('pengurus/apk/'.$post->id.'/edit')}}">

          <div class="box-body">
              {{ csrf_field() }}
            {{-- <input type="text" name="link" class="form-control" value="{{ $post->link }}" required> --}}
            <textarea name="link" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{{ $post->link }}</textarea>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            <a href="{{ URL::to('pengurus/apk') }}" title="Cancel">
                <button type="button" class="btn btn-default" id="button-reg">
                    Batal
                </button>
            </a>
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