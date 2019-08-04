<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use App\Tag;
use App\Product_tag;
use Illuminate\Http\Request;
//TOMA LO SAQUE DEL AUTH
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /*Mostrar una lista del recurso.*/
    public function index()
    {
        //Mostrar todos los productos.
        $products = Product::all();
        $tags = Tag::all();
        //para desabilitar que la persona compre el mismo producto 2 veces
        // $carritoActual = Cart::where('status','=',0)->get();
        // $carritoActual = $carritoActual->map(function($elem){return $elem->name;});
        // si $carritoActual no tiene elementos devuelve una collection vacia
        //Lo puse en la vista de cada producto
        if (Auth::user() != null) {//si estoy logueado
          $id = Auth::user()->id;
          $cantidad = Cart::where('user_id','=',$id)->where('status','=', 0)->count();
        }else {
          $cantidad = null;
        }
        return view('products', compact('products','tags','cantidad'));
    }

    /*Muestra el formulario para crear un nuevo recurso.*/
    public function create()
    {
        $tags = Tag::all();
        return view('productAdd',compact('tags'));
    }

    /* Almacenar un recurso recién creado en el almacenamiento*/
    public function store(Request $request)
    {
        // dd($request);
        //Validaciones
        //$rules = [....]

        //Manejo de errores
        //$messages = [.....]

        //$this->validate($request, $rules, $messages);

        $path = $request->file('featured_img')->store('public/products');
        $file = basename($path);

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->featured_img = $file;

        $product->save();

        $product_tag = new Product_tag;
        $product_tag->tag_id = $request->tag;
        $product_tag->product_id = $product->id;

        $product_tag->save();

        return redirect('/products');

    }

    /*  Mostrar recurso especifico.*/
    public function show($id)
    {
        $product = Product::find($id);
        //MUDE la logica aca
        if (Auth::user() != null) {//si estoy logueado
          $id = Auth::user()->id;
          $carritoActual = Cart::where('user_id','=',$id)->where('status','=', 0)->get();
          $carritoActual = $carritoActual->map(function($elem){return $elem->name;});
          $yaEstaEnElCarrito = $carritoActual->contains($product->name);
          $cantidad = $carritoActual->count();
        }else {
          $cantidad = null;
          $yaEstaEnElCarrito = false;
        }
        return view('product', compact('product','yaEstaEnElCarrito','cantidad'));
    }

    /* Show the form for editing the specified resource. */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('productEdit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $product = Product::find($id);
      // dd($request);
      //Validaciones
      //$rules = [....]

      //Manejo de errores
      //$messages = [.....]

      //$this->validate($request, $rules, $messages);


      // dd($path, $file);

      $product->name = $request->name;
      $product->description = $request->description;
      $product->price = $request->price;

      if ($request->file('featured_img')){
        $path = $request->file('featured_img')->store('public/products');
        $file = basename($path);
        $product->featured_img = $file;
      }
      $product->save();
      return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();

        return redirect('/products');
    }
    public function filtros(Request $request){
      $tags = Tag::all();
      //son los productos filtrados |pero me conviene el nombre para recorrerlo
      $products = Product::all();

        if (isset($request->price) ) {
          $proFiltprecio = Product::where('price','>',$request->price)
          ->where('price','<',$request->price +1000)->get();
          $products = $products->intersect($proFiltprecio);
        }

        // dd($products);
        if (isset($request->tag) ) {
          $elTag = Tag::find($request->tag);
          $proFiltTag = $elTag->products ;
          $products = $products->intersect($proFiltTag);
        }
        if (Auth::user() != null) {//si estoy logueado
          $id = Auth::user()->id;
          $cantidad = Cart::where('user_id','=',$id)->where('status','=', 0)->count();
        }else {
          $cantidad = null;
        }
        return view('products', compact('products','tags','cantidad'));
    }
}
