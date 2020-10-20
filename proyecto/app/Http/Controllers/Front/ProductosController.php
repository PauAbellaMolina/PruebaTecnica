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

        for ($i=0; $i < sizeof($response); $i++) {
            $responseTarifa = Http::withToken($apiToken)->get('http://proyecto.test/api/get-tarifas/prod/'.$response[$i]['id'].'/activas')['active tarifas by id_prod'];

            if ($responseTarifa != []) {
                $response[$i]['precio'] = $responseTarifa['0']['precio'];
            }
        }

        return view('products', compact('response'));
    }

    public function productosId(Request $request)
    {
        $response=[];
        $id = $request->id;
        $apiToken = Auth::user()->api_token;
        $responseAux = Http::withToken($apiToken)->get('http://proyecto.test/api/get-prods/'.$id)['products'];
        $responseTarifa = Http::withToken($apiToken)->get('http://proyecto.test/api/get-tarifas/prod/'.$id.'/activas')['active tarifas by id_prod'];
        array_push($response, $responseAux);
        $response['0']['precio'] = $responseTarifa['0']['precio'];

        return view('products', compact('response'));
    }

    public function productosCodigo(Request $request)
    {
        $codigo = $request->codigo;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://proyecto.test/api/get-prods/codigo/'.$codigo)['products'];
        $responseTarifa = Http::withToken($apiToken)->get('http://proyecto.test/api/get-tarifas/prod/'.$response['0']['id'].'/activas')['active tarifas by id_prod'];
        $response['0']['precio'] = $responseTarifa['0']['precio'];

        return view('products', compact('response'));
    }

    public function productosNombre(Request $request)
    {
        $nombre = $request->nombre;
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://proyecto.test/api/get-prods/nombre/'.$nombre)['products'];
        $responseTarifa = Http::withToken($apiToken)->get('http://proyecto.test/api/get-tarifas/prod/'.$response['0']['id'].'/activas')['active tarifas by id_prod'];
        $response['0']['precio'] = $responseTarifa['0']['precio'];

        return view('products', compact('response'));
    }

    //Details page
    public function detailsProducto($id_prod)
    {
        $apiToken = Auth::user()->api_token;
        $responseProd = Http::withToken($apiToken)->get('http://proyecto.test/api/get-prods/'.$id_prod)['products'];

        $responseRelation = Http::withToken($apiToken)->get('http://proyecto.test/api/get-categs-prods/prods/'.$id_prod)['relations by id_prod'];
        $response = [];

        foreach($responseRelation as $rr) {
            $responseCategs = Http::withToken($apiToken)->get('http://proyecto.test/api/get-categs/'.$rr['id_categ'])['categorias'];
            $responseCategs['id_prod'] = $rr['id_prod'];
            array_push($response, $responseCategs);
        }

        array_push($responseProd, $response);

        return view('details-producto', compact('responseProd'));
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

    //Edit product
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
