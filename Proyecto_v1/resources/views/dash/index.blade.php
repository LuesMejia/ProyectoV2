@extends('adminlte::page')

@section('title', 'Sistema Generico')

@section('content_header')
        <style type="text/css">
            h2{
            color:black;
            }
        </style>
        <h2 style="text-align: center"><strong>Bienvenid@s al centro de control </strong></h2>
@stop

@section('content')
    <style type="text/css">
        h3{
        color:navy;
        }
    </style>
   

    <!--<center><img src="vendor/adminlte/dist/img/AdminLTELogo2.png"></center>-->
    <!--<center><img src="vendor/adminlte/dist/img/AdminLTELogo4.png"></center>-->

    <center><img src="vendor/adminlte/dist/img/AdminLTELogo.png"></center>
    
    <!--Inicio del Carrusel de IMAGENES         
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="vendor/adminlte/dist/img/AdminLTELogo8.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="vendor/adminlte/dist/img/AdminLTELogo7.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="vendor/adminlte/dist/img/AdminLTELogo6.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
Final del Carrusel de IMAGENES--> 
 
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
