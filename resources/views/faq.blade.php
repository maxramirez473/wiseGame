@extends('layouts.layout')
@section('tittle')
    FAQs - Preguntas Frecuentes
@endsection

@section('principal')

    <div class="preguntas">
        <p class="d-flex justify-content-around">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">¿Pregunta?</button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">¿Pregunta?</button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">¿Pregunta?</button>
        </p>
        <div class="row mb-2">
            <div class="col">
              <div class="collapse" id="multiCollapseExample1">
                <div class="card card-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, unde quaerat velit accusantium laudantium esse ipsa, recusandae a, nisi mollitia alias omnis? Sit repellendus mollitia neque, labore accusamus excepturi tempore corporis veniam iusto aperiam aliquid cum eum, itaque adipisci est.
                </div>
              </div>
            </div>
            <div class="col">
              <div class="collapse" id="multiCollapseExample2">
                <div class="card card-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, unde quaerat velit accusantium laudantium esse ipsa, recusandae a, nisi mollitia alias omnis? Sit repellendus mollitia neque, labore accusamus excepturi tempore corporis veniam iusto aperiam aliquid cum eum, itaque adipisci est.
                </div>
              </div>
            </div>
            <div class="col">
                <div class="collapse" id="multiCollapseExample3">
                  <div class="card card-body">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, unde quaerat velit accusantium laudantium esse ipsa, recusandae a, nisi mollitia alias omnis? Sit repellendus mollitia neque, labore accusamus excepturi tempore corporis veniam iusto aperiam aliquid cum eum, itaque adipisci est. 
                  </div>
                </div>
            </div>
        </div>
    </div><!-- fin preguntas frecuentes-->

    <div class="mapa">
        <a name="donde-estamos"></a>    <!-- Ancla de 'donde estamos' -->
        <div class="google-maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4626.520027383228!2d-57.953372836557946!3d-34.92040798308901!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1573938453425!5m2!1ses!2sar" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <h6 class="text-center card-text my-2">La Plata, Argentina.</h6>
    </div><!-- iframe-->

    <form action="#" class="was-validated w-50 mx-auto ">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar email" name="email" required value="{{Auth::user()->email}}">
        <small id="emailHelp" class="form-text text-muted">Tu email jamas sera compartido</small>
      </div>  

      <div class="form-group mb-0">
        <label for="exampleFormControlFile1">Seleccionar Archivo</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
      
      <div class="form-group">
        <label for="exampleFormControlTextarea5"></label>
        <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" placeholder="comentario" required name="textarea"></textarea>
      </div>
      <button type="submit" class="btn boton mb-1">Submit</button>

    </form>
    
@endsection