<?php

namespace App\Http\Controllers\Auth;
use Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|min:3'
           ]);

        $credentials = [ 'email' => $request->email , 'password' => $request->password ];
           if(Auth::attempt($credentials))
           {
            return redirect()->route('home_page');
           }
           else
           {
            return redirect()->back()->withInput()->withErrors(['password' => 'password does not exist',
                                                                'email' => 'email does not exist']);
           }
        //    return redirect()->route('page');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/backend');
    }
}
