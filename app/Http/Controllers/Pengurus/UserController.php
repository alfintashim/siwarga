<?php

namespace App\Http\Controllers\Pengurus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

use App\User;

use Validator;
use Auth;
use DB;

class UserController extends Controller
{
    protected $rules = [
        'username' => ['required']
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post = User::all();

        return view('pengurus.pengguna.pengurus.index', compact('post'));
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
        $post = User::where('id','=',$id)->first();

        return view('pengurus.pengguna.pengurus.edit', compact('post'));
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
        
        $user = User::find($id);

        $user->username = $request->username;

        $user->update();

        return redirect('/pengurus/user')->with('success','Username berhasil di ganti.');
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

    protected function formResetPassword()
    {
        return view('pengurus.pengguna.pengurus.resetpassword');
    }

    protected function resetPassword(Request $request)
    {
        $validator = $this->validator($request->all());
        // echo "123";
        // dd($validator->fails());
        // exit();
        if ($validator->fails()) {
          //dd($validator);
          return Redirect::back()->withErrors($validator)->withInput();
        }else{

          $cekIdUsername = $this->cekIdUsername(Auth::user()->username);

          if($cekIdUsername->count() > 0){
            //dd($cekPassLama->id);
            //Update data yang dimasukkan
            if(DB::table('users')
              ->where('username',Auth::user()->username)
              ->where('id', $cekIdUsername->id)
              ->update(['password' => bcrypt($request->password)]))
            {
              $messages = "Sukses! Perubahan password berhasil dilakukan.";
              session()->flash('success',isset($messages) ? $messages : '');
            }else{
              $messages = "Gagal! Perubahan password tidak berhasil dilakukan.";
              session()->flash('error',isset($messages) ? $messages : '');
            }
          }else{
            $message = array("Validasi username tidak sesuai dengan yang ada dalam database!");
            return Redirect::back()->withErrors($message)->withInput(); 
          }
        }
        return redirect('/pengurus/user');
    }

    protected function validator(array $data)
    {
          $messages = [
              'passwordlama.required' => 'Password Lama dibutuhkan.',          
              'password.required'     => 'Password dibutuhkan.',
              'password.confirmed'    => 'Password dan Konfirmasi password tidak sama.',
              'password.min'          => 'Panjang password minimal 6 karakter',
              'passwordlama.cek_passwordlama' => 'Password lama yang dimasukkan tidak sesuai dalam database'
              
          ];
          return Validator::make($data, [
              'passwordlama'  => 'required|cek_passwordlama:' . \Auth::user()->password,
              'password'      => 'required|confirmed|min:6',          
          ], $messages);
    }

    protected function cekIdUsername($dsnUsername){
        //Jika password lama akan dicek dengan yang didalam
        //
        //$passLama = bcrypt($passwordlama);

        $cekPass = User::Select(DB::raw('id'))
          ->where('username','=',$dsnUsername)
          //->where('password','=',$passLama)
          ->first();
        //echo $passLama.$mhsNim;
        //dd($cekPass);

        return $cekPass;
    }
}
