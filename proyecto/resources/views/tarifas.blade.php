@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="productos" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(@isset (request()->route()->parameters()['id_prod']))
                <h1 class="coloured"><strong>Tarifas del producto con ID {{request()->route()->parameters()['id_prod']}}</strong></h1>
            @else
                <h1 class="coloured"><strong>Todas las tarifas</strong></h1>
            @endif
            <hr/>
            <div class="container">
                <div class="w-75 d-flex justify-content-between align-items-end">
                    <div>
                        <h3>Filtrar tarifas:</h3>

                        @if(@isset (request()->route()->parameters()['id_prod']))
                            <a class="customLink" href="/tarifas/filter/prod/<?php echo request()->route()->parameters()['id_prod']; ?>">Todas</a>
                            -
                            <a class="customLink" href="/tarifas/filter/prod/<?php echo request()->route()->parameters()['id_prod']; ?>/activas">Activas</a>
                            -
                            <a class="customLink" href="/tarifas/filter/prod/<?php echo request()->route()->parameters()['id_prod']; ?>/pasadas">Pasadas</a>
                            -
                            <a class="customLink" href="/tarifas/filter/prod/<?php echo request()->route()->parameters()['id_prod']; ?>/futuras">Futuras</a>

                        @else
                            <a class="customLink" href="/tarifas/filter">Todas</a>
                            -
                            <a class="customLink" href="/tarifas/filter/activas">Activas</a>
                            -
                            <a class="customLink" href="/tarifas/filter/pasadas">Pasadas</a>
                            -
                            <a class="customLink" href="/tarifas/filter/futuras">Futuras</a>
                        @endif
                    </div>
                    <div>
                        <h1><a class="customLink" title="Nueva tarifa" href="{{route('tarifas/nueva')}}">+</a></h1>
                    </div>
                </div>

                <div class="row justify-content-start mt-3">
                    <div class="col-md-10">
                        <div class="card-header d-flex flex-row font-weight-bolder coloured">
                            <p class="idCol col-auto">ID</p>
                            <p class="idCol col-md-2">ID Producto</p>
                            <p class="fechaCol col-auto">Fecha Inicio</p>
                            <p class="fechaCol col-auto">Fecha Fin</p>
                            <p class="col-md-2">Precio</p>
                            <p class="col-md-2">Acciones</p>
                        </div>

                        @foreach ($response[request()->route()->parameters()['param']] as $tarifa)
                            <div id="app"><tarifa-component v-bind:tarifa="{{ json_encode($tarifa) }}"></tarifa-component></div>
                        @endforeach
                    </div>
                </div>
            </div>

            <script src="{{asset('js/app.js')}}"></script>
        </div>
    </div>
</div>
@endsection
