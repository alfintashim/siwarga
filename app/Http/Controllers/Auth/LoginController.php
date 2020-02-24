<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Lang;

use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/pengurus';
    // protected $username = 'username';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function validateLogin(Request $request)
    {
         $messages = [
            'username.required'    => 'Username dibutuhkan.',            
            'password.required'    => 'Password dibutuhkan.',       
        ];

        $this->validate($request, [
            $this->username() => 'required', 'password' => 'required',
        ],$messages);
    }
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => ['Username atau Password anda tidak cocok'],
        ]);
    }

    protected function getFailedLoginMessage()
    {
        /*return Lang::has('auth.failed')
                ? Lang::get('auth.failed')
                : 'These credentials do not match our records.';*/
        return Lang::has('auth.failed')
                ? Lang::get('auth.failed')
                : 'Kombinasi Username dan Password tidak tepat.'; 
    }

    public function username()
    {
        return 'username';
    }
}
