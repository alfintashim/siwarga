<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Berita;
use App\Apk;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //    
    	$post = Berita::orderBy('id', 'desc')->paginate(5);
        $side = Berita::orderBy('id', 'desc')->take(3)->get();
        $berita = Berita::all();

        $apk = Apk::all();

        $compact = [
            'post', 'side', 'berita', 'apk'
        ];
    	return view('berita.index', compact($compact));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Berita::where('juduls', $id)->first();

        $apk = Apk::all();

        return view('berita.detail', compact('post','apk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $query = $request->get('s');
        $hasil = Berita::where('judul', 'LIKE', '%' . $query . '%')->orderBy('id','desc')->paginate(5);
        $side = Berita::orderBy('id', 'desc')->take(3)->get();
        $berita = Berita::all();

        $apk = Apk::all();

        $compact = [
            'query', 'hasil', 'side', 'berita', 'apk'
        ];

        return view('berita.hasil', compact($compact));
    }
}