@extends('layouts.layout')

@section('title')
<title>SIWARGA | Informasi</title>
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
                                    Informasi
                                </li>
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
            <div class="col-md-12">
                <div class="custom-heading02">
                    <h2>Informasi</h2>
                    <p>
                        RT. 004 / RW. 011 Akcaya
                    </p>
                </div><!-- .custom-heading02 end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->

        <div class="row">
            <ul class="col-md-9 blog-posts post-list">
            @if (count($berita))
            	@foreach($post as $data)
                <li class="blog-post clearfix">

                    <div class="post-date">
                        @if($data->gambar == '') 
                        <img src="{{ asset('uploads/berita/no-image.jpg') }}"/>
                        @else
                        <img src="{{ asset('uploads/berita/'.$data->gambar) }}"/>   
                        @endif
                        <p class="month"> {{ $data->created_at->diffForHumans() }} </p>
                    </div><!-- .post-date end -->

                    <div class="post-body">
                        <a href="{{ URL::to('/informasi/'.$data->juduls) }}">
                            <h3>{{ $data->judul }}</h3>
                        </a> 

                            {!! str_limit($data->isi, 100, '...') !!}

                        <p>
                        <a href="{{ URL::to('/informasi/'.$data->juduls) }}" class="read-more">
                            <span>
                                Selengkapnya
                                <i class="fa fa-chevron-right"></i>
                            </span>                              
                        </a>
                        </p>
                    </div><!-- .post-body end -->
                </li><!-- .blog-post end -->
                @endforeach

                <li class="pagination clearfix">
                    <ul>
                        {!! $post->links() !!}
                    </ul>
                </li><!-- .pagination end -->
            @else
                <div>
                    <h3>
                        Oops... Saat ini belum ada informasi terbaru
                    </h3>
                </div>
            @endif
            </ul><!-- .col-md-9.blog-posts.post-list end -->


            <!-- aside.aside-left start -->
            <aside class="col-md-3 aside aside-left">
                <!-- .aside-widgets start -->
                <ul class="aside-widgets">
                    <!-- .widget.widget-search start -->
                    <li id="search-2" class="widget widget_search clearfix">
                        <div class="title">
                            <h3>pencarian</h3>
                        </div>

                        <form action="{{ URL::to('informasi/search') }}" method="get">
                            <input class="a_search" name="s" type="text" placeholder="Type and hit enter..." />
                            <input class="search-submit" type="submit" />
                        </form>
                    </li><!-- .widget.widget_search end -->

                    <!-- .widget.rpw_posts_widget start -->
                    <li class="widget rpw_posts_widget">
                        <div class="title">
                            <h3>info terkahir</h3>
                        </div>

                        @foreach($side as $posts)
                        <ul>
                            <li>
                                <a href="{{ URL::to('/informasi/'.$posts->id) }}">
                                    <h4>
                                        {{ $posts->judul }}
                                    </h4>
                                </a>
                            </li>
                        </ul>
                        @endforeach
                    </li><!-- .rpw_posts_widget end -->

                </ul><!-- .aside-widgets end -->
            </aside><!-- .aside.aside-left end -->
        </div><!-- .row end -->

    </div><!-- .container end -->
</div><!-- .page-content end -->


@endsection