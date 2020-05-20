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
    $resp_tipo=null;
    $resp_correcta=null;

    $reglas=[
        "pregunta"     =>"required|string|min:8|max:100",
        "category"     =>"required|integer",
        "resp_1"   =>"required|string|min:8|max:100",
        "resp_2"   =>"required|string|min:8|max:100",
        "resp_3"   =>"required|string|min:8|max:100",
        "correcta"     =>"required|integer"
    ];

    $mensajes=[
        "required"=>"El campo es Obligatorio",
        "string"  =>"El campo debe incluir letras, numeros y simbolos",
        "min"     =>"El campo debe contener al menos :min caracteres",
        "max"     =>"El maximo de caracteres es :max",
        "integer" =>"El campo debe se un numero",
    ];

    $this->validate($form, $reglas, $mensajes);



    
     //saber tipo correcto
     switch ($form['category']) {
        
        case '1':
            $resp_tipo='arte';
            break;

        case '2':
            $resp_tipo='ciencia';
            break;

        case '3':
            $resp_tipo='cultura';
            break;

        case '4':
            $resp_tipo='deporte';
            break;
    
        case '5':
            $resp_tipo='entretenimiento';
            break;
    
        case '6':
            $resp_tipo='farandula';
            break;

        case '7':
            $resp_tipo='gastronomia';
            break;
        
        case '8':
            $resp_tipo='historia';
            break;
        
            
    }

    //saber respuesta correcta
    switch ($form['correcta']) {
        
        case '1':
            $resp_correcta=$form['resp_1'];
            break;

        case '2':
            $resp_correcta=$form['resp_2'];
            break;

        case '3':
            $resp_correcta=$form['resp_3'];
            break;
            
    }
    
    $hola=DB::table('questions')->updateOrInsert(
        ['pregunta' => $form['pregunta'],
         'category_id' =>$form['category'],
         'respuesta1' => $form['resp_1'],
         'respuesta2' => $form['resp_2'],
         'respuesta3' => $form['resp_3'],
         'resp_correcta' =>$resp_correcta,
         'tipo' => $resp_tipo,
         'user_id'=>$form['user_id']
        ]);
    
    return redirect('home/admin');
}

//trae pregunta random    
public function baja(Request $form){
    $cat=$form['categoryBusqueda'];
    $preguntas= DB::table('questions')->where('category_id','=',"$cat")->get();
   
    return view('preguntas',compact('preguntas'));

}

public function editar(Request $form){
    $id=$form['id'];
    $dato=DB::table('questions')->where('id','=',"$id")->get();
    
    return view('editar',compact('dato'));
}


public function edit(Request $form){
    $id=$form['id'];
    DB::table('questions')->where('id','=',"$id")
                        ->update(['pregunta'=>$form['pregunta'],
                                  'respuesta1'=>$form['respuesta1'],
                                  'respuesta2'=>$form['respuesta2'],
                                  'respuesta3'=>$form['respuesta3']  
                        ]);
    return redirect('home/admin');
}


public function borrar(Request $form){
    $id=$form['id'];
    DB::table('questions')->where('id','=',"$id")->delete();
    return redirect('home');
}


//trae pregunta por tipo
public function pregunta(Request $tipo){
    $pregunta= DB::table('questions')->where('category_id','=',$tipo['category'])->get();
    dd($pregunta);

}



}
