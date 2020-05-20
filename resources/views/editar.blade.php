@extends('layouts.layout')
@section('tittle')
    EDITAR
@endsection

@section('principal')
    @forelse ($dato as $item)
        <div class="col-8 offset-2" style="color:rgb(37, 72, 142);">
            
            <form action="{{url('home/editar/pregunta')}}" method="POST">
                @csrf
                    <div class="form-group">
                    <label for="exampleInputEmail1">PREGUNTA</label>
                    <input type="text" class="form-control @error('pregunta') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$item->pregunta}}" name="pregunta" required value="{{$item->pregunta}}">
                        @error('pregunta')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">RESPUESTA1</label>
                        <input type="text" class="form-control @error('respuesta1') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$item->respuesta1}}" name="respuesta1" required value="{{$item->respuesta1}}">
                        @error('respuesta1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">RESPUESTA2</label>
                        <input type="text" class="form-control @error('respuesta2') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$item->respuesta2}}" name="respuesta2" required value="{{$item->respuesta2}}">
                        @error('respuesta2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">RESPUESTA3</label>
                        <input type="text" class="form-control @error('respuesta3') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$item->respuesta3}}" name="respuesta3" required value="{{ $item->respuesta3 }}">
                        @error('respuesta3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>  

                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id" value="{{$item->id}}">
                    </div>

                    <div class="col text-center">
                        <button type="submit text-center" class="btn boton mb-2">Editar</button>
                    </div>
            </form>
        </div>
        
    @empty
    <h3>no hay</h3>
    @endforelse

@endsection