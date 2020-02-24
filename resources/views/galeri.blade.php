@extends('layouts.layout')

@section('title')
<title>SIWARGA | Galeri</title>
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

        <li>
            <a href="{{ URL::to('/informasi') }}">Informasi</a>
        </li>
        
        <li>
            <a href="{{ URL::to('/penduduk') }}">Penduduk</a>
        </li>

        <li class="current-menu-item">
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
                                    Galeri
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
                    <ul class="vehicle-gallery clearfix" style="margin-left: 15px">
                    @if (count($galeris))
                    	@foreach($post as $gambar) 
                        <li class="col-md-4">

                            <figure class="gallery-item-container"> 
                            	                             
                                <div class="gallery-item">
                                    <a href="{{ asset('/uploads/galeri/'.$gambar->gambar)}}">
                                    <img src="{{ asset('/uploads/galeri/'.$gambar->gambar)}}" alt="{{ $gambar->judul }}" style="width: 330px;height: 330px;"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-mask"></div>
                                            <figcaption>
                                                <h3>{{ $gambar->judul }}</h3>
                                            </figcaption>
                                    </div><!-- .hover-mask-container end -->
                                    </a>
                                </div><!-- .gallery-item end -->
 
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .col-md-4 end --> 
                        @endforeach
                    @else
                        <div>
                            <h3>
                                Oops... Saat ini belum ada foto terbaru
                            </h3>
                        </div>
                    @endif
                    </ul><!-- #vehicle-gallery end -->
                </div><!-- .row end -->

{{--                         <li class="pagination clearfix">
                            <ul>
                                {!! $post->links() !!}
                            </ul>
                        </li><!-- .pagination end --> --}}

            </div><!-- .container end -->
        </div><!-- .page-content end -->

@endsection