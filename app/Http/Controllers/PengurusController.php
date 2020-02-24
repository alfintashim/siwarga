<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Keluarga;
use App\Warga;

use App\Apk;

class PengurusController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $jml_keluarga = Keluarga::all()->count();
        $jml_warga = Warga::all()->count();
        $jml_laki = Warga::where('jk', '=', 'Laki-Laki')->count();
        $jml_perempuan = Warga::where('jk', '=', 'Perempuan')->count();

        $apk = Apk::all();

        $compact = [
            'jml_keluarga', 'jml_warga', 'jml_laki', 'jml_perempuan', 'apk'
        ];

    	return view('pengurus.index', compact($compact));
    }
}
