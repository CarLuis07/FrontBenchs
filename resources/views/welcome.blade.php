@extends('adminlte::page')

@section('title', 'Vehiculos')

@section('content_header')
    <h1>Comparación de Vehiculos</h1>
@stop

@section('content')
<div class="card" style="width: 18rem;">
  <img src="https://picsum.photos/seed/picsum/400/300" class="card-img-top" alt="image-carro">
  <div class="card-body">
    <h5 class="card-title">Nombre Vehiculo</h5>
    <p class="card-text">Modelo</p>
    <p class="card-text">Año</p>
    <p class="card-text">Marca</p>
    <p class="card-text">motor</p>
    <p class="card-text">Tipo Transmisión</p>
    <p class="card-text">Precio</p>
    <a href="#" class="btn btn-primary">Comparar</a>
  </div>
</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop