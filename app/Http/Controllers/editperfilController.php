<?php

namespace App\Http\Controllers;
use App\Product;
use App\User;
use App\Cart;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class editperfilController extends Controller
{

  public function edit($id)
  {

      $usuario = User::find($id);
      $compras = Cart::where('status','=','1')->where('user_id','=',$id)->get();

      return view('editarPerfil', compact('usuario','compras'));
  }

  public function update(Request $request, $id)
  {
    $usuario = User::find($id);
    // Falta validar error si es que me quiro cambiar de mail y ya esta usado
    //Validaciones
    //$rules = [....]

    //Manejo de errores
    //$messages = [.....]

    //$this->validate($request, $rules, $messages);


    // dd($path, $file);

    $usuario->name = $request->name;
    $usuario->email = $request->email;
    //$usuario->password = Hash::make($request->password);
    if ($request->password != "") {
      $usuario->password = password_hash($request->password,PASSWORD_DEFAULT);
    }


    $usuario->save();
    return redirect('/index.php');
  }

}
