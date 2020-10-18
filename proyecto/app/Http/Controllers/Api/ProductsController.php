<?php

namespace App\Http\Controllers\Api;

use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //Get all products
    public function getProducts() {
        try{
            $products = Product::all();
            return response()->json(['status' => 1, 'products' => $products]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'products' => []], 500);
        }
    }
    //Get product by id
    public function getProductId($id) {
        try{
            $products = Product::findOrFail($id);
            return response()->json(['status' => 1, 'products' => $products]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'products' => []], 500);
        }
    }
    //Get product by codigo_producto
    public function getProductCodigo($codigo_producto) {
        try{
            $products = Product::where('codigo_producto', '=', $codigo_producto)->get();
            return response()->json(['status' => 1, 'products' => $products]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'products' => []], 500);
        }
    }
    //Get product by nombre
    public function getProductNombre($nombre) {
        try{
            $products = Product::where('nombre', '=', $nombre)->get();
            return response()->json(['status' => 1, 'products' => $products]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'products' => []], 500);
        }
    }

    //New product
    public function newProduct(Request $request) {
        try{
            $product = new Product;
            $product->codigo_producto = $request->codigo_producto;
            $product->nombre = $request->nombre;
            $product->descripcion = $request->descripcion;
            $product->url_foto = $request->url_foto;
            $product->created_at = date('Y-m-d H:m:s');
            $product->updated_at = date('Y-m-d H:m:s');
            $product->save();

            return response()->json(['status' => 1, 'created_product' => $product]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0, 'error' => $e], 500);
        }
    }

    //Edit product by id
    public function editProductId($id, Request $request) {
        try{
            $product = Product::findOrFail($id);
            $product->codigo_producto = $request->codigo_producto;
            $product->nombre = $request->nombre;
            $product->descripcion = $request->descripcion;
            $product->url_foto = $request->url_foto;
            $product->updated_at = date('Y-m-d H:m:s');
            $product->save();
            return response()->json(['status' => 1, 'updated_product' => $product]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0], 500);
        }
    }

    //Delete categoria by id
    public function deleteProductId($id) {
        try{
            $product = Product::findOrFail($id);
            $product->delete();
            return response()->json(['status' => 1, 'deleted_product' => $product]);
        } catch(\Exception $e) {
            return response()->json(['status' => 0], 500);
        }
    }
}
