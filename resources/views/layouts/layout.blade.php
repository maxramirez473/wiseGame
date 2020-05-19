<!DOCTYPE html>
<html lang="en">
<head>
    <!-- rutas css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{asset('images/wisegame.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('tittle') </title> <!-- titulo de la pagina-->
</head>

<body>
<div class="container-fluid ">

    <header>
        <a name="top-page"></a>    <!-- Ancla tope de página -->  
        
        <nav class="navbar navbar-expand-lg navbar-light ">

          <a class="navbar-brand nav-link" href="{{ url('/') }}">
            {{ config('app.name', 'WISEGAME') }}
          </a>

          <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse mb-lg-4 mb-0" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto"> <!-- ml-auto, derecha-->
              <li class="nav-item mx-auto mx-lg-2">
                <a class="nav-link p-1" href="{{url('/home')}}">HOME</a>
              </li>
              
              <li class="nav-item mx-auto mx-lg-2">
                <a class="nav-link p-1" href="{{url('/home/faqs')}}">FAQs</a>
              </li>
              
              <li class="nav-item mx-auto mx-lg-2">
                  <a class="nav-link  p-1" href="{{url('/home/ranking')}}">RANKING</a>
              </li>
              <li class="nav-item dropdown mx-auto mx-lg-2">
                <a class="nav-link dropdown-toggle  p-1" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  User Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item  my-0" href="{{url('/home/perfil')}}">PERFIL</a>
                  /*<a class="dropdown-item  my-0" href="#">Another action</a>
                  <a class="dropdown-item  my-0" href="#">Something else here</a>*/
                </div>
              </li>
            </ul>
          </div>
      </nav> <!-- fin navbar-->



        <div class="wave" style="height: 150px; overflow: hidden;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg>
        </div> <!--fin wave -->
        
        <section class="textos-header mt-lg-5">
            <h1 class="super-tittle mt-0">Wise Game</h1>
            <h2 class="tittle"> @yield('tittle')</h2>
        </section>
    </header> <!-- fin header-->
    
    <div class="container"> 
      <nav class="fixed-bottom p-3 row justify-content-end">
        <a role="button" class="btn btn-primary top-button" href="#top-page">INICIO</a>
      </nav>
    </div> <!-- boton flotante-->

    <main>
      @yield('principal')
    </main>


    <footer class="text-center pb-1">
      <div class="contenedor-footer">
        <div class="content-foo">
            <h4 class="d-md-inline">Phone: <p class="d-md-inline">+5494226-2540</p></h4>
            
        </div>
        <div class="content-foo">
            <h4 class="d-md-inline">Email: <p class="d-md-inline">wisegame.com.ar</p></h4>
            
        </div>
        <div class="content-foo">
            <h4 class="d-md-inline">Location: <p class="d-md-inline">Buenos Aires, Argentina</p></h4>
            
        </div>
    </div>
    <h2 class="titulo-final mt-2 mb-0 pb-0">&copy; WISE GAME | Copyright </h2>


    </footer>


</div><!-- end container fluid-->
   
<!-- scripts js bootstrap-->
<script type="text/javascript" src="{{asset('js/popper.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}" ></script>

<!-- arreglo input type file label-->
<script type="application/javascript">
  $('input[type="file"]').change(function(e){
      var fileName = e.target.files[0].name;
      $('.custom-file-label').html(fileName);
  });
</script>

</body>
</html>