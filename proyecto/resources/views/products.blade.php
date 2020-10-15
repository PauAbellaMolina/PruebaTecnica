@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="productos" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1><strong>Productos</strong></h1>
            <hr/>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card-header d-flex flex-row font-weight-bolder">
                            <p class="idCol col-auto">ID</p>
                            <p class="col-md-1">Codigo</p>
                            <p class="col-md-2">Nombre</p>
                            <p class="col-md-5">Descripción</p>
                            <p class="col-md-2">URL Foto</p>
                            <p class="col-auto">Acciones</p>
                        </div>
                            @foreach ($response as $product)
                                <div id="app"><producto-component v-bind:product="{{ json_encode($product) }}"></producto-component></div>
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
