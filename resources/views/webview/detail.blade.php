@extends('webview.layout')

@section('title')
<title>SIWARGA | {{ $post->judul }}</title>
@endsection

@section('pagetitle')
<!-- .page-title start -->
<div class="page-title-style01 pt-bkg01">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $post->judul }}</h1>
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