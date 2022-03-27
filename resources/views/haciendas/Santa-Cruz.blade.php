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

    <title>Santa Cruz Palmillas</title>
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
                        <img src="\img\haciendas\santacru.png" alt="team member" class="img-full" style="width: 280px; height:290px;">
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="member_designation">
                        <h2>Ex-Hacienda Santa Cruz de las Palmillas</h2>
                        <span></span>
                    </div>
                  <br>  
                    <div class="member_desc">
                        <p style="text-align: justify;">
                        Construida en 1724 contaba con 4 esclavos y una extensión de 24.5 caballerías, el nombre del dueño fundador se desconoce, así como su valor. En 1827 fue víctima del alzamiento de esclavos y huía de los mismos, con ganado y se internaron en la hacienda de Zongolica al igual que los esclavos de San Miguel el Grande en el mismo año se desconoce si se aliaron para realizar este alzamiento.
                    </p>
                    
                    </div>

                    <div class="member_desc">
                        <h4></h4>
                        <p style="text-align: justify;">
                        En este mismo año cuando los insurgentes se retiraron de la región los esclavos que quedaron en las haciendas sufrieron represarais, los hacendados como escarmiento mataron sanguinariamente esclavos a la vez que suspendieron el sustento a la esclavonía.
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