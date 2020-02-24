<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tentang;
use App\Apk;

class TentangController extends Controller
{
    public function index()
    {
    	$post = Tentang::all();

    	$apk = Apk::all();

    	return view('tentang', compact('post','apk'));
    }
}
