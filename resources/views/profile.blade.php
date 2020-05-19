@extends('layouts.layout')
@section('tittle')
    PERFIL
@endsection

@section('principal')
    
    <div class="perfil w-80 d-md-flex justify-content-between mx-auto border rounded p-3 mb-3">
        <div class="card col-12 col-md-6 mr-md-2">
            <img class="card-img-top w-50 mx-auto mt-2 rounded" src="/storage/imagenesUsuarios/{{Auth::user()->avatar}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-center" style="color:rgb(37, 72, 142)"> Alias: {{Auth::user()->alias}}</h5>
              <h6 class="card-title text-center" style="color:rgb(37, 72, 142)"> Nombre: {{Auth::user()->name}}</h5>
              <h6 class="card-title text-center" style="color:rgb(37, 72, 142)"> Email: {{Auth::user()->email}}</h5>
            </div>
        </div>

        <div class="dropdown col-12 col-md-6 ml-md-2 mt-2 mt-md-0">
            <button class="btn boton dropdown-toggle btn-lg col-12" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Editar Perfil
            </button>
            <div class="dropdown-menu">
                <form class="px-4 py-3" action="#">
                  <div class="form-group">
                    <label for="exampleDropdownFormEmail1">Editar Email</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                  </div>
                  <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Editar Contraseña</label>
                    <input type="password" class="form-control p-1" id="exampleDropdownFormPassword1" placeholder="Actual">
                    <input type="password" class="form-control mt-1 p-1" id="exampleDropdownFormPassword1" placeholder="Nueva">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Editar Imagen</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                  <button type="submit" class="btn boton">Editar</button>
                </form>
            </div>
        </div>

        <div class="perfil-datos">

        </div>



    </div>


@endsection