<?php

namespace App\Http\Controllers\Pengurus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use App\Berita;

class BeritaController extends Controller
{
    protected $rules = [
        'judul'            =>  ['required'],
        'isi'              =>  ['required'],
        'penulis'          =>  ['required'],
        'nama_file'        =>  ['max:100000', 'mimes:jpeg,bmp,png']
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post = Berita::orderBy('id', 'desc')->get();

        return view('pengurus.berita.index', compact('post'))
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
        return view('pengurus.berita.tambah');
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
        $this   ->  validate($request, $this->rules);

        $berita = new Berita;

        $berita->judul = $request->judul;
        $berita->juduls = Str::slug($request->judul);
        $berita->isi = $request->isi;
        $berita->penulis = $request->penulis;

        if($request->file('nama_file') == "")
        {
            $berita->gambar = '';
        }
        else
        {
            $file = $request->file('nama_file');
            $destinationPath = base_path() . '/public/uploads/berita';
            $namaFile = $request->nama_file->getClientOriginalName();
            $file->move($destinationPath, $namaFile);

            $berita->gambar = $namaFile;
        }

        $berita->save();

        return redirect('/pengurus/berita')->with('success','Informasi baru berhasil ditambahkan.');
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
        $post = Berita::where('id','=',$id)->first();

        return view('pengurus.berita.detail', compact('post'));
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
        $post = Berita::where('id','=',$id)->first();

        return view('pengurus.berita.edit', compact('post'));
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
        
        $berita = Berita::find($id);

        $berita->judul = $request->judul;
        $berita->juduls = Str::slug($request->judul);
        $berita->isi = $request->isi;
        $berita->penulis = $request->penulis;

        if($request->file('nama_file') == "")
        {
            $berita->gambar = $berita->gambar;
        }
        else
        {
            $file = $request->file('nama_file');
            $destinationPath = base_path() . '/public/uploads/berita';
            $namaFile = $request->nama_file->getClientOriginalName();
            $file->move($destinationPath, $namaFile);

            $berita->gambar = $namaFile;
        }

        $berita->update();

        return redirect('/pengurus/berita')->with('success','Data informasi berhasil di edit.');
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
        $berita = Berita::where('id','=',$id)->first();
        $berita->delete();

        return redirect('pengurus/berita')->with('success','Informasi berhasil di hapus.');
    }
}
