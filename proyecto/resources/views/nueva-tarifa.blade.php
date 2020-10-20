@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="usuarios" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Nueva Tarifa</h1>
            <hr/>
            <div class="container">
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3>Introduce los datos de la nueva categoría:</h3>
                        <form method="POST" action="{{route('tarifas/nueva/post')}}">
                            {{ csrf_field() }}
                            <div class="editForm d-flex flex-column">
                                <div>
                                    <label class="customLabel" for="id_prod">ID Producto:</label>
                                    <input class="customInput" type="text" name="id_prod" id="id_prod" value="" required placeholder="Introduce el ID del producto" />
                                </div>
                                <div>
                                    <label class="customLabel" for="fecha_inicio">Fecha de inicio:</label>
                                    <input class="customInput" type="date" name="fecha_inicio" id="fecha_inicio" value="" required placeholder="Introduce la fecha de inicio" />
                                </div>
                                <div>
                                    <label class="customLabel" for="fecha_fin">Fecha de fin:</label>
                                    <input class="customInput" type="date" name="fecha_fin" id="fecha_fin" value="" required placeholder="Introduce la fecha de fin" />
                                </div>
                                <div>
                                    <label class="customLabel" for="precio">Precio:</label>
                                    <input class="customInput" type="text" name="precio" id="precio" value="" required placeholder="Introduce el precio" />
                                </div>
                            </div>
                            <br><input class="customSubmitFiltro btn btn-primary" type="submit" value="Crear"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
