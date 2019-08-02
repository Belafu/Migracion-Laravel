<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_tag;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $mouse = Product_tag::where('tag_id','=',1)->first();
      $mouse = Product::find($mouse->product_id);
      $teclado = Product_tag::where('tag_id','=',2)->first();
      $teclado = Product::find($teclado->product_id);
      $auricular = Product_tag::where('tag_id','=',3)->first();
      $auricular = Product::find($auricular->product_id);
    //  dd($mouse,$teclado,$auricular);
        return view('index',compact('mouse','teclado','auricular'));
    }
}
