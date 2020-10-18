<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'Front\HomeController@index')->name('home');

/* USUARIOS */
//Gets
Route::get('/usuarios', 'Front\UsuariosController@index')->name('usuarios');
Route::post('/usuarios/id', 'Front\UsuariosController@usuariosId')->name('usuarios/id');
Route::post('/usuarios/nombre', 'Front\UsuariosController@usuariosNombre')->name('usuarios/nombre');
Route::post('/usuarios/email', 'Front\UsuariosController@usuariosEmail')->name('usuarios/email');
//New user
Route::get('/usuarios/nuevo', 'Front\UsuariosController@nuevoUsuario')->name('usuarios/nuevo');
Route::post('/usuarios/nuevo/post', 'Front\UsuariosController@nuevoUsuarioPost')->name('usuarios/nuevo/post');
//Edit
Route::get('/usuarios/edit/{id_user}', 'Front\UsuariosController@editUsuario')->name('usuarios/edit');
Route::post('/usuarios/edit/post/{id_user}', 'Front\UsuariosController@editUsuarioPost')->name('usuarios/edit/post');
//Delete
Route::get('/usuarios/delete/{id_user}', 'Front\UsuariosController@deleteUsuario');


/* PRODUCTOS */
//Gets
Route::get('/productos', 'Front\ProductosController@index')->name('productos');
Route::post('/productos/id', 'Front\ProductosController@productosId')->name('productos/id');
Route::post('/productos/codigo', 'Front\ProductosController@productosCodigo')->name('productos/codigo');
Route::post('/productos/nombre', 'Front\ProductosController@productosNombre')->name('productos/nombre');
//New prod
Route::get('/productos/nuevo', 'Front\ProductosController@nuevoProducto')->name('productos/nuevo');
Route::post('/productos/nuevo/post', 'Front\ProductosController@nuevoProductoPost')->name('productos/nuevo/post');
//Edit
Route::get('/productos/edit/{id_prod}', 'Front\ProductosController@editProducto')->name('productos/edit');
Route::post('/productos/edit/post/{id_prod}', 'Front\ProductosController@editProductoPost')->name('productos/edit/post');
//Delete
Route::get('/productos/delete/{id_prod}', 'Front\ProductosController@deleteProduct');


/* CATEGORIAS */
//Gets
Route::get('/categorias', 'Front\CategoriasController@index')->name('categorias');
Route::get('/categorias/filter/prod/{id_prod}', 'Front\CategoriasController@categoriasByProdId')->name('categorias/prod');
Route::post('/categorias/id', 'Front\CategoriasController@categoriasId')->name('categorias/id');
Route::post('/categorias/codigo', 'Front\CategoriasController@categoriasCodigo')->name('categorias/codigo');
Route::post('/categorias/nombre', 'Front\CategoriasController@categoriasNombre')->name('categorias/nombre');
//New categ
Route::get('/categorias/nueva', 'Front\CategoriasController@nuevaCategoria')->name('categorias/nueva');
Route::post('/categorias/nueva/post', 'Front\CategoriasController@nuevaCategoriaPost')->name('categorias/nueva/post');
//New categ - prod relation
Route::get('/categorias/relation/nueva/{id_prod}', 'Front\CategoriasController@nuevaCategoriaRelation')->name('categorias/relation/nueva');
Route::post('/categorias/relation/nueva/post/{id_prod}', 'Front\CategoriasController@nuevaCategoriaRelationPost')->name('categorias/relation/nueva/post');
//Edit
Route::get('/categorias/edit/{id_categ}', 'Front\CategoriasController@editCategoria')->name('categorias/edit');
Route::post('/categorias/edit/post/{id_categ}', 'Front\CategoriasController@editCategoriaPost')->name('categorias/edit/post');
//Delete
Route::get('/categorias/delete/{id_categ}', 'Front\CategoriasController@deleteCategoria');
//Delete de la relación categoria - producto
Route::get('/categorias/delete/{id_categ}/{id_prod}', 'Front\CategoriasController@deleteRelationCategProd');


/* TARIFAS */
//Gets
Route::get('/tarifas/filter/{param?}', 'Front\TarifasController@index')->name('tarifas/filter/all')->defaults('param', 'all');
Route::get('/tarifas/filter/prod/{id_prod}/{param?}', 'Front\TarifasController@tarifasByProdId')->name('tarifas/filter/prod')->defaults('param', 'all');
//New tarifa
Route::get('/tarifas/nueva', 'Front\TarifasController@nuevaTarifa')->name('tarifas/nueva');
Route::post('/tarifas/nueva/post', 'Front\TarifasController@nuevaTarifaPost')->name('tarifas/nueva/post');
//Edit
Route::get('/tarifas/edit/{id_tarifa}', 'Front\TarifasController@editTarifa')->name('tarifas/edit');
Route::post('/tarifas/edit/post/{id_tarifa}', 'Front\TarifasController@editTarifaPost')->name('tarifas/edit/post');
//Delete
Route::get('/tarifas/delete/{id_tarifa}', 'Front\TarifasController@deleteTarifa');
