@extends('layouts.layout')
@section('tittle')
    ADMISNISTRACION-PREGUNTAS
@endsection

@section('principal')

   <div class="text-center" style="color: rgb(37, 72, 142);">
    <h1>Listado de Preguntas</h1>
    @forelse ($preguntas as $item)
        <hr >
        <h4>Pregunta: {{$item->pregunta}}</h4>
        <h5>Respuesta N°1: {{$item->respuesta1}}</h5>
        <h5>Respuesta N°2: {{$item->respuesta2}}</h5>
        <h5>Respuesta N°3: {{$item->respuesta3}}</h5>
        <h5>Respuesta Correcta: {{$item->resp_correcta}}</h5>
        <div class="row d-flex justify-content-center">
            <a href="{{url('home/borrar')}}" onclick="event.preventDefault(); document.getElementById('borrar').submit();" class="btn boton ml-1 ">Borrar</a>
            <a href="{{url('home/editar')}}" onclick="event.preventDefault(); document.getElementById('editar').submit();" class="btn boton mx-1 ">Editar</a>
        
            <form id="borrar" action="{{url('home/borrar')}}" method="POST" style="display: none;">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="{{$item->id}}">
                </div>
                @csrf
            </form>
            <form id="editar" action="{{url('home/editar')}}" method="POST" style="display: none;">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="{{$item->id}}">
                </div>
                @csrf
            </form>
        
        </div>
        <hr>
        <br> 

    @empty
        <h2>No hay preguntas para ese tipo!!!</h2>
    @endforelse


   </div>
    
@endsection