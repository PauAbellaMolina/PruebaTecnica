<?php

namespace App\Http\Controllers\Api;

use App\CategsProds;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategsProdsRelationController extends Controller
{
    //Get all relations
    public function getCategsProds() {
        try{
            $relations = DB::table('categs_prods')->get();
            return response()->json(['status' => 1, 'categs_prods_relation' => $relations]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'categs_prods_relation' => []], 500);
        }
    }
    //Get categorias by id
    public function getCategsId($id_categ) {
        try{
            $categorias = DB::table('categs_prods')->where('id_categ', '=', $id_categ)->get();
            return response()->json(['status' => 1, 'relations by id_categ' => $categorias]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'relations by id_categ' => []], 500);
        }
    }
    //Get products by id
    public function getProdsId($id_prod) {
        try{
            $products = DB::table('categs_prods')->where('id_prod', '=', $id_prod)->get();
            return response()->json(['status' => 1, 'relations by id_prod' => $products]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'relations by id_prod' => []], 500);
        }
    }
    //Get categorias and products by id
    public function getCategsProdsIds($id_categ, $id_prod) {
        try{
            $relationid = DB::table('categs_prods')->where('id_categ', '=', $id_categ)->where('id_prod', '=', $id_prod)->get();
            return response()->json(['status' => 1, 'relations by id_categ AND id_prod' => $relationid]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'relations by id_categ AND id_prod' => []], 500);
        }
    }

    //New relation
    public function newCategProd(Request $request) {
        try{
            /* DB::table('categs_prods')->insert(['id_categ' => $id_categ, 'id_prod' => $id_prod]); */
            $relation = new CategsProds;
            $relation->id_categ = $request->id_categ;
            $relation->id_prod = $request->id_prod;
            $relation->created_at = date('Y-m-d H:m:s');
            $relation->updated_at = date('Y-m-d H:m:s');
            $relation->save();

            return response()->json(['status' => 1, 'created_relation' => $relation]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'error' => $e], 500);
        }
    }

    //Delete categoria by id
    public function deleteCategsProdsIds($id_categ, $id_prod) {
        try{
            $relationid = DB::table('categs_prods')->where('id_categ', '=', $id_categ)->where('id_prod', '=', $id_prod)->delete();

            return response()->json(['status' => 1, 'deleted_relation' => $relationid]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0], 500);
        }
    }
}
