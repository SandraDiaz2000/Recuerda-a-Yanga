
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    

   <link rel="stylesheet" href="https://use.fontawesome.com"> 
    <link href="/css/main.css" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"> </script>
   
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<link href="/css/main.css" rel="stylesheet">
    <title>Inicio</title>
    @laravelPWA

  </head>
  <body>
<!-- Image and text -->
@extends('layouts.navbar')

@section('content')
<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #eb9836;">
<a class="navbar-brand" href="#">
      <img src="\img\l.jpg" width="66px" height="72px" class="d-inline-block align-top-center" alt="LOGO" href="{{ url('/welcome') }}" style="position:absolute;top:0px;left:0px;">
</nav>

@endsection
<br><br><br>
    <h2 class="text-warning">¡Conoce Yanga!</h2>

    
 <div id="myCarousel" class="carousel slide bg-inverse w-100  ms-auto me-auto" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="\img\parw.jpg" alt="First slide"style=" width:100%; height: 520px !important;">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\img\fp\yanga (40).jpg" alt="Second slide"style=" width:100%; height: 520px !important;">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\img\igles.jpg" alt="Third slide"style=" width:100%; height: 520px !important;">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<section id="gallery">
      <div class="container">
      <nav aria-label="breadcrumb" style="background-color: #125e39;padding: 5px;">
          <h3 class="text-align: center text-white">¿Sabías que...?</h3></li>    
      </nav>

        <div class="row">
        <div class="col-lg-4 mb-4">
        <div class="card h-100">
        <img src="\img\reloj.jpg" class="card-img-top" alt="Reloj" style="width: 348px; height:230px;"/>
        <div class="card-body" style="background-color: #eb9836;">
            <h5 class="card-title text-white">Nuestro reloj es diferente</h5>
            <p class="card-text text-white"style="text-align: justify;"> 
            El número 4 del reloj perteneciente a la iglesia de la cabecera municipal difiere de la presentación estándar de las caratulas, debido a que el número 
          aparece como IIII cuando en números romanos debería ser IV.
            </p>
          
          </div>
            </div>
            </div>
            <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <img src="\img\fp\yanga (8).jpg" alt="retablos" class="card-img-top" style="width: 348px; height:230px;">
                <div class="card-body" style="background-color: #eb9836;">
                  <h5 class="card-title text-white">Nuestros retablos son originales</h5>
                  <p class="card-text text-white" style="text-align: justify;">
                  El retablo perteneciente a la capilla de la ex Hacienda de la Concepción
                se ha conservado en apariencia intacto desde su colocación.
                </p>
                </div>
                </div>
              </div>
              <div class="col-lg-4 mb-4">
              <div class="card h-100">
              <img src="\img\nyc.jpg" class="card-img-top" alt="Palm Springs Road" style="width: 348px; height:230px;"/>

              <div class="card-body" style="background-color: #eb9836;">
                  <h5 class="card-title text-white">Somos sitio de memoria</h5>
                  <p class="card-text text-white" style="text-align: justify;">
                  Por la importancia histórica de San Jun de Ulúa como puerto de entrada de 
              miles de personas esclavizadas del continente africano y Yanga, como uno de 
              los primeros pueblos libres de africanos que huyeron de la esclavitud, ambos 
              lugares se consideran y fueron declarados sitios de memoria ante la UNESCO.
                  </p>
                
                </div>
              </div>
              </div>
            </div>
          </div>
</section>


<div class="cita" style="background-color: #125e39;">

  <div class="row">
  
        <div class="col-lg-6 mx-auto">
        <div class="card h-100">
      <div class="card-body">
      <p class="card-text" style="text-align: justify;">"Todos los pueblos tienen su historia más o menos interesante, pero la del nuestro la considero de tanto interés histórico, que no solo los que hemos nacido en él debemos conocerla, sino todos los mexicanos, pues nuestro pueblo nació de un episodio  que principió en las selvas africanas y terminó en las montañas veracruzanas "</p>
      </p>

        <small class="text-muted">
          Leonardo Ferrandon en <cite title="Source Title">Mis recuerdos, apuntes históricos de mi pueblo recordando al Yanga</cite>
        </small>
      </footer>

      </div>
      <div class="card-footer">
      </div>
    </div>
        </div>
  </div>
</div>


<div id="myCarousel" class="carousel slide bg-inverse w-100  ms-auto me-auto" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="\img\igle.jpg" alt="First slide"style=" width:100%; height: 500px !important;">
      
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\img\fp\yanga (15).jpg" alt="Second slide"style=" width:100%; height: 500px !important;">
     
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\img\fp\yanga (6).jpg" alt="Third slide"style=" width:100%; height: 500px !important;">

    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\img\sunsey.jpg" alt="Fourth slide"style=" width:100%; height: 500px !important;">

    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>


<!-- Footer -->
@extends('layouts.footer')

@section('content')
<footer class=" text-center text-white" style="background-color:#eb9836;">
</footer>
@endsection
<!-- Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
 