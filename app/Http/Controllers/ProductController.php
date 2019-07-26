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
        $carritoActual = Cart::where('status','=',0)->get();
        $carritoActual = $carritoActual->map(function($elem){return $elem->name;});

        return view('products', compact('products','tags','carritoActual'));
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
        return view('product', compact('product'));
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
      $cota = 2000;
      if (isset($request->price) ) {
        $products = $products->filter(function($value){
          return ($value->price) > $cota ;
        });
      }

      /*if (isset($request['tag'])) {
        $productsConTag =  Product_tag::where('tag_id','=',$request['tag'])->get();
        $idsProductosDeEseTag = $productsConTag->map(function($value){
          return $value->product_id ;
        });
        if (!$idsProductosDeEseTag) {//SI el array no esta vacio
          $products = $products->filter(function($value){
            return  $idsProductosDeEseTag->contains($value->id);
          });
        }
            //dd($product);
      }*/
      return view('products', compact('products','tags'));
    }

}
