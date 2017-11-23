<?php

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

Route::get('manejodestrings', function(){
	 echo '¡Saludos desde el paquete manejodestrings! usando Proveedor de Servicios';
});

Route::resource('error'    , 'ErrorController');

//Routes de ejemplosblade
Route::resource('ejemplosblade', 'EjemplosbladeController');
Route::get('ejemploif', 'EjemplosbladeController@ejemploif');
Route::get('ejemplobucle', 'EjemplosbladeController@ejemplobucle');

Route::resource('acceso'   , 'AccesoController');
Route::get('accesocrud'    , 'AccesoController@crud');
Route::post('accesocrud'   , 'AccesoController@crud');
Route::get('accesolocale'  , 'AccesoController@setLocalizacion');
Route::post('accesolocale' , 'AccesoController@setLocalizacion');

Route::resource('ejemplo01', 'Ejemplo01Controller');
Route::resource('ejemplo02', 'Ejemplo02Controller');
Route::resource('ejemplo03', 'Ejemplo03Controller');
Route::resource('ejemplo04', 'Ejemplo04Controller');
Route::resource('ejemplo05', 'Ejemplo05Controller');
Route::resource('ejemplo06', 'Ejemplo06Controller');
Route::resource('ejemplo07', 'Ejemplo07Controller');
Route::resource('ejemplo08', 'Ejemplo08Controller');
Route::resource('ejemplo09', 'Ejemplo09Controller');
Route::resource('ejemplo10', 'Ejemplo10Controller');
Route::resource('ejemplo11', 'Ejemplo11Controller');
Route::resource('ejemplo12', 'Ejemplo12Controller');
Route::resource('ejemplo13', 'Ejemplo13Controller');
Route::resource('ejemplo14', 'Ejemplo14Controller');
Route::resource('ejemplo15', 'Ejemplo15Controller');
Route::resource('ejemplo16', 'Ejemplo16Controller');
Route::resource('ejemplo17', 'Ejemplo17Controller');
Route::resource('ejemplo18', 'Ejemplo18Controller');
Route::resource('ejemplo19', 'Ejemplo19Controller');
Route::resource('ejemplo20', 'Ejemplo20Controller');
Route::resource('ejemplo21', 'Ejemplo21Controller');
Route::resource('ejemplo22', 'Ejemplo22Controller');
Route::resource('ejemplo23', 'Ejemplo23Controller');
Route::resource('ejemplo24', 'Ejemplo24Controller');
Route::resource('ejemplo25', 'Ejemplo25Controller');
Route::resource('ejemplo26', 'Ejemplo26Controller');
Route::resource('ejemplo27', 'Ejemplo27Controller');
Route::resource('ejemplo28', 'Ejemplo28Controller');
Route::resource('ejemplo29', 'Ejemplo29Controller');
Route::resource('ejemplo30', 'Ejemplo30Controller');
Route::resource('ejemplo31', 'Ejemplo31Controller');
Route::resource('ejemplo32', 'Ejemplo32Controller');
Route::resource('ejemplo33', 'Ejemplo33Controller');
Route::resource('ejemplo34', 'Ejemplo34Controller');
Route::resource('ejemplo35', 'Ejemplo35Controller');
Route::resource('ejemplo36', 'Ejemplo36Controller');
Route::resource('ejemplo37', 'Ejemplo37Controller');
Route::resource('ejemplo38', 'Ejemplo38Controller'); 
Route::resource('productos', 'ProductosController');

Route::get('ejemplo38crud', 'Ejemplo38Controller@crud');
Route::post('ejemplo38crud', 'Ejemplo38Controller@crud');


Route::get('productoscrud', 'ProductosController@crud');
Route::post('productoscrud', 'ProductosController@crud');