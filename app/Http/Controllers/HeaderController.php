<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Tag;

class HeaderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function search(Request $request)
     {
       $tags = Tag::all();
       //$carritoActual = [];
       $param = $request['search'];

       $products = Product::where('name', 'like', "%$param%" )->get(); //no olvidar get() para las consultas where;
       //$products->withPath('?search=' . $param);
       return view('products', compact('products','tags'));
     }
}
