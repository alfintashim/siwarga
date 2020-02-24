<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Keluarga;
use App\Warga;
use App\Apk;

class PendudukController extends Controller
{
    public function keluarga()
    {
    	$post = Keluarga::orderBy('kepala_keluarga')->paginate(10);
        $jml_keluarga = Keluarga::all()->count();
        $jml_warga = Warga::all()->count();
        $jml_laki = Warga::where('jk', '=', 'Laki-Laki')->count();
        $jml_perempuan = Warga::where('jk', '=', 'Perempuan')->count();

        $apk = Apk::all();

        $compact = [
            'post', 'jml_keluarga', 'jml_warga', 'jml_laki', 'jml_perempuan', 'apk'
        ];

    	return view('penduduk.keluarga', compact($compact))
    	->with('no',1);
    }

    public function show($id)
    {
        $post = Keluarga::where('id', $id)->first();
        $warga = Warga::where('no_KK', $post->no_KK)->get();

        $apk = Apk::all();

        $compact = [
            'id',
            'warga',
            'post',
            'apk'
        ];

        return view('penduduk.anggota', compact($compact))->with('no',1);
    }

    public function search(Request $request)
    {
        $query = $request->get('s');
        $hasil = Keluarga::where('kepala_keluarga', 'LIKE', '%' . $query . '%')->orderBy('kepala_keluarga')->paginate(5);
        $jml_keluarga = Keluarga::all()->count();
        $jml_warga = Warga::all()->count();
        $jml_laki = Warga::where('jk', '=', 'Laki-Laki')->count();
        $jml_perempuan = Warga::where('jk', '=', 'Perempuan')->count();

        $apk = Apk::all();

        $compact = [
            'query', 'hasil', 'jml_keluarga', 'jml_warga', 'jml_laki', 'jml_perempuan', 'apk'
        ];

        return view('penduduk.hasil', compact($compact))->with('no',1);
    }
}
