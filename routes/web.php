<?php

use Illuminate\http\request;
use App\Product;
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



Route::get('products', function (){
    $products = Product::all();
    return view('products.index', ['products'=> $products]);
})->name('products.index');

Route::get('products/create', function (){
    return view('products.create');
})->name('products.create');


Route::post('poducts', function (Request $request){
    $newProduct = new Product;
    $newProduct->description = $request->input('description');
    $newProduct->price= $request->input('price');
    $newProduct->save();
    return redirect()->route('products.index')->with('info', 'Producto creado exitosamente');
})->name('poducts.store');

Route::get('products/{id}/destroy', 'ProductosController@destroy')->name('products.destroy');
Route::put('products/upgrade', 'ProductosController@upgrade')->name('products.upgrade');
Route::get('products/edit', 'ProductosController@edit')->name('product.edit');







