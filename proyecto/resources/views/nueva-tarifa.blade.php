@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="usuarios" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1><strong>Nueva Tarifa</strong></h1>
            <hr/>
            <div class="container">
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3>Introduce los datos de la nueva categoría:</h3>
                        <form method="POST" action="{{route('tarifas/nueva/post')}}">
                            {{ csrf_field() }}
                            <div class="d-flex flex-column">
                                <div>
                                    <label for="id_prod">ID Producto:</label>
                                    <input type="text" name="id_prod" id="id_prod" value="" required placeholder="Introduce el ID del producto" />
                                </div>
                                <div>
                                    <label for="fecha_inicio">Fecha de inicio:</label>
                                    <input type="date" name="fecha_inicio" id="fecha_inicio" value="" required placeholder="Introduce la fecha de inicio" />
                                </div>
                                <div>
                                    <label for="fecha_fin">Fecha de fin:</label>
                                    <input type="date" name="fecha_fin" id="fecha_fin" value="" required placeholder="Introduce la fecha de fin" />
                                </div>
                                <div>
                                    <label for="precio">Precio:</label>
                                    <input type="text" name="precio" id="precio" value="" required placeholder="Introduce el precio" />
                                </div>
                            </div>
                            <br><input type="submit" value="Crear"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
