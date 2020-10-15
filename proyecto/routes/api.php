<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Api\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:api'], function() {
    //CRUD USUARIOS
    //Gets all y por id
    Route::get('get-users', 'Api\UsersController@getUsers');
    Route::get('get-users/{id}', 'Api\UsersController@getUserId');

    //New user
    Route::post('new-user', 'Api\UsersController@newUser');

    //Edit por id
    Route::post('edit-user/{id}', 'Api\UsersController@editUserId');

    //Delete user by id
    Route::delete('delete-user/{id}', 'Api\UsersController@deleteUserId');


    //CRUD CATEGORIAS
    //Gets all, por id y por codigo_categoria
    Route::get('get-categs', 'Api\CategoriasController@getCategorias');
    Route::get('get-categs/{id}', 'Api\CategoriasController@getCategoriaId');
    Route::get('get-categs/codigo/{codigo_categoria}', 'Api\CategoriasController@getCategoriaCodigo');

    //New categoria
    Route::post('new-categ', 'Api\CategoriasController@newCategoria');

    //Edit por id
    Route::post('edit-categ/{id}', 'Api\CategoriasController@editCategoriaId');

    //Delete categoria by id
    Route::delete('delete-categ/{id}', 'Api\CategoriasController@deleteCategoriaId');


    //CRUD PRODUCTS
    //Gets all, por id y por codigo_producto
    Route::get('get-prods', 'Api\ProductsController@getProducts');
    Route::get('get-prods/{id}', 'Api\ProductsController@getProductId');
    Route::get('get-prods/codigo/{codigo_producto}', 'Api\ProductsController@getProductCodigo');

    //New product
    Route::post('new-prod', 'Api\ProductsController@newProduct');

    //Edit por id
    Route::post('edit-prod/{id}', 'Api\ProductsController@editProductId');

    //Delete product by id
    Route::delete('delete-prod/{id}', 'Api\ProductsController@deleteProductId');


    //CRUD RELACION CATEGORIAS PRODUCTS
    //Gets all, por id de producto, por id de categoria y por ambos al mismo tiempo
    Route::get('get-categs-prods', 'Api\CategsProdsRelationController@getCategsProds');
    Route::get('get-categs-prods/categs/{id_categ}', 'Api\CategsProdsRelationController@getCategsId');
    Route::get('get-categs-prods/prods/{id_prod}', 'Api\CategsProdsRelationController@getProdsId');
    Route::get('get-categs-prods/{id_categ}/{id_prod}', 'Api\CategsProdsRelationController@getCategsProdsIds');

    //New relation
    Route::post('new-categ-prod', 'Api\CategsProdsRelationController@newCategProd');

    //Delete relation by id_categ and id_prod
    Route::delete('delete-categ-prod/{id_categ}/{id_prod}', 'Api\CategsProdsRelationController@deleteCategsProdsIds');


    //CRUD TARIFAS
    //Gets all, por id, por id de producto y por id de producto y que esten activas, hayan pasado o aun no se hayan activado, es decir, futuras
    Route::get('get-tarifas', 'Api\TarifasController@getTarifas');
    Route::get('get-tarifas/{id}', 'Api\TarifasController@getTarifasId');
    Route::get('get-tarifas/prod/{id_prod}', 'Api\TarifasController@getTarifasProductId');
    Route::get('get-tarifas/prod/{id_prod}/activas', 'Api\TarifasController@getTarifasProductIdActivas');
    Route::get('get-tarifas/prod/{id_prod}/pasadas', 'Api\TarifasController@getTarifasProductIdPasadas');
    Route::get('get-tarifas/prod/{id_prod}/futuras', 'Api\TarifasController@getTarifasProductIdFuturas');

    //New relation
    Route::post('new-tarifa', 'Api\TarifasController@newTarifa');

    //Edit por id
    Route::post('edit-tarifa/{id}', 'Api\TarifasController@editTarifaId');

    //Delete relation by id_categ and id_prod
    Route::delete('delete-tarifa/{id}', 'Api\TarifasController@deleteTarifaId');
});
