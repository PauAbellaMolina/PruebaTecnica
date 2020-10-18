@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="productos" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="coloured"><strong>Productos</strong></h1>
            <hr/>
            <div class="container">
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3>Filtrar:</h3>
                        <form method="POST" action="{{route('productos/id')}}">
                            {{ csrf_field() }}
                            <input class="customInputFiltro" type="text" name="id" value="" required placeholder="ID de producto" />
                            <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                        </form>
                        <div class="mt-1"></div>
                        <form method="POST" action="{{route('productos/codigo')}}">
                            {{ csrf_field() }}
                            <input class="customInputFiltro" type="text" name="codigo" value="" required placeholder="Código de producto" />
                            <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                        </form>
                        <div class="mt-1"></div>
                        <form method="POST" action="{{route('productos/nombre')}}">
                            {{ csrf_field() }}
                            <input class="customInputFiltro" type="text" name="nombre" value="" required placeholder="Nombre de producto" />
                            <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                        </form>
                    </div>
                    <div>
                        <h1><a class="customLink" title="Nuevo producto" href="{{route('productos/nuevo')}}">+</a></h1>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-12">
                        <div class="card-header d-flex flex-row font-weight-bolder coloured">
                            <p class="idCol col-auto">ID</p>
                            <p class="col-md-1">Codigo</p>
                            <p class="col-md-2">Nombre</p>
                            <p class="col-md-4">Descripción</p>
                            <p class="col-md-2">URL Foto</p>
                            <p class="col-md-2">Acciones</p>
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
