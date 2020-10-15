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
Route::get('/usuarios', 'Front\UsuariosController@index')->name('usuarios');
Route::get('/productos', 'Front\ProductosController@index')->name('productos');
Route::get('/categorias', 'Front\CategoriasController@index')->name('categorias');
Route::get('/tarifas', 'Front\TarifasController@index')->name('tarifas');

/* Route::post('/vuelogin', 'Auth\LoginController@vuelogin'); */

/* Route::post('/handle-login', 'Auth\LoginController@handleLogin'); */

//Boilerplate to protect routes by login
/* Route::get('/test', function() {
    return "test";
})->middleware('auth'); */
