@extends('adminlte::page')

@section('title', 'Vehiculos')

@section('content_header')
    <h1>Comparación de Vehiculos</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        @if(!empty($vehiculos) && is_array($vehiculos))
            @foreach($vehiculos as $vehiculo)
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 100%;">
                        @if($vehiculo['img_vehiculo'])
                            @if(is_array($vehiculo['img_vehiculo']) && isset($vehiculo['img_vehiculo']['data']))
                                @php
                                    $base64Image = 'data:image/jpeg;base64,' . base64_encode(implode('', array_map('chr', $vehiculo['img_vehiculo']['data'])));
                                @endphp
                                <img src="{{ $base64Image }}" class="card-img-top" alt="imagen-carro" height="200px">
                            @else
                                <img src="{{ $vehiculo['img_vehiculo'] }}" class="card-img-top" alt="imagen-carro">
                            @endif
                        @else
                            <img src="https://picsum.photos/seed/picsum/400/300" class="card-img-top" alt="image-carro">
                        @endif
                        <div class="card-body title-center">
                            <h5 class="card-title col text-center text-danger">{{ $vehiculo['modelo'] }}</h5>
                            <p class="card-text mb-1">Año: {{ $vehiculo['anio_vehiculo'] }}</p>
                            <p class="card-text mb-1">Marca: {{ $vehiculo['nom_marca'] }}</p>
                            <p class="card-text mb-1">Motor: {{ $vehiculo['mot_vehiculo'] }}</p>
                            <p class="card-text mb-1">Transmisión: {{ $vehiculo['nom_transmision'] }}</p>
                            <p class="card-text mb-1">Potencia: {{ $vehiculo['pot_vehiculo'] }}</p>
                            <a href="#" class="btn btn-danger">Comparar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Lo sentimos, los vehículos no se cargaron correctamente.</p>
        @endif
    </div>
</div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop

