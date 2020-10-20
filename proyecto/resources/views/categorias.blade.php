@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="productos" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(@isset (request()->route()->parameters()['id_prod']))
                <h1 class="title">Categorías del producto con ID {{request()->route()->parameters()['id_prod']}}</h1>
            @else
                <h1 class="title">Todas las categorías</h1>
            @endif
            <hr/>
            <div class="container">
                @if(@isset (request()->route()->parameters()['id_prod']))
                    <h5><a class="customLink" href="{{route('categorias/relation/nueva', ['id_prod' => request()->route()->parameters()['id_prod']])}}">Asignar nuevas categorías al producto</a></h5>
                @endif
                @if(!@isset (request()->route()->parameters()['id_prod']))
                    <div class="d-flex justify-content-between align-items-end">
                        <div>
                            <h3>Filtrar:</h3>
                            <form method="POST" action="{{route('categorias/id')}}">
                                {{ csrf_field() }}
                                <input class="customInputFiltro" type="text" name="id" value="" required placeholder="ID de categoría" />
                                <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                            </form>
                            <form class="mt-1" method="POST" action="{{route('categorias/codigo')}}">
                                {{ csrf_field() }}
                                <input class="customInputFiltro" type="text" name="codigo" value="" required placeholder="Código de categoría" />
                                <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                            </form>
                            <form class="mt-1" method="POST" action="{{route('categorias/nombre')}}">
                                {{ csrf_field() }}
                                <input class="customInputFiltro" type="text" name="nombre" value="" required placeholder="Nombres de categoría" />
                                <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                            </form>
                        </div>
                        <div>
                            <h1><a class="customLink" title="Nueva categoría" href="{{route('categorias/nueva')}}">+</a></h1>
                        </div>
                    </div>
                @endif
                <div class="row justify-content-center mt-3">
                    <div class="col-md-12">
                        <div class="card-header d-flex flex-row font-weight-bolder coloured">
                            <p class="idCol col-auto">ID</p>
                            <p class="col-md-1">Codigo</p>
                            <p class="col-md-3">Nombre</p>
                            <p class="col-md-6">Descripción</p>
                            <p class="col-auto">Acciones</p>
                        </div>
                        @foreach ($response as $categoria)
                            <div id="app"><categoria-component v-bind:categoria="{{ json_encode($categoria) }}"></categoria-component></div>
                        @endforeach
                    </div>
                </div>
            </div>

            <script src="{{asset('js/app.js')}}"></script>
        </div>
    </div>
</div>
@endsection
