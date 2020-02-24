@extends('layouts.layout')

@section('title')
<title>SIWARGA | Daftar Kepala Keluarga</title>
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
        
        <li class="current-menu-item">
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
                                    Penduduk
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
                    <h2>Daftar Kepala Keluarga</h2>
                    <p>
                        RT. 004 / RW. 011 Akcaya
                    </p>
                </div><!-- .custom-heading02 end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->

		<div class="row">
            <div class="blog-posts post-single">
                <div class="blog-post clearfix">
			        <div class="table-responsive">

                        <div class="col-md-6 col-sm-6">
                            <div class="col-md-7">
                                <li id="search-2" class="widget widget_search clearfix">
                                    <div class="title">
                                        <h3>Pencarian</h3>
                                    </div>

                                    <form action="{{ URL::to('penduduk/search') }}" method="get">
                                        <input class="a_search" name="s" type="text" placeholder="Tulis keluarga yang ingin di cari..." />
                                        <input class="search-submit" type="submit" />
                                    </form>
                                </li><!-- .widget.widget_search end -->
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="numbers-counter">
                                        <div class="counter-container">
                                            <span class="timer number" data-to="{{ $jml_keluarga }}158" data-speed="1500">{{ $jml_keluarga }}</span>

                                            <p>
                                                Kepala Keluarga
                                            </p>
                                        </div><!-- .counter-container end -->
                                    </div><!-- .numbers-counter end -->
                                </div><!-- .col-md-4 end -->
                                <div class="col-md-3">
                                    <div class="numbers-counter">
                                        <div class="counter-container">
                                            <span class="timer number" data-to="{{ $jml_warga }}" data-speed="1500">{{ $jml_warga }}</span>

                                            <p>
                                                Warga
                                            </p>
                                        </div><!-- .counter-container end -->
                                    </div><!-- .numbers-counter end -->
                                </div><!-- .col-md-4 end -->
                                <div class="col-md-3">
                                    <div class="numbers-counter">
                                        <div class="counter-container">
                                            <span class="timer number" data-to="{{ $jml_laki }}" data-speed="1500">{{ $jml_laki }}</span>

                                            <p>
                                                Laki-Laki
                                            </p>
                                        </div><!-- .counter-container end -->
                                    </div><!-- .numbers-counter end -->
                                </div><!-- .col-md-4 end -->
                                <div class="col-md-3">
                                    <div class="numbers-counter">
                                        <div class="counter-container">
                                            <span class="timer number" data-to="{{ $jml_perempuan }}" data-speed="1500">{{ $jml_perempuan }}</span>

                                            <p>
                                                Perempuan
                                            </p>
                                        </div><!-- .counter-container end -->
                                    </div><!-- .numbers-counter end -->
                                </div><!-- .col-md-4 end -->
                            </div><!-- .row end -->
                        </div><!-- .col-md-6 end -->

			            <table class="events-table" width="1000" align="center">
			                <thead>
			                    <tr>
			                        <th>No.</th>
			                        <th>Kepala Keluarga</th>
			                        <th>Alamat</th>
			                        <th></th>
			                    </tr>
			                </thead>

			                <tbody>
			                	@foreach($post as $data)
			                    <tr>
			                        <td>
			                        	{{ $no++ }}
			                        </td>

			                        <td>
					                    <a class="btn btn-small" href="{{ URL::to('/penduduk/'.$data->id ) }}">
		                                    <span>
		                                        {{ $data->kepala_keluarga }}
		                                    </span>
		                                </a>
			                            
			                        </td>

			                        <td>
			                        	{{ $data->alamat }}
			                        </td>

			                        <td>
                                        <a href="{{ URL::to('/penduduk/'.$data->id) }}" class="read-more02">
			                        	<button>
                                            <span>
                                                Detail
                                                <i class="fa fa-chevron-right"></i>
                                            </span>
                                        </button>
                                        </a>
			                        </td>
			                    </tr>
			                    @endforeach
			                </tbody>
			            </table><!-- .events-table end -->
			        </div><!-- .table-responsive end -->
                    <li class="pagination clearfix">
                        <ul>
                            {!! $post->links() !!}
                        </ul>
                    </li><!-- .pagination end -->
				</div>
			</div>
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

@endsection