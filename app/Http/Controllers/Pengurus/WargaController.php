<?php

namespace App\Http\Controllers\Pengurus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Str;

use App\Warga;
use App\Keluarga;

class WargaController extends Controller
{
    protected $rules = [
        'no_KK'         => ['required'],
        'nik'           => ['required'],
        'nama'          => ['required'],
        'jk'            => ['required'],
        'tgl_lahir'     => ['required'],
        'shdk'          => ['required'],
        'status'        => ['required'],
        'agama'         => ['required'],
        'goldar'        => ['required'],
        'pendidikan'    => ['required'],
        'pekerjaan'     => ['required'],
        'akta_lahir'    => ['required'],
        'no_akta_lahir' => ['required'],
        'no_akta_kawin' => ['required'],
        'no_akta_cerai' => ['required'],
        'cacat'         => ['required'],
        'tgl_rekam'     => ['required'],
        'nama_ayah'     => ['required'],
        'nama_ibu'      => ['required'],
        'nama_file'     => ['max:100000', 'mimes:jpeg,bmp,png']
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post = Warga::orderBy('id', 'desc')->get();

        return view('pengurus.warga.index', compact('post'))
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
        $keluarga = Keluarga::orderBy('id')->get();

        return view('pengurus.warga.tambah', compact('keluarga'));
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

        $warga = new Warga;

        $warga->no_KK = $request->no_KK;
        $warga->NIK = $request->nik;
        $warga->nama = $request->nama;
        // $warga->namas = Str::slug($request->nama);
        $warga->jk = $request->jk;
        $warga->tgl_lahir = $request->tgl_lahir;
        $warga->SHDK = $request->shdk;
        $warga->status = $request->status;
        $warga->agama = $request->agama;
        $warga->goldar = $request->goldar;
        $warga->pddk_akhir = $request->pendidikan;
        $warga->pekerjaan = $request->pekerjaan;
        $warga->akta_lhr = $request->akta_lahir;
        $warga->no_akta_lhr = $request->no_akta_lahir;
        $warga->no_akta_kwn = $request->no_akta_kawin;
        $warga->no_akta_cerai = $request->no_akta_cerai;
        $warga->cacat = $request->cacat;
        $warga->tgl_rekam = $request->tgl_rekam;
        $warga->nama_ayah = $request->nama_ayah;
        $warga->nama_ibu = $request->nama_ibu;

        if($request->file('nama_file') == "")
        {
            $warga->foto = 'warga.jpg';
        }
        else
        {
            $file = $request->file('nama_file');
            $destinationPath = base_path() . '/public/uploads/warga';
            $namaFile = $request->nama_file->getClientOriginalName();
            $file->move($destinationPath, $namaFile);

            $warga->foto = $namaFile;
        }

        $warga->save();

        return redirect('/pengurus/warga')->with('success','Warga baru berhasil ditambahkan.');
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
        $post = Warga::where('id','=',$id)->first();

        return view('pengurus.warga.detail', compact('post'));
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
        $post = Warga::where('id','=',$id)->first();

        return view('pengurus.warga.edit', compact('post'));
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

        $warga = Warga::find($id);

        $warga->no_KK = $request->no_KK;
        $warga->NIK = $request->nik;
        $warga->nama = $request->nama;
        // $warga->namas = Str::slug($request->nama);
        $warga->jk = $request->jk;
        $warga->tgl_lahir = $request->tgl_lahir;
        $warga->SHDK = $request->shdk;
        $warga->status = $request->status;
        $warga->agama = $request->agama;
        $warga->goldar = $request->goldar;
        $warga->pddk_akhir = $request->pendidikan;
        $warga->pekerjaan = $request->pekerjaan;
        $warga->akta_lhr = $request->akta_lahir;
        $warga->no_akta_lhr = $request->no_akta_lahir;
        $warga->no_akta_kwn = $request->no_akta_kawin;
        $warga->no_akta_cerai = $request->no_akta_cerai;
        $warga->cacat = $request->cacat;
        $warga->tgl_rekam = $request->tgl_rekam;
        $warga->nama_ayah = $request->nama_ayah;
        $warga->nama_ibu = $request->nama_ibu;

        if($request->file('nama_file') == "")
        {
            $warga->foto = $warga->foto;
        }
        else
        {
            $file = $request->file('nama_file');
            $destinationPath = base_path() . '/public/uploads/warga';
            $namaFile = $request->nama_file->getClientOriginalName();
            $file->move($destinationPath, $namaFile);

            $warga->foto = $namaFile;
        }

        $warga->update();

        return redirect('/pengurus/warga')->with('success','Data warga berhasil di edit.');
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
        $warga = Warga::where('id','=',$id);
        $warga->delete();

        return redirect('pengurus/warga')->with('success','Warga berhasil di hapus.');
    }
}
