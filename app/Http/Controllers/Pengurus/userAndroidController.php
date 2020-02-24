<?php

namespace App\Http\Controllers\Pengurus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Keluarga;
use App\UserAndroid;

use DB;

class userAndroidController extends Controller
{
    protected $rules = [
        'no_KK' => ['required'],
        'pass'  => ['required']
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $post = UserAndroid::all();

        $post = DB::table('user_androids')
                ->join('keluargas', 'user_androids.no_KK', '=', 'keluargas.no_KK')
                ->select('user_androids.*', 'keluargas.kepala_keluarga', 'user_androids.no_KK', 'user_androids.password', 'user_androids.created_at')
                ->orderBy('id')
                ->get();

        return view('pengurus.pengguna.android.index', compact('post'))
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

        return view('pengurus.pengguna.android.tambah', compact('keluarga'));
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

        $userAndroid = new userAndroid;

        $userAndroid->no_KK = $request->no_KK;
        $userAndroid->password = md5($request->pass);

        $userAndroid->save();

        return redirect('/pengurus/android');
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
        $post = UserAndroid::where('id','=',$id)->first();
        // $keluarga = Keluarga::where('no_KK', $post->no_KK)->get();

        return view('pengurus.pengguna.android.edit', compact('post', 'keluarga'));
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

        $userAndroid = UserAndroid::find($id);

        $userAndroid->no_KK = $request->no_KK;
        $userAndroid->password = md5($request->pass);

        $userAndroid->update();

        return redirect('/pengurus/android');
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
        $userAndroid = UserAndroid::where('id','=',$id);
        $userAndroid->delete();

        return redirect('pengurus/android');
    }
}
