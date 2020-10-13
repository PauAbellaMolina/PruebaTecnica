<?php

namespace App\Http\Controllers\Api;


use App\Tarifa;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TarifasController extends Controller
{
    //Get all tarifas
    public function getTarifas() {
        try{
            $tarifas = Tarifa::all();
            return response()->json(['status' => 1, 'tarifas' => $tarifas]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'tarifas' => []], 500);
        }
    }
    //Get tarifas by id
    public function getTarifasId($id) {
        try{
            $tarifas = Tarifa::findOrFail($id);
            return response()->json(['status' => 1, 'tarifas' => $tarifas]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'tarifas' => []], 500);
        }
    }
    //Get tarifas by id_prod
    public function getTarifasProductId($id_prod) {
        try{
            $tarifas = DB::table('tarifas')->where('id_prod', '=', $id_prod)->get();
            return response()->json(['status' => 1, 'tarifas by id_prod' => $tarifas]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'tarifas by id_prod' => []], 500);
        }
    }
    //Get active tarifas by id_prod
    public function getTarifasProductIdActivas($id_prod) {
        try{
            $tarifas = DB::table('tarifas')->where('id_prod', '=', $id_prod)->where('fecha_inicio', '<', date('Y-m-d H:m:s'))->where('fecha_fin', '>', date('Y-m-d H:m:s'))->get();
            return response()->json(['status' => 1, 'active tarifas by id_prod' => $tarifas]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'active tarifas by id_prod' => []], 500);
        }
    }
    //Get past tarifas by id_prod
    public function getTarifasProductIdPasadas($id_prod) {
        try{
            $tarifas = DB::table('tarifas')->where('id_prod', '=', $id_prod)->where('fecha_fin', '<', date('Y-m-d H:m:s'))->get();
            return response()->json(['status' => 1, 'active tarifas by id_prod' => $tarifas]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'active tarifas by id_prod' => []], 500);
        }
    }
    //Get future tarifas by id_prod
    public function getTarifasProductIdFuturas($id_prod) {
        try{
            $tarifas = DB::table('tarifas')->where('id_prod', '=', $id_prod)->where('fecha_inicio', '>', date('Y-m-d H:m:s'))->get();
            return response()->json(['status' => 1, 'active tarifas by id_prod' => $tarifas]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'active tarifas by id_prod' => []], 500);
        }
    }

    //New tarifa
    public function newTarifa(Request $request) {
        try{
            $tarifa = new Tarifa;
            $tarifa->id_prod = $request->id_prod;
            $tarifa->fecha_inicio = $request->fecha_inicio;
            $tarifa->fecha_fin = $request->fecha_fin;
            $tarifa->precio = $request->precio;
            $tarifa->created_at = date('Y-m-d H:m:s');
            $tarifa->updated_at = date('Y-m-d H:m:s');
            $tarifa->save();

            return response()->json(['status' => 1, 'created_tarifa' => $tarifa]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'error' => $e], 500);
        }
    }

    //Edit tarifa by id
    public function editTarifaId($id, Request $request) {
        try{
            $tarifa = Tarifa::findOrFail($id);
            $tarifa->id_prod = $request->id_prod;
            $tarifa->fecha_inicio = $request->fecha_inicio;
            $tarifa->fecha_fin = $request->fecha_fin;
            $tarifa->precio = $request->precio;
            $tarifa->updated_at = date('Y-m-d H:m:s');
            $tarifa->save();
            return response()->json(['status' => 1, 'updated_tarifa' => $tarifa]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0], 500);
        }
    }

    //Delete tarifa by id
    public function deleteTarifaId($id) {
        try{
            $tarifa = Tarifa::findOrFail($id);
            $tarifa->delete();
            return response()->json(['status' => 1, 'deleted_tarifa' => $tarifa]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0], 500);
        }
    }
}
