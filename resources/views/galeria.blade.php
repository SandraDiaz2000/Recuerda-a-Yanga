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


   <link rel="stylesheet" href="https://use.fontawesome.com"> 
   
   <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"> </script>
   <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>

   <link rel="stylesheet" href="https://use.fontawesome.com"> 


    <link href="/css/main.css" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"> </script>

    <title>Galería</title>
    @laravelPWA

  </head>
  <body>

<!-- NAVBAR -->

@extends('layouts.navbar')

@section('content')
<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #eb9836;">
    </nav>

@endsection

<!-- Page Content -->
<div class="container page-top">
    <nav aria-label="breadcrumb" style="background-color: #125e39;padding: 5px;">
          <h3 class="text-align: center text-white">Hecha un vistazo al Yanga del pasado</h3></li>    
    </nav>
<br>
<div class="row">
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="\img\yanga antiguo\3.jpg" class="fancybox" rel="ligthbox">
            <img  src="\img\yanga antiguo\3.jpg" class="zoom img-fluid "  alt="">
           
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="\img\yanga antiguo\4.jpg"  class="fancybox" rel="ligthbox">
            <img  src="\img\yanga antiguo\4.jpg" class="zoom img-fluid"  alt="">
        </a>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="\img\yanga antiguo\6.jpg" class="fancybox" rel="ligthbox">
            <img  src="\img\yanga antiguo\6.jpg" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="\img\yanga antiguo\antes yanga.jpg" class="fancybox" rel="ligthbox">
            <img  src="\img\yanga antiguo\antes yanga.jpg" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="\img\yanga antiguo\1.jpg" class="fancybox" rel="ligthbox">
            <img  src="\img\yanga antiguo\1.jpg" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="\img\yanga antiguo\hecho en yanga.jpg" class="fancybox" rel="ligthbox">
            <img  src="\img\yanga antiguo\hecho en yanga.jpg" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="\img\yanga antiguo\hecho en yanga1.jpg" class="fancybox" rel="ligthbox">
            <img  src="\img\yanga antiguo\hecho en yanga1.jpg" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal">
            <div>
            <img src="\img\fa.jpg" class="zoom img-fluid " rel="ligthbox">

            </div>

        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" style="background-color: black;" tabindex="-1" role="dialog" style="text-aling:center;"  aria-labelledby="myModalLabel">
        
        <div class="modal-dialog" role="document"   style="text-aling:center; margin-right: 600px">
            <div class="modal-content" style="width: 700px; height:500px; background-color: transparent;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="background-color: red;">&times;</span></button>
            </div>
            <div class="modal-body">
            <img  src="\img\fa.jpg" style="width: 660px; heigth: 500px"  alt="">

            </div>
          
            </div>
        </div>
        </div>
    </div>  
</div>


<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>

<nav aria-label="breadcrumb" style="background-color: #125e39;padding: 5px;">
          <h3 class="text-align: center text-white">Yanga de hoy</h3></li>    
    </nav>
    <br>
<div class="row">


    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="\img\y1.jpg" class="fancybox" rel="ligthbox">
            <img  src="\img\y1.jpg" class="zoom img-fluid "  alt="">
           
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="\img\y2.jpg"  class="fancybox" rel="ligthbox">
            <img  src="\img\y2.jpg" class="zoom img-fluid"  alt="">
        </a>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="\img\y3.jpg" class="fancybox" rel="ligthbox">
            <img  src="\img\y3.jpg" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="\img\y4.jpg" class="fancybox" rel="ligthbox">
            <img  src="\img\y4.jpg" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="\img\y5.jpg" class="fancybox" rel="ligthbox">
            <img  src="\img\y5.jpg" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="\img\y6.jpg" class="fancybox" rel="ligthbox">
            <img  src="\img\y6.jpg" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="\img\v2.jpg" class="fancybox" rel="ligthbox">
            <img  src="\img\v2.jpg" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="\img\igl.jpg" class="fancybox" rel="ligthbox">
            <img  src="\img\igl.jpg" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
    
   
</div>
</div>


@extends('layouts.footer')

@section('content')
<footer class=" text-center text-white" style="background-color:#eb9836;">
</footer>
@endsection

  </body>
</html>