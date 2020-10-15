<?php

namespace App\Http\Controllers\Api;

use App\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Str;

class CategoriasController extends Controller
{
    //Get all categorias
    public function getCategorias() {
        try{
            $categorias = Categoria::all();
            return response()->json(['status' => 1, 'categorias' => $categorias]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'categorias' => []], 500);
        }
    }
    //Get categoria by id
    public function getCategoriaId($id) {
        try{
            $categorias = Categoria::findOrFail($id);
            return response()->json(['status' => 1, 'categorias' => $categorias]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'categorias' => []], 500);
        }
    }
    //Get categoria by codigo_categoria
    public function getCategoriaCodigo($codigo_categoria) {
        try{
            $categorias = Categoria::where('codigo_categoria', '=', $codigo_categoria)->get();
            return response()->json(['status' => 1, 'categorias' => $categorias]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'categorias' => []], 500);
        }
    }

    //New categoria
    public function newCategoria(Request $request) {
        try{
            $categoria = new Categoria;
            $categoria->codigo_categoria = Str::random(5);
            $categoria->nombre = $request->nombre;
            $categoria->descripcion = $request->descripcion;
            $categoria->created_at = date('Y-m-d H:m:s');
            $categoria->updated_at = date('Y-m-d H:m:s');
            $categoria->save();

            return response()->json(['status' => 1, 'created_categoria' => $categoria]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'error' => $e], 500);
        }
    }

    //Edit categoria by id
    public function editCategoriaId($id, Request $request) {
        try{
            $categoria = Categoria::findOrFail($id);
            $categoria->nombre = $request->nombre;
            $categoria->descripcion = $request->descripcion;
            $categoria->updated_at = date('Y-m-d H:m:s');
            $categoria->save();
            return response()->json(['status' => 1, 'updated_categoria' => $categoria]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0], 500);
        }
    }

    //Delete categoria by id
    public function deleteCategoriaId($id) {
        try{
            $categoria = Categoria::findOrFail($id);
            $categoria->delete();
            return response()->json(['status' => 1, 'deleted_categoria' => $categoria]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0], 500);
        }
    }
}
