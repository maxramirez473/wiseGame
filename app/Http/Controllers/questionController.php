<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;
use App\Category;

class questionController extends Controller
{
    
//agrega pregunta y 3 respuestas + correcta
public function agregar(Request $form){
    $pregunta = new Question();
    $pregunta->pregunta=$form['pregunta'];
    $pregunta->tipo=$form['tipo'];
    $pregunta->respuesta1=$form['respuesta1'];
    $pregunta->respuesta2=$form['respuesta2'];
    $pregunta->respuesta3=$form['respuesta3'];
    $pregunta->resp_correcta=$form['resp_correcta'];
    
    //saber a que categoria corresponde la question
    switch ($form['tipo']) {
        case 'historia':
            $pregunta->category_id=8;
            break;
        
        case 'arte':
            $pregunta->category_id=1;
            break;

        case 'ciencia':
            $pregunta->category_id=2;
            break;

        case 'cultura':
            $pregunta->category_id=3;
            break;

        case 'deporte':
            $pregunta->category_id=4;
            break;

        case 'entretenimiento':
            $pregunta->category_id=5;
            break;

        case 'farandula':
            $pregunta->category_id=6;
            break;

        case 'gastronomia':
            $pregunta->category_id=7;
            break;
    }
    $pregunta->save();
    return view('home/admin');
}

//trae pregunta random    
public function aleatorio(){
    $pregunta= Question::inRandomOrder()
                        ->first();
    return view('', compact('pregunta'));
}

//trae pregunta por tipo
public function pregunta(Request $tipo){
    $pregunta= DB::table('questions')->where('category_id','=',$tipo['category'])->get();
    dd($pregunta);

}



}
