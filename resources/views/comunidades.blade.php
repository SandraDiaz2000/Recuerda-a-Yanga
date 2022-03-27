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

    <title>Comunidades</title>
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

    
 <div id="myCarousel" class="carousel slide bg-inverse w-100  ms-auto me-auto" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="\img\IMG_7254.jpg" alt="First slide"style=" width:100%; height: 500px !important;">
      <div class="carousel-caption">
        <h3>Yanga</h3>
        <p>Sitio de Memoria.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\img\sunsey.jpg" alt="Second slide"style=" width:100%; height: 500px !important;">
      <div class="carousel-caption">
        <h3>Yanga</h3>
        <p>Tus hijos no te olvidan</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\img\suns.jpeg" alt="Third slide"style=" width:100%; height: 500px !important;">
      <div class="carousel-caption">
        <h3>Yanga</h3>
        <p>Recuerda tu historia.</p>
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
         <div class="row">
                <div class="col-lg-4 mb-4">
                <div class="card h-100">
                <img src="\img\comunidades\palm.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" style="width: 348px; height:350px;"/>
                <div class="card-body" style="background-color: #a62424;">
                  <h5 class="card-title text-white">Palmillas</h5>
                  <p class="card-text text-white">
                    Congregación
                  </p>
                  <p class="text-center"><a class="btn text-white" href="{{ url('/comunidades/Palmillas') }}" role="button" style="background: #eb9836;">Ver más &raquo;</a></p>
              </div>
                    </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                          <img src="\img\comunidades\mesillas.jpg" class="card-img-top" alt="Los Angeles Skyscrapers" style="width: 348px; height:350px;"/>
                        <div class="card-body"  style="background-color: #a62424;">
                        <h5 class="card-title text-white">Las Mesillas</h5>
                          <p class="card-text text-white">Congregación</p>
                          <p class="text-center"><a class="btn text-white" href="{{ url('/comunidades/Las-Mesillas') }}" role="button" style="background: #eb9836;">Ver más &raquo;</a></p>

                        </div>
                        </div>
                      </div>
                      <div class="col-lg-4 mb-4">
                      <div class="card h-100">
                      <img src="\img\comunidades\joa.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" style="width: 348px; height:350px;"/>
                      <div class="card-body" style="background-color: #a62424;">
                        <h5 class="card-title text-white">Gral. Alatriste</h5>
                        <p class="card-text text-white">
                          Congregación
                        </p>
                        <p class="text-center"><a class="btn text-white" href="{{ url('/comunidades/Gral-Alatriste') }}" role="button" style="background: #eb9836;">Ver más &raquo;</a></p>
                        </div>
                      </div>
                      </div>
        </div>
        
        <div class="row">
                <div class="col-lg-4 mb-4">
                <div class="card h-100">
                      <img src="\img\comunidades\concha.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" style="width: 348px; height:350px;"/>
                <div class="card-body"  style="background-color: #a62424;">
                <h5 class="card-title text-white">La Concepción</h5>
                  <p class="card-text text-white">Congregación</p>
                  <p class="text-center"><a class="btn text-white" href="{{ url('/comunidades/La-Concepcion') }}" role="button" style="background: #eb9836;">Ver más &raquo;</a></p>

              </div>
                    </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                    <img src="\img\comunidades\pobl.jpg" class="card-img-top" alt="Palm Springs Road" style="width: 348px; height:350px;"/>
                    <div class="card-body"  style="background-color: #a62424;">
                    <h5 class="card-title text-white">Gral. Francisco Paz</h5>
                      <p class="card-text text-white">Congregación</p>
                      <p class="text-center"><a class="btn text-white" href="{{ url('/comunidades/Gral-Francisco-Paz') }}" role="button" style="background: #eb9836;">Ver más &raquo;</a></p>

                        </div>
                        </div>
                      </div>
                      <div class="col-lg-4 mb-4">
                      <div class="card h-100">
                      <img src="\img\comunidades\cprral.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" style="width: 348px; height:350px;"/>
                      <div class="card-body" style="background-color: #a62424;">
                        <h5 class="card-title text-white">Gral. Juan José Baz</h5>
                        <p class="card-text text-white">
                          Congregación
                        </p>
                        <p class="text-center"><a class="btn text-white" href="{{ url('/comunidades/Gral-JJ-Baz') }}" role="button" style="background: #eb9836;">Ver más &raquo;</a></p>
                        </div>
                      </div>
                      </div>
                      </div>


                      <div class="row">
                <div class="col-lg-4 mb-4">
                <div class="card h-100">
                <img src="\img\comunidades\lomad.jpg" class="card-img-top" alt="Los Angeles Skyscrapers" style="width: 348px; height:350px;"/>
                <div class="card-body"  style="background-color: #a62424;">
                <h5 class="card-title text-white">Loma de Guadalupe</h5>
                <p class="card-text text-white">Congregación</p>
                <p class="text-center"><a class="btn text-white" href="{{ url('/comunidades/Loma-de-Guadalupe') }}" role="button" style="background: #eb9836;">Ver más &raquo;</a></p>

              </div>
                    </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                    <img src="\img\comunidades\laguna.jpg" class="card-img-top" alt="Palm Springs Road" style="width: 348px; height:350px;"/>
                    <div class="card-body"  style="background-color: #a62424;">
                    <h5 class="card-title text-white">La Laguna</h5>
        <p class="card-text text-white">Congregación</p>
        <p class="text-center"><a class="btn text-white" href="{{ url('/comunidades/La-Laguna') }}" role="button" style="background: #eb9836;">Ver más &raquo;</a></p>

                        </div>
                        </div>
                      </div>
                      <div class="col-lg-4 mb-4">
                      <div class="card h-100">
                      <img src="\img\comunidades\miguel.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" style="width: 348px; height:350px;"/>
                      <div class="card-body" style="background-color: #a62424;">
                      <h5 class="card-title text-white">San Miguel</h5>
        <p class="card-text text-white">
          Congregación
        </p>
        <p class="text-center"><a class="btn text-white" href="{{ url('/comunidades/San-Miguel') }}" role="button" style="background: #eb9836;">Ver más &raquo;</a></p>

                    </div>
                      </div>
                      </div>
                      </div>

                      <div class="row">
                <div class="col-lg-4 mb-4">
                <div class="card h-100">
                <img src="\img\comunidades\adolf.jpg" class="card-img-top" alt="Los Angeles Skyscrapers" style="width: 348px; height:350px;"/>
                <div class="card-body"  style="background-color: #a62424;">
                <h5 class="card-title text-white">Lic. Adolfo Lopez Mateos</h5>
                <p class="card-text text-white">Congregación.</p>

                <p class="text-center"><a class="btn text-white" href="{{ url('/comunidades/Adolfo-Lopez-M') }}" role="button" style="background: #eb9836;">Ver más &raquo;</a></p>

              </div>
                    </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                    <img src="\img\comunidades\pochote.jpg" class="card-img-top" alt="Palm Springs Road" style="width: 348px; height:350px;"/>
                    <div class="card-body"  style="background-color: #a62424;">
                    <h5 class="card-title text-white">El Pochote</h5>
                    <p class="card-text text-white">Congregación</p>
        <p class="text-center"><a class="btn text-white" href="{{ url('/comunidades/El-Pochote') }}" role="button" style="background: #eb9836;">Ver más &raquo;</a></p>

                    
                        </div>
                        </div>
                      </div>
                      <div class="col-lg-4 mb-4">
                      <div class="card h-100">
                      <img src="\img\comunidades\mirador.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" style="width: 348px; height:350px;"/>
                      <div class="card-body" style="background-color: #a62424;">
                      <h5 class="card-title text-white">El Mirador</h5>
        <p class="card-text text-white">Congregación</p>
        <p class="text-center"><a class="btn text-white" href="{{ url('/comunidades/El-Mirador') }}" role="button" style="background: #eb9836;">Ver más &raquo;</a></p>

                    </div>
                      </div>
                      </div>
                      </div>
            </div>

           </div>
</section>


<br>

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