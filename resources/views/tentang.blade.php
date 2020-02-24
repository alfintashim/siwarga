@extends('layouts.layout')

@section('title')
<title>SIWARGA | Tentang RT. 004</title>
@endsection

@section('navbar')
<!-- MAIN NAVIGATION -->
<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li>
            <a href="{{ URL::to('/') }}">Beranda</a>
        </li>

        <li class="current-menu-item">
            <a href="{{ URL::to('/tentang') }}">Tentang</a>
        </li>

        <li>
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
                                    Tentang
                                </li>
                            </ul><!-- .breadcrumb end -->
                        </div><!-- .breadcrumb-container end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-title-style01.page-title-negative-top end -->
@endsection

@section('content')

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-heading02">
                            <h2>TENTANG</h2>
                            <p>
                                RT. 004 / RW. 011 Akcaya
                            </p>
                        </div><!-- .custom-heading02 end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-title">
                        	@foreach($post as $posts)
                            <h6>
                                {!! $posts->isi !!}
                            </h6>
                            @endforeach
                        </div><!-- .intro-title end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

@endsection