<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;

use Illuminate\Http\Request;
//TOMA LO SAQUE DEL AUTH
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        //para que agrege al carrito debo antes estar logueado,use middleware(auth) corre bien:)
         $product = Product::find($id);
        // if (Auth::user() == null) {    //devuelve null si no esta logueado
        //     $userLogueado = null ;
        // }else {
        //   $userLogueado =  Auth::user()->id; //traer usuario que esta comprando.
        // }
        $userLogueado =  Auth::user()->id;
      //  dd($userLogueado);
        $cart = new Cart;

        $cart->name = $product->name;
        $cart->description = $product->description;
        $cart->price = $product->price;
        $cart->featured_img = $product->featured_img;
        $cart->cant = 1;
        $cart->user_id = $userLogueado;

        $cart->save();

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      if (Auth::user() == null) {//si el usuario no esta logueado
        $userLogueado = null;
      }else {//estoy logueado
        $userLogueado =  Auth::user()->id;
        $cartNull = Cart::where('user_id','=',null)->where('status','=', 0)->get();
            if ($cartNull != []) {//si ubo compras cuando estube deslogueado
              foreach ($cartNull as  $value) {
                $value->user_id = $userLogueado;
                $value->save();
              }
            }
      }

        $cart = Cart::where('user_id','=',$userLogueado)->where('status','=', 0)->get();
        return view('cart', compact('cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cart = Cart::find($id);
        $cart->cant = $request->cant ;
        $cart->save();
        return redirect('/cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cart = Cart::find($id);
      $cart->delete();

      return redirect('/cart');
    }
    public function comprar(){
//darle a todas las compras un id_carrito incremental al anterior
    //campiarle a todos estos el estado a 1(comprado)
    $userLogueado =  Auth::user()->id;
    $cart_Usuario = Cart::where('user_id','=',$userLogueado)->where('status','=', 0)->get();
    $cartNumber = Cart::max('cart_number');
    foreach ( $cart_Usuario as $elem) {
      $elem->cart_number = $cartNumber + 1;
      $elem->status =  1;
      $elem->save();
    }

    //esta es mi solucion ,no se que pedo cuando 2 personas entren
//por javascript se le debe mostrar un resumen de todo el carrito en simples filas(opcional)
     return redirect('/products');
    }
}
