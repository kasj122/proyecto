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

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/informacion', function (){
    //return "Informacion de la pagina";
    return view('paginas/informacion');
});

Route::get('/', function (){
    return 'Esta es la url raiz';
});

Route::get('products', function (){
    return view('products.index');
})->name('products.index');

Route::get('products/create', function (){
    return view('products.create');
})->name('products.create');


