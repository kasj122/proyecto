<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function destroy($id) {
        Product::destroy($id);

        return redirect()->route('products.index')->with('info', 'Se ha borrado el producto');
    }

    public function upgrade() {
        $producto = Product::findOrFail(request()->id);
        $producto->update([
            'description' => request()->descripcion,
            'price' => request()->price
        ]);

        return redirect()->route('products.index')->with('info', 'Se ha editado el producto');
    }

    public function edit() {
        return Product::where('id', request()->id)->select('id as idProducto', 'price', 'description as descripcion')->first();
    }
}
