<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Ranking;

class adminController extends Controller
{
    

    //agregar admin nuevo con ranking en cero
    public function agregarAdmin(Request $form){
        $reglas=[
            "alias"     =>"required|string|min:8|max:100",
            "email"     =>"required|string|max:50",
            "password"  =>"required|string|min:10",
            "password_confirm"=>"required|string|min:10|same:password",
            "avatar"    =>"required|image"
        ];

        $mensajes=[
            "required"=>"El campo es Obligatorio",
            "string"  =>"El campo debe incluir letras, numeros y simbolos",
            "min"     =>"El campo debe contener al menos :min caracteres",
            "max"     =>"El maximo de caracteres es :max",
            "image"   =>"El archivo bajo validación debe ser una imagen (jpeg, png, bmp, gif, svg o webp)",
            "same"    =>"No coincide con la contraseña ingresada anteriormente"
        ];

        dd($form);
        $this->validate($form, $reglas, $mensajes);
        $ruta=$form->file('avatar')->store('public/imagenesUsuarios');

        $persona = new User();
        $persona->alias=$form['alias'];
        $persona->email=$form['email'];
        $persona->password=$form['password'];
        $persona->avatar=basename($ruta);
        $persona->birthday=$form['birthday'];
        $persona->save();


        $rank=new Ranking;
        $rank->user_id=$persona->id;
        $rank->save();

        return redirect('home');
    }    


}
