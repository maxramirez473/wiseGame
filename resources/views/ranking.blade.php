@extends('layouts.layout')

@section('tittle')
    RANKING
@endsection

@section('principal')
    
<div class="table-responsive-md">
    <table class="table table-light table-hover">
      
      <!-- table-hover=>efecto hover por filas-->
      <!-- table sm=> tabla compactada-->
      <!-- table-responsive=>agrega scroll horizontal para dispositivos pequeños-->
      <!-- dark=>cambio color contraste-->
      <!-- table-striped=>filas dif colores-->
      <thead class="thead-"><!-- thead-light=>suave/dark=>oscuro-->
        <th>nombre</th>
        <th>arte</th>
        <th>ciencia</th>
        <th>cultura</th>
        <th>deporte</th>
        <th>entretenimiento</th>
        <th>farandula</th>
        <th>gastronomia</th>
        <th>historia</th>
        <th>total</th>
      </thead>
      <tr>
      <!-- table-active=>resalta fila activa-->
      <!-- table-info=>resalta fila celeste-->
      <!-- table-sucess=>resalta fila verde-->
      <!-- table-warning=>resalta fila amarillo-->
      <!-- table-danger=>resalta fila rojo-->
      <!-- table-primary=>resalta fila azul-->
      <!-- table-light=>resalta fila celeste claro-->
      <!-- table-secondary=>resalta fila gris-->

      <!-- PARA TABLE-DARK Y HOVER-->
      <!-- bg-primary=>azul-->
      <!-- bg-success=>verde-->
      <!-- bg-warning=>amarillo-->
      <!-- bg-info=>celeste-->
      <!-- DEMAS APLICAN IGUAL-->
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>

  </div>


@endsection