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

    <title>San Francisco Las Mesillas</title>
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
                        <img src="\img\haciendas\fran-mesillas.jpg" alt="team member" class="img-full" style="width: 280px; height:290px;">
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="member_designation">
                        <h2>San Francisco Las Mesillas</h2>
                        <span></span>
                    </div>
                  <br>  
                    <div class="member_desc">
                        <p style="text-align: justify;">
                        Fue construida en 1692 por su propietario Don Diego Rodríguez quien poseía 44 esclavos, en 1695 pasó a ser propiedad de Joseph García de Miranda. La compra de esclavos en esta hacienda se relacionó con la ampliación en las explotaciones cañeras, la cual hacia remisiones de azucares al puerto de Veracruz, con el objeto de que su apoderado utilizara el dinero de su venta para comprar esclavos.
                    </p>
                        
                    </div>

                    <div class="member_desc">
                        <h4></h4>
                        <p style="text-align: justify;">
                        En 1755 en cuenta que presenta el albacea de bienes de Don. José Mongado y Clavijo en el que se incluye una cuenta de ingresos   y egresos de esta hacienda se pueden ver listas de “Raia” con que se pagaba a los trabajadores en diferentes rubros, aparte de los mozos se pagaba a limpiadores y Tlaquehuales provenientes de Tomatlán.
                    </p>

                        
                    </div>
                    <div class="member_desc">
                        <h4></h4>
                        <p style="text-align: justify;">
                        En 1763 la producción era de 32 cargas con valor de 237 pesos de plata equivalentes a 8 reales cada uno.
                    </p>
                </div>

            </div>
            <p style="text-align: justify;">
            En 1807, se encontraron dentro de esta hacienda seis ruedas de metal, las cuales nos indican el uso de la fuerza hidráulica.
                    </p>
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