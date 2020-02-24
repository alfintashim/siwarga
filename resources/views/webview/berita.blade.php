@extends('webview.layout')

@section('title')
<title>SIWARGA | Informasi</title>
@endsection

@section('content')

<div class="page-content custom-bkg bkg-grey">
    <div class="container">

        <div class="row">
            <ul class="col-md-12 blog-posts post-list">
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
                        <a href="{{ URL::to('webview/berita/'.$data->juduls) }}">
                            <h3>{{ $data->judul }}</h3>
                        </a> 

                            {!! str_limit($data->isi, 100, '...') !!}

                        <p>
                        <a href="{{ URL::to('webview/berita/'.$data->juduls) }}" class="read-more">
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
            </ul><!-- .col-md-9.blog-posts.post-list end -->

        </div><!-- .row end -->

    </div><!-- .container end -->
</div><!-- .page-content end -->


@endsection