@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="productos" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Detalles del Producto con ID {{request()->route()->parameters()['id_prod']}}</h1>
            <hr/>
            <div class="container">
                <div class="d-flex flex-row justify-content-between">
                    <div class="d-flex flex-column mr-5 mt-2">
                        <h3><strong>Código del producto:</strong></h3>
                        <h4>{{$responseProd['codigo_producto']}}</h4>

                        <h3 class="mt-3"><strong>Nombre:</strong></h3>
                        <h4>{{$responseProd['nombre']}}</h4>

                        <h3 class="mt-3"><strong>Descripción:</strong></h3>
                        <h5 class="text-justify">{{$responseProd['descripcion']}}</h5>

                        <h3 class="mt-4"><a class="coloured customLink" href="{{route('productos/edit', ['id_prod' => $responseProd['id']])}}">Editar producto</a></h3>
                    </div>
                    <div>
                        <img class="imgProd" src="{{$responseProd['url_foto']}}" />
                    </div>
                </div>
                <div class="mt-5 col-md-12">
                    <h3><strong>Categorías del producto:</strong></h3>
                    <div class="card-header d-flex flex-row font-weight-bolder coloured mt-3">
                        <p class="idCol col-auto">ID</p>
                        <p class="col-md-1">Codigo</p>
                        <p class="col-md-3">Nombre</p>
                        <p class="col-md-6">Descripción</p>
                        <p class="col-auto">Acciones</p>
                    </div>
                    @foreach ($responseProd[0] as $categoria)
                        <div id="app"><categoria-component v-bind:categoria="{{ json_encode($categoria) }}"></categoria-component></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
