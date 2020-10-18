<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class CategoriasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Gets
    public function index()
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://proyecto.test/api/get-categs')['categorias'];

        return view('categorias', compact('response'));
    }

    public function categoriasByProdId($id_prod)
    {
        $apiToken = Auth::user()->api_token;
        $responseRelation = Http::withToken($apiToken)->get('http://proyecto.test/api/get-categs-prods/prods/'.$id_prod)['relations by id_prod'];
        $response = [];

        foreach($responseRelation as $rr) {
            $responseCategs = Http::withToken($apiToken)->get('http://proyecto.test/api/get-categs/'.$rr['id_categ'])['categorias'];
            $responseCategs['id_prod'] = $rr['id_prod'];
            array_push($response, $responseCategs);
        }

        return view('categorias', compact('response'));
    }

    public function categoriasId(Request $request)
    {
        $response=[];
        $id = $request->id;
        $apiToken = Auth::user()->api_token;
        $responseAux = Http::withToken($apiToken)->get('http://proyecto.test/api/get-categs/'.$id)['categorias'];
        array_push($response, $responseAux);

        return view('categorias', compact('response'));
    }

    public function categoriasCodigo(Request $request)
    {
        $codigo = $request->codigo;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://proyecto.test/api/get-categs/codigo/'.$codigo)['categorias'];

        return view('categorias', compact('response'));
    }

    public function categoriasNombre(Request $request)
    {
        $nombre = $request->nombre;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://proyecto.test/api/get-categs/nombre/'.$nombre)['categorias'];

        return view('categorias', compact('response'));
    }

    //New categoria
    public function nuevaCategoria()
    {
        return view('nueva-categoria');
    }
    public function nuevaCategoriaPost(Request $request)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('http://proyecto.test/api/new-categ', $data);

        return redirect()->route('categorias');
    }

    //New categoria - producto relation
    public function nuevaCategoriaRelation($id_prod)
    {
        return view('nueva-categoria-relation', compact('id_prod'));
    }
    public function nuevaCategoriaRelationPost(Request $request, $id_prod)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('http://proyecto.test/api/new-categ-prod', $data);

        return redirect()->route('categorias/prod', ['id_prod' => $id_prod]);
    }

    //Edit user
    public function editCategoria($id_categ)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://proyecto.test/api/get-categs/'.$id_categ)['categorias'];

        return view('edit-categoria', compact('response'));
    }
    public function editCategoriaPost(Request $request, $id_categ)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('http://proyecto.test/api/edit-categ/'.$id_categ, $data);

        return redirect()->route('categorias');
    }

    //Delete
    public function deleteCategoria($id_categ)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->delete('http://proyecto.test/api/delete-categ/'.$id_categ);
        $responseRelation = Http::withToken($apiToken)->delete('http://proyecto.test/api/delete-categ-prod-categ/'.$id_categ);

        return redirect()->route('categorias');
    }

    public function deleteRelationCategProd($id_categ, $id_prod)
    {
        $apiToken = Auth::user()->api_token;
        $responseRelation = Http::withToken($apiToken)->delete('http://proyecto.test/api/delete-categ-prod/'.$id_categ.'/'.$id_prod);

        return redirect()->route('categorias');
    }
}
