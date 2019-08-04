<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_tag;
use App\Cart;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
      //eso de arriba era un miwelar automatico que te venia
    }

     public function index()
     {
//       $mouse = Product_tag::where('tag_id','=',1)->first();
//       $mouse = Product::find($mouse->product_id);
//       $teclado = Product_tag::where('tag_id','=',2)->first();
//       $teclado = Product::find($teclado->product_id);
//       $auricular = Product_tag::where('tag_id','=',3)->first();
//       $auricular = Product::find($auricular->product_id);
//     //  dd($mouse,$teclado,$auricular);
       if (Auth::user() != null) {//si estoy logueado
         $id = Auth::user()->id;
        $cantidad = Cart::where('user_id','=',$id)->where('status','=', 0)->count();
     //    dd($cantidad);
     }else {
        $cantidad = null;
      }
//
         return view('index',compact('cantidad'));
     }
 }
