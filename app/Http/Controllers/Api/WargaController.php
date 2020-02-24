<?php

namespace App\Http\Controllers\Api;

use App\Warga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $warga = Warga::all();

        return response()->json($warga, 200);
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
        $warga = new Warga;

        $warga->no_KK = $request->no_KK;
        $warga->NIK = $request->nik;
        $warga->nama = $request->nama;
        $warga->namas = Str::slug($request->nama);
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

        $success = $warga->save();

        if (!$success) {
            return response()->json('Eror saving' . 500);
        } else {
            return response()->json('success', 200);
        }
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
        $warga = Warga::find($id);

        return is_null($warga) ? response()->json('Not found', 404) : response()->json($warga);
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
        $warga = Warga::find($id);

        if(is_null($warga)) {
            return response()->json('not found', 404);
        }

        $success = $warga->save();

        if(!$success) {
            return response()->json('error deleting', 500);
        }
        else
            return response()->json('success', 200);
    }
}
