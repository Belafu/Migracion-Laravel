<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Tag;
use App\Cart;

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
       $carritoActual = Cart::where('status','=',0)->get();
       $carritoActual = $carritoActual->map(function($elem){return $elem->name;});
       //$carritoActual = [];
       $param = $request['search'];


       $products = Product::where('name', 'like', "%$param%" )->get(); //no olvidar get() para las consultas where;
       //$products->withPath('?search=' . $param);
       return view('products', compact('products','tags','carritoActual'));
     }
}
