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

    <title>San José del Corral</title>
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
                    <div class="img-container"><br><br>
                        <img src="\img\haciendas\corra.jpg" alt="team member" class="img-full" style="width: 280px; height:290px;">
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="member_designation">
                        <h2>Ex-Hacienda San José del Corral</h2>
                        <span></span>
                    </div>
                  <br>  
                    <div class="member_desc">
                        <p style="text-align: justify;">
                        Construida en 1760 su primer propietario fue Bartolomé Laurencio, en 1766 paso a manos de Gaspar Fernández de Avila; para 1741 Phélix de la Gandera figuraba como el propietario; en 1806 Francisco Antonio de la Llave adquiere la hacienda; en 1820 María Francisco Gallegos Vda. de Francisco Antonio de la Llave aparece como dueño de la propiedad.
                    </p>
                    </div>

                    <div class="member_desc">
                        <p style="text-align: justify;">
                        En 1746 su costo figura en $39,000.00. En 1801 Francisco Antonio de la Llave propietario de la hacienda pide al teniente del Real Tribunal de la acordada que localizara varias cabezas de negros que se fugaron de sus haciendas y se encontraban en Xanteteco.
                    </p>
                    <p style="text-align: justify;">
                En 1820, Francisca Gallegos dueña de la hacienda dio poder a Ignacio Almagun, vecino de México para que recogiera su ganado que tuviera su fierro robado por los rebeldes ella misma da libertad a un esclavo de 30 años en $150.00, en esta misma hacienda se dan 7 libertades, 3 de ellas pagadas por los mismos esclavos, 2 por sus parientes y 2 por testamento, la señora recupero su inversión en 5 de ellos.
            </p>
                        
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