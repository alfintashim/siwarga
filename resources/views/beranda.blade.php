@extends('layouts.layout')

@section('title')
<title>SIWARGA</title>
@endsection

@section('navbar')
<!-- MAIN NAVIGATION -->
<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="current-menu-item">
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

        <li>
            <a href="{{ URL::to('/galeri') }}">Galeri</a>
        </li>

        <li>
            @foreach($apk as $data)
            <a href="{!! $data->link !!}">Download APK</a>
            @endforeach
        </li>
    </ul><!-- .nav.navbar-nav end -->

{{--                                         <!-- #search start -->
    <div id="search">
        <form action="#" method="get">
            <input class="search-submit" type="submit" />
            <input id="m_search" name="s" type="text" placeholder="Type and hit enter..." />                        
        </form>
    </div><!-- #search end --> --}}
</div><!-- MAIN NAVIGATION END -->
@endsection

@section('slide')
        <div id="masterslider" class="master-slider ms-skin-default">

            <!-- slide  start -->
            <div class="ms-slide">
                <!-- slide background -->
                <img src="{{ asset('frontend/masterslider/blank.gif')}}" data-src="{{ asset('images/slide01.jpg')}}" alt="Sekretariat RT. 004 / RW. 011"/>  
            </div><!-- .ms-slide end -->

            <!-- slide  start -->
            <div class="ms-slide">
                <!-- slide background -->
                <img src="{{ asset('frontend/masterslider/blank.gif')}}" data-src="{{ asset('images/slide02.jpg')}}" alt="Jalan Perintis"/> 
            </div><!-- .ms-slide end -->

            <!-- slide start -->
            <div class="ms-slide">
                <!-- slide background -->
                <img src="{{ asset('frontend/masterslider/blank.gif')}}" data-src="{{ asset('images/slide03.jpg')}}" alt="Jalan Perintis"/> 
            </div><!-- .ms-slide end -->

            <!-- slide start -->
            <div class="ms-slide">
                <!-- slide background -->
                <img src="{{ asset('frontend/masterslider/blank.gif')}}" data-src="{{ asset('images/slide04.jpg')}}" alt="Peta RW 011"/> 
            </div><!-- .ms-slide end -->

        </div><!-- #masterslider end -->
@endsection

@section('content')

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-heading02">
                            <h2>Informasi Terbaru</h2>
                            <p></p>
                        </div><!-- .custom-heading02 end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->

{{--                 <div class="row">
                    <div class="col-md-12">
                        <ul class="pi-latest-posts02 clearfix">
                            @foreach($post as $posts)
                            <li>
                                <div class="post-date">
                                    <img src="{{ asset('uploads/informasi/'.$posts->gambar) }}">
                                </div><!-- .post-date end -->

                                <div class="post-details">

                                    <a href="{{ URL::to('/informasi/'.$posts->juduls) }}">
                                        <h4>{{ $posts->judul }}</h4>
                                    </a>

                                    
                                        {!! str_limit($posts->isi, 10, '...') !!}
                                    
                                    <p>
                                    <a class="read-more" href="{{ URL::to('/informasi/'.$posts->juduls) }}">
                                        <span>
                                            selengkapnya
                                            <i class="fa fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                    </p>
                                </div><!-- .post-details end -->
                            </li>
                            @endforeach
                        </ul><!-- .pi-latest-posts02 end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end --> --}}

            @if (count($berita))
                <div class="row">
                    @foreach($post as $posts)
                    <div class="col-md-4 col-sm-4">
                        
                        <div class="service-feature-box">
                            <div class="service-media">
                                @if($posts->gambar == '') 
                                <img src="{{ asset('uploads/berita/no-image.jpg') }}"/>
                                @else
                                <img src="{{ asset('uploads/berita/'.$posts->gambar) }}" style="width: 600px">
                                @endif

                                <a href="{{ URL::to('/informasi/'.$posts->juduls) }}" class="read-more02">
                                    <span>
                                        Selengkapnya
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div><!-- .service-media end -->

                            <div class="service-body">
                                <div class="custom-heading">
                                    <h4>{{ $posts->judul }}</h4>
                                </div><!-- .custom-heading end -->

                                <p>
                                    {!! str_limit($posts->isi, 40, '...') !!}
                                </p>
                            </div><!-- .service-body end -->
                        </div><!-- .service-feature-box-end -->
                        
                    </div><!-- .col-md-4 end -->
                    @endforeach

                </div><!-- .row end -->
            @else
                <div>
                    <h3>
                        Oops... Saat ini belum ada informasi terbaru
                    </h3>
                </div>
            @endif

            </div><!-- .container end -->
        </div><!-- .page-content end -->

@endsection

@section('galeri')

<div class="page-content custom-bkg bkg-grey">
    <div class="container">
        <div class="row">
            @if (count($galeris))
            <div class="col-md-12">
                <div class="carousel-container">
                    <div id="client-carousel" class="owl-carousel owl-carousel-navigation">
                        @foreach($galeri as $gambar)
                        <div class="owl-item" style="width: 165px; height: 165px; margin-right: 30px;"><img src="{{ asset('/uploads/galeri/'.$gambar->gambar)}}" /></div>
                        @endforeach
                    </div><!-- .owl-carousel.owl-carousel-navigation end -->
                </div><!-- .carousel-container end -->
            </div><!-- .col-md-12 end -->
            @else
                <div>
                    <h3>
                        Oops... Saat ini belum ada foto terbaru
                    </h3>
                </div>
            @endif
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

@endsection