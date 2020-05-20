@extends('layouts.layout')
@section('tittle')
    ADMISNISTRACION
@endsection

@section('principal')

    <div style="border: 1px solid rgb(37, 72, 142);" class="mb-2">
        <h3 style="text-align: center; color:rgb(37, 72, 142);">AGREGAR PREGUNTAS</h3>
        <form class="col-8 mx-auto p-2" action="{{url('home/admin/agregar')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">PREGUNTA</label>
              <input type="text" class="form-control @error('pregunta') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No olvide agregar los signos de pregunta" name="pregunta" required value="{{ old('pregunta') }}">
                @error('pregunta')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
              <label for="resp1">Respuesta  N°1</label>
              <input type="text" class="form-control @error('resp_1') is-invalid @enderror" id="resp1" placeholder="Respuesta 1" name="resp_1" required value="{{ old('resp_1') }}">
                @error('resp_1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="resp2">Respuesta  N°2</label>
                <input type="text" class="form-control @error('resp_2') is-invalid @enderror" id="resp2" placeholder="Respuesta 2" name="resp_2" required value="{{ old('resp_2') }}">
                @error('resp_2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="resp3">Respuesta  N°3</label>
                <input type="text" class="form-control @error('resp_3') is-invalid @enderror" id="resp3" placeholder="Respuesta 3" name="resp_3" required value="{{ old('resp_3') }}">
                @error('resp_3')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
            </div>
            <div class="form-group">
                <label for="correcta">Respuesta Correcta</label>
                <select class="custom-select custom-select-sm" name="correcta" required>
                    <option selected>--Seleccione una pregunta--</option>
                    <option value="1" class="dropdown-item">Respuesta N°1</option>
                    <option value="2" class="dropdown-item">Respuesta N°2</option>
                    <option value="3" class="dropdown-item">Respuesta N°3</option>
                </select>
                
            </div>

            <div class="form-group p-2">
                <select class="custom-select custom-select-sm" name="category" required>
                  <option selected>--Seleccione una categoria--</option>
                  <option value="1" class="dropdown-item">Arte</option>
                  <option value="2" class="dropdown-item">Ciencia</option>
                  <option value="3" class="dropdown-item">Cultura</option>
                  <option value="4" class="dropdown-item">Deporte</option>
                  <option value="5" class="dropdown-item">Entretenimiento</option>
                  <option value="6" class="dropdown-item">Farandula</option>
                  <option value="7" class="dropdown-item">Gastronomia</option>
                  <option value="8" class="dropdown-item">Historia</option>
                </select>
            </div>

            <div class="form-group">
                <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
            </div>
            
            <div class="col text-center">
                <button type="submit text-center" class="btn btn-primary">Agregar</button>
            </div>
          </form>
    </div>

    <div class="baja mb-2" style="border: 1px solid rgb(37, 72, 142);">
        <form action="{{url('home/admin/darBaja')}}" method="POST" class="col-8 mx-auto p-2">
            @csrf
            <div class="form-group p-2">
                <h3 style="text-align: center; color:rgb(37, 72, 142);">Buscar por categoria</h3>
                <select class="custom-select custom-select-sm" name="categoryBusqueda" required>
                  <option selected>--Seleccione una categoria--</option>
                  <option value="1" class="dropdown-item">Arte</option>
                  <option value="2" class="dropdown-item">Ciencia</option>
                  <option value="3" class="dropdown-item">Cultura</option>
                  <option value="4" class="dropdown-item">Deporte</option>
                  <option value="5" class="dropdown-item">Entretenimiento</option>
                  <option value="6" class="dropdown-item">Farandula</option>
                  <option value="7" class="dropdown-item">Gastronomia</option>
                  <option value="8" class="dropdown-item">Historia</option>
                </select>
            </div>


            <div class="col text-center">
                <button type="submit text-center" class="btn btn-primary">Buscar</button>
            </div>
        </form>
    </div> 

  
    

@endsection