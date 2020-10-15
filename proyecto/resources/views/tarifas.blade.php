@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="productos" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1><strong>Tarifas</strong></h1>
            <hr/>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card-header d-flex flex-row font-weight-bolder">
                            <p class="idCol col-auto">ID</p>
                            <p class="idCol col-auto">ID Producto</p>
                            <p class="fechaCol col-auto">Fecha Inicio</p>
                            <p class="fechaCol col-auto">Fecha Fin</p>
                            <p class="col-md-1">Precio</p>
                            <p class="col-auto">Acciones</p>
                        </div>
                            @foreach ($response as $tarifa)
                                <div id="app"><tarifa-component v-bind:tarifa="{{ json_encode($tarifa) }}"></tarifa-component></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <script src="{{asset('js/app.js')}}"></script>
        </div>
    </div>
</div>
@endsection
