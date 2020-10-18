<?php

namespace App\Http\Controllers\Front;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $userNombre = Auth::user()->nombre;
        $userApellidos = Auth::user()->apellidos;
        $userEmail = Auth::user()->email;

        $userInfo = [
            $userId,
            $userNombre,
            $userApellidos,
            $userEmail
        ];

        /* $secureUserApiToken = Crypt::encryptString(Auth::user()->api_token); //Crypt::decryptString(session('api_token') to decrypt the api token)
        $testingInsecureUserApiToken = Auth::user()->api_token;
        session(['api_token'=>$secureUserApiToken]);
        session(['nombre'=>$userNombre]);
        session(['apellidos'=>$userApellidos]);
        session(['email'=>$userEmail]); */

        return view('home', compact('userInfo'));
    }
}
