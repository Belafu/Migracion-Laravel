<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $rules = [
            'name' => ['required', 'string', 'max:12'],
            'email' => ['required', 'string', 'email', 'max:55', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'genre' => ['required', 'string', 'max:20'],
            'pais' => ['required'],
            'ciudad' => ['required'],
        ];
        $messages = [
           'required' =>':attribute debe estar completo.',
           'string' =>':attribute debe ser cadena de texto.',
           'name.max' => ':attribute debe tener como máximo 12 caracteres',
           'email.max' => ':attribute debe tener como máximo 55 caracteres',
           'email' => ':attribute debe ser un correo valido.',
           'confirmed' => 'la contraseña es incorrecta',
           'unique' => 'El :attribute ya esta siendo usado',
           'password.min' => 'La :attribute tiene un min de 6 caracteres',
         ];

          return Validator::make($data,$rules, $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'genre'=> $data['genre'],
            'pais'=>$data['pais'],
            'ciudad'=>$data['ciudad'],
            'rol'=> 0 ,//Todos son automaticamente 0 como Usuarios
        ]);

    }
    public function index(){
      return view('register');
    }
}
