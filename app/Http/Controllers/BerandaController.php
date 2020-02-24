<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Galeri;
use App\Apk;

class BerandaController extends Controller
{
    public function index()
    {
    	$post = Berita::orderBy('id', 'desc')->take(3)->get();
    	$berita = Berita::all();

        $galeri = Galeri::orderBy('id', 'desc')->get();
        $galeris = Galeri::all();

        $apk = Apk::all();

        $compact = [
            'post', 'galeri', 'berita', 'galeris', 'apk'
        ];

    	return view('beranda', compact($compact));
    }
}
 