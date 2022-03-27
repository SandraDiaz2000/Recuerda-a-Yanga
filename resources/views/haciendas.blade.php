<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="/css/main.css" rel="stylesheet">

    <title>Ex-Haciendas</title>
    @laravelPWA

  </head>
  <body>
<!-- Image and text -->
@extends('layouts.navbar')

@section('content')
<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #eb9836;">
    </nav>

@endsection
<br>    
  <section id="gallery">
    <div class="container">

       <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <img src="\img\haciendas\concha.jpg" class="card-img-top" alt="Reloj" style="width: 348px; height:350px;"/>
              <div class="card-body" style="background-color: #125e39;">
              <h5 class="card-title text-white">Nuestra Señora de la Concepción</h5>
              <p class="card-text text-white"style="text-align: justify;"> 
                Fundada en 1690, fue la primera hacienda...
                <p class="text-center"class="text-center"><a class="btn " href="{{ url('/Haciendas/La-Concepcion') }}" role="button" style="background: white;">Ver más &raquo;</a></p>
                <br>
              </p>
              </div>
              </div>
              </div>
              <div class="col-lg-4 mb-4">
              <div class="card h-100">
                  <img src="\img\haciendas\rosario.png" alt="retablos" class="card-img-top" style="width: 348px; height:350px;">
                  <div class="card-body" style="background-color: #125e39;">
                  <h5 class="card-title text-white">Nuestra Señora del Rosario</h5>
                  <p class="card-text text-white" style="text-align: justify;">
                    Fue fundada en 1691...
                  <p class="text-center"class="text-center"><a class="btn " href="{{ url('/Haciendas/Señora-del-Rosario') }}" role="button" style="background: white;">Ver más &raquo;</a></p>

                </p>
                </div>
              </div>
            </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                    <img src="\img\haciendas\sanpaco.jpg" class="card-img-top" alt="Palm Springs Road" style="width: 348px; height:350px;"/>

                    <div class="card-body" style="background-color: #125e39;">
                        <h5 class="card-title text-white">San Francisco Las Mesillas</h5>
                        <p class="card-text text-white" style="text-align: justify;">
                        Fundada en 1692..
                    <p class="text-center"class="text-center"><a class="btn " href="{{ url('/Haciendas/Francisco-Mesillas') }}" role="button" style="background: white;">Ver más &raquo;</a></p>
     
                  </p>
                  
                  </div>
                </div>
                </div>
        </div>

        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <img src="\img\haciendas\miguel.jpg" class="card-img-top" alt="Reloj" style="width: 348px; height:350px;"/>
              <div class="card-body" style="background-color: #125e39;">
              <h5 class="card-title text-white">San Miguel El Grande</h5>
                <p class="card-text text-white"style="text-align: justify;"> 
                  La hacienda fue fundada en 1693...
                <p class="text-center"class="text-center"><a class="btn " href="{{ url('/Haciendas/San-Miguel-Grande') }}" role="button" style="background: white;">Ver más &raquo;</a></p>
              </p>
              </div>
              </div>
              </div>
              <div class="col-lg-4 mb-4">
              <div class="card h-100">
                  <img src="\img\haciendas\santacru.png" alt="retablos" class="card-img-top" style="width: 348px; height:350px;">
                  <div class="card-body" style="background-color: #125e39;">
                  <h5 class="card-title text-white">Santa Cruz de las Palmillas</h5>
                  <p class="card-text text-white" style="text-align: justify;">
                    Fue fundada en 1724...
                  <p class="text-center"class="text-center"><a class="btn " href="{{ url('/Haciendas/Santa-Cruz') }}" role="button" style="background: white;">Ver más &raquo;</a></p>
                  </p>
                </div>
              </div>
            </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                    <img src="\img\haciendas\corra.jpg" class="card-img-top" alt="Palm Springs Road" style="width: 348px; height:350px;"/>
                    <div class="card-body"  style="background-color: #125e39;">
                    <h5 class="card-title text-white">San José del Corral</h5>
                        <p class="card-text text-white" style="text-align: justify;">
                        Fundada en 1760...
                    <p class="text-center"class="text-center"><a class="btn " href="{{ url('/Haciendas/San-Jose-Corral') }}" role="button" style="background: white;">Ver más &raquo;</a></p>    
                  </p>
                  
                  </div>
                </div>
                </div>
        </div>

        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <img src="\img\haciendas\JSOE-ABAJO_6x.jpg" class="card-img-top" alt="Reloj" style="width: 348px; height:350px;"/>
              <div class="card-body" style="background-color: #125e39;">
              <h5 class="card-title text-white">San José de Abajo</h5>
              <p class="card-text text-white"style="text-align: justify;"> 
                  Fue fundada en 1693
                <p class="text-center"class="text-center"><a class="btn " href="{{ url('/Haciendas/San-Jose-Abajo') }}" role="button" style="background: white;">Ver más &raquo;</a></p>
                </p>
              </div>
              </div>
              </div>
              <div class="col-lg-4 mb-4">
              <div class="card h-100">
                  <img src="\img\fp\yanga (12).jpg" alt="retablos" class="card-img-top" style="width: 348px; height:350px;">
                  <div class="card-body" style="background-color: #125e39;">
                    <h5 class="card-title text-white">San Joaquin</h5>
                    <p class="card-text text-white" style="text-align: justify;">
                    Fundada en 1723...
                  </p>
                  <p class="text-center"class="text-center"><a class="btn " href="{{ url('/Haciendas/San-Joaquin') }}" role="button" style="background: white;">Ver más &raquo;</a></p>
                </div>
              </div>
            </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                    <img src="\img\haciendas\con-pal1.png" class="card-img-top" alt="Palm Springs Road" style="width: 348px; height:350px;"/>

                    <div class="card-body" style="background-color: #125e39;">
                    <h5 class="card-title text-white">Concepción de las Palmillas</h5>
                    <p class="card-text text-white" style="text-align: justify;">
                        Fue la hacienda más reciente, fue fundada en 1841...
                        </p>
                        <p class="text-center"class="text-center"><a class="btn " href="{{ url('/Haciendas/Concepcion-Palmillas') }}" role="button" style="background: white;">Ver más &raquo;</a></p>
                  </div>
                </div>
                </div>
        </div>
    </div>

    
</section>






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
  </body>
</html>