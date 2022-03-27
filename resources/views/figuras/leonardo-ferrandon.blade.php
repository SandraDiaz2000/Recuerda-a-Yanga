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

    <title>Leonardo Ferrandón Ovando</title>
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
                        <img src="\img\figuras\lf.jpg" alt="team member" class="img-full">
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="member_designation">
                        <h2>Leonardo Ferrandón Ovando</h2>
                        <span>Cronista del pueblo</span>
                    </div>
                  <br>  
                    <div class="member_desc">
                        <p style="text-align: justify;">
                        Nació en Yanga en el 09 de noviembre de 1881. Su padre Leonardo A. Ferrandón era originario del pueblo de Grey, Francia como parte del ejército francés durante el mandato de Maximiliano de Habsburgo, mientras que su madre Carmen Ovando era originaria de la congregación de Peñuela, municipio de Amatlán.
                    </p>
                    
                    </div>

                    <div class="member_desc">
                        <h4>Yanga del ayer y hoy</h4>
                        <p style="text-align: justify;">
                        En su ancianidad, decidió registrar sus memorias o “apuntes” como se refiere a ellos en su libro, así como acontecimientos relacionados con la fundación del pueblo, además de comparar el Yanga de su niñez con él sus últimos años. A lo largo de su obra, Ferrandón no solo les entrega a los lectores un pequeño panorama histórico de Yanga, sino que también adopta el papel de cronista al relatar acontecimientos sociales que ocurrieron en un periodo de tiempo comprendido entre finales del siglo XIX y la primera mitad del siglo XX.      
                    </p>

                        
                    </div>
                    <h4>Obra</h4>

                    <ul class="styled_list">
                    <li class=""><i class="fa fa-chevron-circle-right" aria-hidden="true"><b>1963.-</b></i> "Mis recuerdos" Historia de Yanga</li>
                            
                        </ul>
                      
                            <p>
                            </p>
                        
                </div>
           <!--     <h6>FUENTE</h6>
                <h9>https://sapp.uv.mx/egv/biography_detail.aspx?article=Ferrand%C3%B3n%20Ovando,%20Leonardo</h9>
-->
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