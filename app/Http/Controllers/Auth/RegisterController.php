<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\FileBag;
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
    protected $redirectTo = '/home';

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
    protected function validator(Array $data)
    {

        $mensajes=[
            "required"=>"El campo es Obligatorio",
            "string"  =>"El campo debe incluir letras, numeros y simbolos",
            "min"     =>"El campo debe contener al menos :min caracteres",
            "max"     =>"El maximo de caracteres es :max",
            "image"   =>"El archivo bajo validación debe ser una imagen (jpeg, png, bmp, gif, svg o webp)",
            ];

        return Validator::make($data, [
            "alias"     =>"required|string|min:8|max:50",
            "name"      =>"required|string|min:8|max:50",
            "email"     =>"required|string|max:50",
            "password"  =>"required|string|min:8",
            "avatar"    =>"required|image"
        ],$mensajes);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Array $data)
    {
        
        //dd($data);
        $ruta=$data['avatar']->store('public/imagenesUsuarios');
        $imagen=basename($ruta);
        return User::create([
            'alias'=>$data['alias'],
            'avatar'=>$imagen,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
