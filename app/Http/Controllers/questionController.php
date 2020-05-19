<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

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
public function pregunta($tipo){
    $pregunta= Question::where('tipo','like',"%.$tipo.%")
                        ->inRandomOrder()->first();

}



}
