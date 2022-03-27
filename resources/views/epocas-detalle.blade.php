<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" href="https://use.fontawesome.com"> 
    <link href="/css/main.css" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>

    <title>Inicio</title>
    @laravelPWA

  </head>
  <body>

 
<!-- NAVBAR -->

<nav class="navbar navbar-inverse bg-inverse" style="background-color: #eb9836;">
  <a class="navbar-brand text-white">
    <img src="\img\l.jpg" width="62px" height="71px" class="d-inline-block align-top-center" alt="LOGO" href="{{ url('/inicio') }}" style="position:absolute;top:0px"
>
<p class="align-top-center text-white-bold" style="padding-left: 70px"> Recuerda Yanga</p>
</a>
  <div class="navbar nav">
  <a class="nav-item nav-link active text-white" href="{{ url('/inicio') }}">Inicio <span class="sr-only"></span></a>
      <a class="nav-item nav-link active text-white"  href="{{ url('/epocas') }}">Épocas</a>
      <a class="nav-item nav-link active text-white" href="{{ url('/figuras') }}">Figuras históricas</a>
      <a class="nav-item nav-link active text-white" href="{{ url('/comunidades') }}">Comunidades</a>
      <a class="nav-item nav-link active text-white" href="{{ url('/leyendas') }}">Leyendas</a>
      <a class="nav-item nav-link active text-white" href="{{ url('/galeria') }}">Galeria</a>
  </div>
</nav>

    <h2 class="text-warning">¡Conoce Yanga!</h2>

 <div id="myCarousel" class="carousel slide bg-inverse w-100  ms-auto me-auto" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="\img\fp\yanga (55).jpg" alt="First slide"style=" width:100%; height: 520px !important;">
      <div class="carousel-caption">
        <h3>First slide</h3>
        <p>This is the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\img\fp\yanga (8).jpg" alt="Second slide"style=" width:100%; height: 520px !important;">
      <div class="carousel-caption">
        <h3>Second slide</h3>
        <p>This is the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\img\fp\yanga (13).jpg" alt="Third slide"style=" width:100%; height: 520px !important;">
      <div class="carousel-caption">
        <h3>Third slide</h3>
        <p>This is the third slide.</p>
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

  <ol class="breadcrumb" style="background-color: #eb9836;">
    <li class="breadcrumb-item active text-white" aria-current="page"><h3>¿Sabías qué...?</h3></li>
  </ol>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="\img\fp\yanga (55).jpg" class="card-img-top" alt="Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Nuestro reloj es diferente</h5>
        <p class="card-text">
          This is a wider card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
      <div class="card-footer">
       </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="\img\fp\yanga (8).jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Nuestros retablos</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="\img\fp\yanga (47).jpg" class="card-img-top" alt="Palm Springs Road"/>
      <div class="card-body">
        <h5 class="card-title">Somos sitios de memoria</h5>
        <p class="card-text">
          This is a wider card with supporting text below as a natural lead-in to
          additional content. This card has even longer content than the first to show
          that equal height action.
        </p>
      </div>
      <div class="card-footer">
      </div>
    </div>
  </div>
</div>

<div class="cita" style="background-color: #125e39; heigh:80%;">
  <div class="row row-cols-1 row-cols-md-1 g-4">
  <br>
    <br><br>
    <br>
  <div class="col">
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
<br><br>

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


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style=" width:100%; height: 500px !important;">
      <img class="d-block w-100" src="\img\fp\yanga (12).jpg" alt="First slide">
    </div>
    <div class="carousel-item" style=" width:100%; height: 500px !important;">
      <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2022/01/10/18/09/budapest-6928973_960_720.jpg" alt="Second slide">
    </div>
    <div class="carousel-item" style=" width:100%; height: 500px !important;">
      <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2018/02/04/21/13/monastery-3130879_960_720.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Footer -->
<footer class=" text-center text-white" style="background-color:#eb9836;">
<!-- Grid container -->
<div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 >Recuerda 
        <br>  
        Yanga</h5>
        
        <p>
        Ayuntamiento de Yanga 
        </p>
        <br>
        <p>
        ¡Reviviendo nuestras tradiciones!
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5>Síguenos en redes sociales</h5>
             
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="center">
  <div id="social-test">
  <p class="credits">Yanga<br>
  <div class="social-buttons">
  <a href="https://www.facebook.com/AyuntamientoYanga" ><i class="fa fa-facebook text-white" aria-hidden="true"></i></a> 
   <a href="https://instagram.com/"><i class="fa fa-instagram text-white" aria-hidden="true"></i></a>
    <a href="https://www.facebook.com/YangaTurismo/"><i class="fa fa-facebook text-white" aria-hidden="true"></a></i>
    <a href="mailto:ayuntamientoyanga22.25@gmail.com"><i class="fa fa-envelope text-white" aria-hidden="true"></i></a>
    </div>
    <br>¡Siempre contigo!</p>
  </div>
</div>



      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
    <div class="text-center p-3">
    © 2022 Copyright
  </div>
  </div>
  <img
        src="\img\foot.jpg"
        style=" width:100%; height: 100px !important;"
  />
</footer>
<!-- Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>