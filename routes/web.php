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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/prueba', function () {
    return view('prueba');
});

Route::group(['prefix'=>'proyecto'], function(){
Route::resource('Paginas', 'paginasController');




});
//Asociar una ruta a un middleware
Route::get('crear', 'paginasController@create')->middleware('admin');

//Asociar un grupo de rutas a un middleware
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('probar', 'paginasController@index');
    Route::get('borrar', 'paginasController@create');
});