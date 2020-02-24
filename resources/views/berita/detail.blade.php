@extends('layouts.layout')

@section('title')
<title>SIWARGA | {{ $post->judul }}</title>
@endsection

@section('navbar')
<!-- MAIN NAVIGATION -->
<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li>
            <a href="{{ URL::to('/') }}">Beranda</a>
        </li>

        <li>
            <a href="{{ URL::to('/tentang') }}">Tentang</a>
        </li>

        <li class="current-menu-item">
            <a href="{{ URL::to('/informasi') }}">Informasi</a>
        </li>
        
        <li>
            <a href="{{ URL::to('/penduduk') }}">Penduduk</a>
        </li>

        <li>
            <a href="{{ URL::to('/galeri') }}">Galeri</a>
        </li>

        <li>
            @foreach($apk as $data)
            <a href="{!! $data->link !!}">Download APK</a>
            @endforeach
        </li>
    </ul><!-- .nav.navbar-nav end -->
</div><!-- MAIN NAVIGATION END -->

@endsection

@section('pagetitle')
<!-- .page-title start -->
<div class="page-title-style01 page-title-negative-top pt-bkg01">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Sistem Informasi Data Warga Kelurahan Akcaya</h1>

                <div class="breadcrumb-container">
                    <ul class="breadcrumb clearfix">
                        <li></li>

                        <li>
                            <a href="{{ URL::to('/') }}">Beranda</a>
                        </li>

                        <li>
                            <a href="{{ URL::to('/informasi') }}">Informasi</a>
                        </li>

                        <li>{{ $post->judul }}</li>
                    </ul><!-- .breadcrumb end -->
                </div><!-- .breadcrumb-container end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-title-style01.page-title-negative-top end -->
@endsection

@section('content')

<div class="page-content custom-bkg bkg-grey">
    <div class="container">

        <div class="row">
            <div class="blog-posts post-single">
                <div class="blog-post clearfix">

                    @if($post->gambar == '')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="custom-heading02">
                                <p>
                                    <h2>{{ $post->judul }}</h2>
                                </p>
                            </div><!-- .custom-heading02 end -->
                        </div><!-- .col-md-12 end -->
                    </div>

                    <div class="post-body">
                        <h6>
                            {!! $post->isi !!}
                        </h6>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                {{ $post->penulis }}
                            </li>
                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                {{ date('j M Y', strtotime($post->created_at)) }}
                            </li>
                        </ul>
                    </div><!-- .post-body end -->

                    @else

                    <div class="post-media" align="center">
                        <div class="post-img">                             
                            <img src="{{ asset('uploads/berita/'.$post->gambar) }}" width="500px" />
                        </div>
                    </div><!-- .post-media end -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="custom-heading02">
                                <p>
                                    <h2>{{ $post->judul }}</h2>
                                </p>
                            </div><!-- .custom-heading02 end -->
                        </div><!-- .col-md-12 end -->
                    </div>

                    <div class="post-body">
                        <h6>
                            {!! $post->isi !!}
                        </h6>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                {{ $post->penulis }}
                            </li>
                            <li>
                                <i class="fa fa-li fa-long-arrow-right"></i>
                                {{ date('j M Y', strtotime($post->created_at)) }}
                            </li>
                        </ul>
                    </div><!-- .post-body end -->

                    @endif

                </div><!-- .blog-post end -->                        
            </div><!-- .col-md-9.blog-posts.post-list end -->

        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->


@endsection