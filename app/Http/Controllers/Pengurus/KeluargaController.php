<?php

namespace App\Http\Controllers\Pengurus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use App\Keluarga;
use App\Warga;

class KeluargaController extends Controller
{
    protected $rules = [
        'no_kk' => ['required'],
        'alamat' => ['required'],
        'nama_kk' => ['required']
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post = Keluarga::orderBy('id', 'desc')->get();

        return view('pengurus.keluarga.index', compact('post'))
        ->with('no',1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pengurus.keluarga.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this   ->  validate($request, $this->rules);

        $keluarga = new Keluarga;

            $keluarga->no_KK = $request->no_kk;
            $keluarga->alamat = $request->alamat;
            $keluarga->kepala_keluarga = $request->nama_kk;
            $keluarga->kepala_keluargas = Str::slug($request->nama_kk);

        $keluarga->save();

        return redirect('/pengurus/keluarga')->with('success','Keluarga baru berhasil ditambahkan.');
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
        $post = Keluarga::where('id','=',$id)->first();
        $warga = Warga::where('no_KK', $post->no_KK)->get();

        $compact = [
            'id',
            'warga',
            'post'
        ];

        return view('pengurus.keluarga.detail', compact($compact))
        ->with('no',1);
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
        $post = Keluarga::where('id','=',$id)->first();

        return view('pengurus.keluarga.edit', compact('post'));
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
        $this   ->  validate($request, $this->rules);

        $keluarga = Keluarga::find($id);

            $keluarga->no_KK = $request->no_kk;
            $keluarga->alamat = $request->alamat;
            $keluarga->kepala_keluarga = $request->nama_kk;

        $keluarga->update();

        return redirect('/pengurus/keluarga')->with('success','Data Keluarga berhasil di edit.');
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
        $keluarga = Keluarga::find($id);
        $keluarga->delete();

        return redirect('/pengurus/keluarga')->with('success','Keluarga berhasil di hapus.');
    }
}
