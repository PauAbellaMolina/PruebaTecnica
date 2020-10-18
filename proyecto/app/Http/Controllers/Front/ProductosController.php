<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class ProductosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Gets
    public function index()
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://proyecto.test/api/get-prods')['products'];

        return view('products', compact('response'));
    }

    public function productosId(Request $request)
    {
        $response=[];
        $id = $request->id;
        $apiToken = Auth::user()->api_token;
        $responseAux = Http::withToken($apiToken)->get('http://proyecto.test/api/get-prods/'.$id)['products'];
        array_push($response, $responseAux);

        return view('products', compact('response'));
    }

    public function productosCodigo(Request $request)
    {
        $codigo = $request->codigo;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://proyecto.test/api/get-prods/codigo/'.$codigo)['products'];

        return view('products', compact('response'));
    }

    public function productosNombre(Request $request)
    {
        $nombre = $request->nombre;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://proyecto.test/api/get-prods/nombre/'.$nombre)['products'];

        return view('products', compact('response'));
    }

    //New producto
    public function nuevoProducto()
    {
        return view('nuevo-producto');
    }
    public function nuevoProductoPost(Request $request)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('http://proyecto.test/api/new-prod', $data);

        return redirect()->route('productos');
    }

    //Edit user
    public function editProducto($id_prod)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://proyecto.test/api/get-prods/'.$id_prod)['products'];

        return view('edit-producto', compact('response'));
    }
    public function editProductoPost(Request $request, $id_prod)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('http://proyecto.test/api/edit-prod/'.$id_prod, $data);

        return redirect()->route('productos');
    }

    //Delete
    public function deleteProduct($id_prod)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->delete('http://proyecto.test/api/delete-prod/'.$id_prod);
        $responseRelation = Http::withToken($apiToken)->delete('http://proyecto.test/api/delete-categ-prod-prod/'.$id_prod);
        $responseTarifa = Http::withToken($apiToken)->delete('http://proyecto.test/api/delete-tarifa/prod/'.$id_prod);

        return redirect()->route('productos');
    }
}
