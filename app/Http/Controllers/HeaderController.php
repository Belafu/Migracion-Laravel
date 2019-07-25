<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HeaderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function search()
     {
       $param = $_GET['search'];
       $products = Product::where('name', 'like', "%$param%" ); //no olvidar get() para las consultas where;
       $products->withPath('?search=' . $param);
       return view('products', compact('products'));
     }
}
