@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="usuarios" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Editar Categoría con ID {{request()->route()->parameters()['id_categ']}}</h1>
            <hr/>
            <div class="container">
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3>Edita los datos de la categoría:</h3>
                        <form method="POST" action="{{route('categorias/edit/post', ['id_categ' => request()->route()->parameters()['id_categ']])}}">
                            {{ csrf_field() }}
                            <div class="editForm d-flex flex-column">
                                <div>
                                    <label class="customLabel" for="codigo_categoria">Código categoría:</label>
                                    <input class="customInput" type="text" name="codigo_categoria" id="codigo_categoria" value="{{$response['codigo_categoria']}}" required placeholder="Introduce el código" />
                                </div>
                                <div>
                                    <label class="customLabel" for="nombre">Nombre:</label>
                                    <input class="customInput" type="text" name="nombre" id="nombre" value="{{$response['nombre']}}" required placeholder="Introduce el nombre" />
                                </div>
                                <div>
                                    <label class="customLabel d-block float-left mr-1">Descripción:</label>
                                    <textarea class="customInput" name="descripcion" id="descripcion" value="" placeholder="Introduce la descripción">{{$response['descripcion']}}</textarea>
                                </div>
                            </div>
                            <br><input class="customSubmitFiltro btn btn-primary" type="submit" value="Editar"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
