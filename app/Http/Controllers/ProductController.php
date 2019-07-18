<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*Mostrar una lista del recurso.*/
    public function index()
    {
        //Mostrar todos los productos.
        $products = Product::all();
        return view('products', compact('products'));
    }

    /*Muestra el formulario para crear un nuevo recurso.*/
    public function create()
    {
        return view('productAdd');
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
        // dd($path, $file);

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->featured_img = $file;

        $product->save();

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


}
