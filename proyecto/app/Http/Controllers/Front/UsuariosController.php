<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Gets
    public function index()
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://proyecto.test/api/get-users')['users'];

        return view('usuarios', compact('response'));
    }
    public function usuariosId(Request $request)
    {
        $response=[];
        $id = $request->id;
        $apiToken = Auth::user()->api_token;
        $responseAux = Http::withToken($apiToken)->get('http://proyecto.test/api/get-users/'.$id)['users'];
        array_push($response, $responseAux);

        return view('usuarios', compact('response'));
    }
    public function usuariosNombre(Request $request)
    {
        $nombre = $request->nombre;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://proyecto.test/api/get-users/nombre/'.$nombre)['users'];

        return view('usuarios', compact('response'));
    }
    public function usuariosEmail(Request $request)
    {
        $email = $request->email;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://proyecto.test/api/get-users/email/'.$email)['users'];
        return view('usuarios', compact('response'));
    }

    //New user
    public function nuevoUsuario()
    {
        return view('nuevo-usuario');
    }
    public function nuevoUsuarioPost(Request $request)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('http://proyecto.test/api/new-user', $data);

        return redirect()->route('usuarios');
    }

    //Edit user
    public function editUsuario($id_user)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://proyecto.test/api/get-users/'.$id_user)['users'];

        return view('edit-usuario', compact('response'));
    }
    public function editUsuarioPost(Request $request, $id_user)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('http://proyecto.test/api/edit-user/'.$id_user, $data);

        return redirect()->route('usuarios');
    }

    //Delete
    public function deleteUsuario($id_user)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->delete('http://proyecto.test/api/delete-user/'.$id_user);

        return redirect()->route('usuarios');
    }
}
