@extends('layouts.layout')


@section('tittle')
    HOME
@endsection

@section('principal')

  <section class="about-wise">
    
    <h2 class="text-center section-tittle">¿QUE ES WISE GAME?</h2>
    <p class="text-center section-tittle col-12">
        WISE GAME es un juego de preguntas y respuestas donde podras demostrar que eres el mejor en las amplias tematicas que te ofrece. 
    </p><p class="text-center section-tittle col-12"> 
        Logeate y demuestra en el ranking que tus conocimientos generales te convierten no solo en el mejor de tus amigos, sino de todo el mundo.
    </p>

    <div id="carouselExampleIndicators" class="carousel slide w-50 mx-auto d-none d-md-block  mb-2" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 rounded" src="{{asset('images/wisegame1.png')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block bg">
              <h5 class="text-white">Divertido</h5>
              <p class="text-white">Es una forma de entretenimiento con amigos y familiares.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 rounded" src="{{asset('images/wisegame1.png')}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block bg">
              <h5 class="text-white">Didáctico</h5>
              <p class="text-white">Aprenderás distintas temáticas y te convertiras en experto!!.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 rounded" src="{{asset('images/wisegame1.png')}}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block bg">
              <h5 class="text-white">Competitivo</h5>
              <p class="text-white">Arma tu perfil en nuestro sitio y empieza a ser primero en el Ranking.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div> <!-- fin carrusel-->

    <section class="tematicas">
      <div class="contenedor">
          <h2 class="titulo">Tematicas que encontrarás en Wise Game:</h2>
          <div class="galeria-port">
              <div class="imagen-port col-md-3 col-12 mx-0 p-0">
                  <img src="{{asset('images/ciencia.jpg')}}" alt="">
                  <div class="hover-galeria">
                      <img src="{{asset('images/icono1.png')}}" alt="">
                      <p>ciencias</p>
                  </div>
              </div>
              <div class="imagen-port col-md-3 col-12 mx-0 p-0">
                  <img src="{{asset('images/Cultura.png')}}" alt="">
                  <div class="hover-galeria">
                      <img src="{{asset('images/icono1.png')}}" alt="">
                      <p>Cultura</p>
                  </div>
              </div>
              <div class="imagen-port col-md-3 col-12 mx-0 p-0">
                  <img src="{{asset('images/entretenimiento.jpg')}}" alt="">
                  <div class="hover-galeria">
                      <img src="{{asset('images/icono1.png')}}" alt="">
                      <p>Entretenimiento</p>
                  </div>
              </div>
              <div class="imagen-port col-md-3 col-12 mx-0 p-0">
                  <img src="{{asset('images/gastronomia.jpg')}}" alt="">
                  <div class="hover-galeria">
                      <img src="{{asset('images/icono1.png')}}" alt="">
                      <p>Gastronomia</p>
                  </div>
              </div>
              <div class="imagen-port col-md-3 col-12 mx-0 p-0">
                  <img src="{{asset('images/deportes.jpg')}}" alt="">
                  <div class="hover-galeria">
                      <img src="{{asset('images/icono1.png')}}" alt="">
                      <p>Deportes</p>
                  </div>
              </div>
              <div class="imagen-port col-md-3 col-12 mx-0 p-0">
                  <img src="{{asset('images/historia.jpg')}}" alt="">
                  <div class="hover-galeria">
                      <img src="{{asset('images/icono1.png')}}" alt="">
                      <p>Historia</p>
                  </div>
              </div>
              <div class="imagen-port col-md-3 col-12 mx-0 p-0">
                  <img src="{{asset('images/art.jpeg')}}" alt="">
                  <div class="hover-galeria">
                      <img src="{{asset('images/icono1.png')}}" alt="">
                      <p>Arte</p>
                  </div>
              </div>
              <div class="imagen-port col-md-3 col-12 mx-0 p-0">
                  <img src="{{asset('images/farandula.jpg')}}" alt="">
                  <div class="hover-galeria">
                      <img src="{{asset('images/icono1.png')}}" alt="">
                      <p>Farandula</p>
                  </div>
              </div>
          </div>
      </div>
    </section><!-- fin tematicas-->

    <div class="col text-center">
      <a class="btn btn-lg boton d-inline-flex mb-2" href="{{url('/home/play')}}">JUGUEMOS</a>
    </div>
    
  </section><!-- fin about-wise-->

  <h2 class="text-center titulo">Mejores Usuarios</h2>
  <div class="mejores mb-2 d-md-flex justify-content-around">
    
    
    <div class="card col-12 col-md-3">
      <img class="card-img-top" src="{{asset('images/Melina.suarez15.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h3 class="card-text text-center">1°</h3>
        <h5 class="card-title card-text">Cosme_Fulanito</h5>
        <p class="card-text">Total:</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item card-text">Arte:</li>
        <li class="list-group-item card-text">Ciencia:</li>
        <li class="list-group-item card-text">Cultura:</li>
        <li class="list-group-item card-text">Deporte:</li>
        <li class="list-group-item card-text">Entretenimiento:</li>
        <li class="list-group-item card-text">Farandula:</li>
        <li class="list-group-item card-text">Gastronomia:</li>
        <li class="list-group-item card-text">Historia:</li>
      </ul>
    </div>

    <div class="card col-12 col-md-3">
      <img class="card-img-top" src="{{asset('images/Melina.suarez15.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h3 class="card-text text-center">2°</h3>
        <h5 class="card-title card-text">Cosme_Fulanito</h5>
        <p class="card-text">Total:</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item card-text">Arte:</li>
        <li class="list-group-item card-text">Ciencia:</li>
        <li class="list-group-item card-text">Cultura:</li>
        <li class="list-group-item card-text">Deporte:</li>
        <li class="list-group-item card-text">Entretenimiento:</li>
        <li class="list-group-item card-text">Farandula:</li>
        <li class="list-group-item card-text">Gastronomia:</li>
        <li class="list-group-item card-text">Historia:</li>
      </ul>
    </div>

    <div class="card col-12 col-md-3">
      <img class="card-img-top" src="{{asset('images/Melina.suarez15.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h3 class="card-text text-center">3°</h3>
        <h5 class="card-title card-text">Cosme_Fulanito</h5>
        <p class="card-text">Total:</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item card-text">Arte:</li>
        <li class="list-group-item card-text">Ciencia:</li>
        <li class="list-group-item card-text">Cultura:</li>
        <li class="list-group-item card-text">Deporte:</li>
        <li class="list-group-item card-text">Entretenimiento:</li>
        <li class="list-group-item card-text">Farandula:</li>
        <li class="list-group-item card-text">Gastronomia:</li>
        <li class="list-group-item card-text">Historia:</li>
      </ul>
    </div>
  </div><!-- fin mejores-->
@endsection



<!--
/*
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
  




</div>
@endsection*/
-->