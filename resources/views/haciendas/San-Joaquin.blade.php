<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="/css/main.css" rel="stylesheet">

    <title>San Joaquin</title>
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

   
  
    <section class="member-details">
        <div class="container">
         <br> 
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="img-container">
                        <img src="\img\haciendas\joa.jpg" alt="team member" class="img-full" style="width: 270px; height:290px;">
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="member_designation">
                        <h2>Ex-Hacienda San Joaquin</h2>
                        <span>Conocida también como San Joachim </span>
                    </div>
                  <br>  
                    <div class="member_desc">
                        <p style="text-align: justify;">
                        Construida en 1723 por su propietario Juan de la Vaquellina contaba con 44 esclavos y tenía una extensión de 30 caballerías, en 1745 perteneció a Gertrudis De Sagade Bugeyro y José de Cevallos, en 1753 se la vendieron a Gabriel de Segura Cevallos en $50,000.00. En 1804 Ana María Leiva la heredo a su nieta María de la Luz, en 1810 paso a manos de Manuel de la Llave.
                    </p>
                    </div>

                    <div class="member_desc">
                        <p style="text-align: justify;">
                        En 1801 el propietario de la Hacienda Manuel de la Torre pidió al teniente del Real Tribunal de la acordada que localizara varias cabezas de negros que se fugaron de su propiedad y se encontraban en Xantetelco.
                    </p>

                        
                

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