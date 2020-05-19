<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class categoryController extends Controller
{
    //agrega nueva categoria
    public function agregar(Request $form){
        $pregunta = new Question();
        $pregunta->cat_nomb=$form['cat_nomb'];
        $pregunta->save();
        return view('home/admin');
    }

    //devuelve id categoria por tipo
    public function category($tipo){
        $pregunta= Category::select('id')->where('cat_nomb','like',"%.$tipo.%")
                            ->inRandomOrder()->first();
        return $pregunta;
    }
}
