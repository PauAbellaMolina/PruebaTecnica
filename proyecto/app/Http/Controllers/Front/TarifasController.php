<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class TarifasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Gets
    public function index()
    {
        $apiToken = Auth::user()->api_token;
        $responseAll = Http::withToken($apiToken)->get('http://proyecto.test/api/get-tarifas')['tarifas'];
        $responseActivas = Http::withToken($apiToken)->get('http://proyecto.test/api/get-tarifas/activas')['active tarifas'];
        $responsePasadas = Http::withToken($apiToken)->get('http://proyecto.test/api/get-tarifas/pasadas')['past tarifas'];
        $responseFuturas = Http::withToken($apiToken)->get('http://proyecto.test/api/get-tarifas/futuras')['future tarifas'];

        $response['all'] = $responseAll;
        $response['activas'] = $responseActivas;
        $response['pasadas'] = $responsePasadas;
        $response['futuras'] = $responseFuturas;

        return view('tarifas', compact('response'));
    }

    public function tarifasByProdId($id_prod)
    {
        $apiToken = Auth::user()->api_token;
        $responseAll = Http::withToken($apiToken)->get('http://proyecto.test/api/get-tarifas/prod/'.$id_prod)['tarifas by id_prod'];
        $responseActivas = Http::withToken($apiToken)->get('http://proyecto.test/api/get-tarifas/prod/'.$id_prod.'/activas')['active tarifas by id_prod'];
        $responsePasadas = Http::withToken($apiToken)->get('http://proyecto.test/api/get-tarifas/prod/'.$id_prod.'/pasadas')['past tarifas by id_prod'];
        $responseFuturas = Http::withToken($apiToken)->get('http://proyecto.test/api/get-tarifas/prod/'.$id_prod.'/futuras')['future tarifas by id_prod'];

        $response['all'] = $responseAll;
        $response['activas'] = $responseActivas;
        $response['pasadas'] = $responsePasadas;
        $response['futuras'] = $responseFuturas;

        return view('tarifas', compact('response'));
    }

    //New tarifa
    public function nuevaTarifa()
    {
        return view('nueva-tarifa');
    }
    public function nuevaTarifaPost(Request $request)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('http://proyecto.test/api/new-tarifa', $data);

        return redirect()->route('tarifas/filter/all');
    }

    //Edit user
    public function editTarifa($id_tarifa)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->get('http://proyecto.test/api/get-tarifas/'.$id_tarifa)['tarifas'];

        return view('edit-tarifa', compact('response'));
    }
    public function editTarifaPost(Request $request, $id_tarifa)
    {
        $data = $request->request->all();
        $apiToken = Auth::user()->api_token;
        $post = Http::withToken($apiToken)->post('http://proyecto.test/api/edit-tarifa/'.$id_tarifa, $data);

        return redirect()->route('tarifas/filter/all');
    }

    //Delete
    public function deleteTarifa($id_tarifa)
    {
        $apiToken = Auth::user()->api_token;
        $response = Http::withToken($apiToken)->delete('http://proyecto.test/api/delete-tarifa/'.$id_tarifa);

        return redirect()->route('tarifas/filter/all');
    }
}
