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

    <title>Figuras históricas</title>
    @laravelPWA

  </head>
  <body>
<!-- Image and text -->
@extends('layouts.navbar')

@section('content')
<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #eb9836;">
    </nav>

@endsection


    <h2 class="text-warning">¡Conoce Yanga!</h2>

    <section id="gallery">
      <div class="container">
         <div class="row">
                <div class="col-lg-4 mb-4">
                <div class="card h-100">
                <img src="\img\yanga.jpeg" class="card-img-top" alt="Reloj" style="width: 348px; height:350px;"/>
                <div class="card-body" style="background-color: #eb9836;">
                    <h5 class="card-title text-white"> Ñyanga</h5>
                    <p class="card-text text-white"style="text-align: justify;"> 
                    Precursor de los Derechos Humanos afroamericanos y fundador del pueblo.
                    </p>
                    <p class="text-center"><a class="btn text-white" href="{{ url('/figuras/yanga') }}" role="button" style="background: #A62424;">Ver más &raquo;</a></p>
                  </div>
                    </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="\img\figuras\lf.jpg" alt="retablos" class="card-img-top "  style="width: 348px; height:350px;">
                        <div class="card-body" style="background-color: #eb9836;">
                        <h5 class="card-title text-white">Leonardo Ferrandón Ovando</h5>
                          <p class="card-text text-white">Cronista patriarcal del pueblo y escritor del libro "Mis recuerdos: Yanga del ayer y hoy"</p>
                          <p class="text-center"><a class="btn text-white" href="{{ url('/figuras/leonardo-ferrandon') }}" role="button" style="background: #A62424;">Ver más &raquo;</a></p>

                        </div>
                        </div>
                      </div>
                      <div class="col-lg-4 mb-4">
                      <div class="card h-100">
                      <img src="\img\figuras\jdf.jpg" class="card-img-top" alt="Palm Springs Road" style="width: 348px; height:350px;"/>

                      <div class="card-body" style="background-color: #eb9836;">
                      <h5 class="card-title text-white">Julio de la Fuente</h5>
                <p class="card-text text-white">
                Antropólogo e ilustrador. Fue subdirector de Asuntos Indígenas de la SEP. 
                </p>
                <p class="text-center"><a class="btn text-white" href="{{ url('/figuras/Julio-de-la-Fuente') }}" role="button" style="background: #A62424;">Ver más &raquo;</a></p>

                        
                        </div>
                      </div>
                      </div>
        </div>
        

        <div class="row">
                <div class="col-lg-4 mb-4">
                <div class="card h-100">
                <img src="\img\figuras\ll.jpg" class="card-img-top" alt="Reloj" style="width: 348px; height:350px;"/>
                <div class="card-body" style="background-color: #eb9836;">
                <h5 class="card-title text-white">Lorenzo Luna Chávez</h5>
        <p class="card-text text-white">Luchador social y fundador del ejido Francisco Paz "El poblado".</p>
        <p class="text-center"><a class="btn text-white" href="{{ url('/figuras/lorenzo-luna') }}" role="button" style="background: #A62424;">Ver más &raquo;</a></p>

              </div>
                    </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="\img\figuras\pgf.jpg" alt="retablos" class="card-img-top" style="width: 348px; height:350px;">
                        <div class="card-body" style="background-color: #eb9836;">
                        <h5 class="card-title text-white">  Prócoro Hermenegildo González Fernández</h5>
                          <p class="card-text text-white">Autor del escudo de Yanga

                          </p>
                          <p class="text-center"><a class="btn text-white" href="{{ url('/figuras/procoro-gonzalez') }}" role="button" style="background: #A62424;">Ver más &raquo;</a></p>

                        </div>
                        </div>
                      </div>
                      <div class="col-lg-4 mb-4">
                      
                      </div>
                      </div>
        </div>
          </div>
</section>


<br>
<!-- Footer -->
@extends('layouts.footer')

@section('content')
<footer class=" text-center text-white" style="background-color:#eb9836;">
</footer>
@endsection
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