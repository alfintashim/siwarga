@extends('webview.layout')

@section('title')
<title>SIWARGA | Galeri</title>
@endsection

@section('content')

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <ul class="vehicle-gallery clearfix" style="margin-left: 15px">
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
                        </li><!-- .gallery-item end --> 
                        @endforeach                      
                    </ul><!-- #vehicle-gallery end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

@endsection