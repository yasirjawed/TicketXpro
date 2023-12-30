<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function authenticated(){
        if(Auth::user()->role_as=='1'){
            return redirect('customer/dashboard')->with('status','Welcome to the Customer dashboard');
        }else if(Auth::user()->role_as=='2'){
            return redirect('admin/dashboard')->with('status','Welcome to the Admin dashboard!');

        }else{
            return redirect('/');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    // public function login(){
    //     if(Auth::check()){
    //         if(Auth::user()->role_as=='1'){
    //             return redirect('/customer/dashboard');
    //         }else{
    //             return redirect('/admin/dashboard');
    //         }
    //     }else{
    //         return view('auth.login');
    //     }
    // }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
