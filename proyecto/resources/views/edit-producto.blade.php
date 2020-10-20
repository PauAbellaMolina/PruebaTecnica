@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="productos" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Editar Producto con ID {{request()->route()->parameters()['id_prod']}}</h1>
            <hr/>
            <div class="container">
                    <h3>Edita los datos del producto:</h3>
                    <div class="d-flex flex-row">
                        <form method="POST" action="{{route('productos/edit/post', ['id_prod' => request()->route()->parameters()['id_prod']])}}">
                            {{ csrf_field() }}
                            <div class="editForm d-flex flex-column">
                                <div>
                                    <label class="customLabel" for="codigo_producto">Código del producto:</label>
                                    <input class="customInput" type="text" name="codigo_producto" id="codigo_producto" value="{{$response['codigo_producto']}}" required placeholder="Introduce el código" />
                                </div>
                                <div>
                                    <label class="customLabel" for="nombre">Nombre:</label>
                                    <input class="customInput" type="text" name="nombre" id="nombre" value="{{$response['nombre']}}" required placeholder="Introduce el nombre" />
                                </div>
                                <div>
                                    <label class="customLabel d-block float-left mr-1">Descripción:</label>
                                    <textarea class="customInput" name="descripcion" id="descripcion" value="" placeholder="Introduce la descripción">{{$response['descripcion']}}</textarea>
                                </div>
                                <div>
                                    <label class="customLabel" for="url_foto">URL Foto:</label>
                                    <input class="customInput" type="text" name="url_foto" id="url_foto" value="{{$response['url_foto']}}" required placeholder="Introduce la url de la foto" />
                                </div>
                            </div>
                            <br><input class="customSubmitFiltro btn btn-primary" type="submit" value="Editar"/>
                        </form>
                        <div class="ml-5">
                            <img class="imgProd imgProdEdit" src="{{$response['url_foto']}}" />
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
