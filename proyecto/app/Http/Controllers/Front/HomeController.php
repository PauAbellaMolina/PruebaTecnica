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
        $userFoto = Auth::user()->url_foto;

        $userInfo = [
            $userId,
            $userNombre,
            $userApellidos,
            $userEmail,
            $userFoto
        ];

        return view('home', compact('userInfo'));
    }
}
