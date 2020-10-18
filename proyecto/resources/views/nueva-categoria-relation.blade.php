@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="usuarios" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="coloured"><strong>Asigna una nueva categoría al producto con ID {{request()->route()->parameters()['id_prod']}}</strong></h1>
            <hr/>
            <div class="container">
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3>Introduce el ID de la categoría que quieres asignar:</h3>
                        <form method="POST" action="{{route('categorias/relation/nueva/post', ['id_prod' => request()->route()->parameters()['id_prod']])}}">
                            {{ csrf_field() }}
                            <div class="d-flex flex-column">
                                <div>
                                    <label class="customLabel" for="id_prod">ID del producto:</label>
                                    <input class="customInput" type="text" name="id_prod" id="id_prod" value="{{request()->route()->parameters()['id_prod']}}" required readonly />
                                </div>
                                <div>
                                    <label class="customLabel" for="id_categ">ID Categoría:</label>
                                    <input class="customInput" type="text" name="id_categ" id="id_categ" value="" required placeholder="Introduce el ID" />
                                </div>
                            </div>
                            <br><input class="customSubmitFiltro btn btn-primary" type="submit" value="Asignar"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
