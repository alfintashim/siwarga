<?php

namespace App\Http\Controllers\Pengurus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Galeri;

class GaleriController extends Controller
{
    protected $rules = [
        'judul'            =>  ['required'],
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
        $post = Galeri::orderBy('id', 'desc')->get();

        return view('pengurus.galeri.index', compact('post'))
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
        return view('pengurus.galeri.tambah');
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

        $galeri = new Galeri;

        $galeri->judul = $request->judul;

            $file = $request->file('nama_file');
            $destinationPath = base_path() . '/public/uploads/galeri';
            $namaFile = $request->nama_file->getClientOriginalName();
            $file->move($destinationPath, $namaFile);

            $galeri->gambar = $namaFile;

        $galeri->save();

        return redirect('/pengurus/galeri')->with('success','Gambar baru berhasil ditambahkan.');
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
        $post = Galeri::where('id','=',$id)->first();

        return view('pengurus.galeri.detail', compact('post'));
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
        $post = Galeri::where('id','=',$id)->first();

        return view('pengurus.galeri.edit', compact('post'));
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
        
        $galeri = Galeri::find($id);

        $galeri->judul = $request->judul;

        if($request->file('nama_file') == "")
        {
            $galeri->gambar = $galeri->gambar;
        }
        else
        {
            $file = $request->file('nama_file');
            $destinationPath = base_path() . '/public/uploads/galeri';
            $namaFile = $request->nama_file->getClientOriginalName();
            $file->move($destinationPath, $namaFile);

            $galeri->gambar = $namaFile;
        }

        $galeri->update();

        return redirect('/pengurus/galeri')->with('success','Data gambar berhasil di edit.');
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
        $galeri = Galeri::where('id','=',$id);
        $galeri->delete();

        return redirect('pengurus/galeri')->with('success','Gambar berhasil di hapus.');
    }
}
