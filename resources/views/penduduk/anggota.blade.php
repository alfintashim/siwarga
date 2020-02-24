@extends('layouts.layout')

@section('title')
<title>SIWARGA | Keluarga {{ $post->kepala_keluarga }}</title>
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
                                    <a href="{{ URL::to('/penduduk') }}">Penduduk</a>
                                </li>

                                <li>
                                	{{ $post->kepala_keluarga }}
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
                    <h2>Daftar Anggota Keluarga {{ $post->kepala_keluarga }}</h2>
                    <p>
                        {{ $post->alamat }}
                    </p>
                </div><!-- .custom-heading02 end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->

{{-- 		<div class="row">
            <div class="blog-posts post-single">
                <div class="blog-post clearfix">
			        <div class="table-responsive">
			            <table class="events-table" width="1000" align="center">
			                <thead>
			                    <tr>
			                        <th>Kepala Keluarga</th>
			                        <td>
		                                {{ $post->kepala_keluarga }}
			                        </td>
			                    </tr>
			                    <tr>
			                        <th>Alamat</th>
			                        <td>
			                        	{{ $post->alamat }}
			                        </td>
			                    </tr>
			                </thead>
			            </table><!-- .events-table end -->
			        </div><!-- .table-responsive end -->
				</div>
			</div>
        </div><!-- .row end -->	 --}}		        

		<div class="row">
            <div class="blog-posts post-single">
                <div class="blog-post clearfix">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th></th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>SHDK</th>
                                    <th>Golongan Darah</th>
                                </tr>
                            </thead>

                            <tbody>
                            	@foreach($warga as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        <div class="icon-container">
                                            <center>
                                            <img src="{{ URL::asset('uploads/warga/'.$data->foto) }}" width="40px"/>
                                            </center>
                                        </div>                                        
                                    </td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->jk }}</td>
                                    <td>{{ $data->SHDK }}</td>
                                    <td>{{ $data->goldar }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table><!-- .table end -->
                    </div><!-- .table-responsive end -->			        
				</div>
			</div>
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

@endsection