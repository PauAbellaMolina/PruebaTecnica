@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="usuarios" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1><strong>Editar Tarifa con ID {{request()->route()->parameters()['id_tarifa']}}</strong></h1>
            <hr/>
            <div class="container">
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3>Edita los datos de la tarifa:</h3>
                        <form method="POST" action="{{route('tarifas/edit/post', ['id_tarifa' => request()->route()->parameters()['id_tarifa']])}}">
                            {{ csrf_field() }}
                            <div class="d-flex flex-column">
                                <div>
                                    <label for="id_prod">ID Producto:</label>
                                    <input type="text" name="id_prod" id="id_prod" value="{{$response['id_prod']}}" required placeholder="Introduce el ID del producto" />
                                </div>
                                <div>
                                    <label for="fecha_inicio">Fecha de inicio:</label>
                                    <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{date('Y-m-d', strtotime($response['fecha_inicio']))}}" required placeholder="Introduce la fecha de inicio" />
                                </div>
                                <div>
                                    <label for="fecha_fin">Fecha de fin:</label>
                                    <input type="date" name="fecha_fin" id="fecha_fin" value="{{date('Y-m-d', strtotime($response['fecha_fin']))}}" required placeholder="Introduce la fecha de fin" />
                                </div>
                                <div>
                                    <label for="precio">Precio:</label>
                                    <input type="text" name="precio" id="precio" value="{{$response['precio']}}" required placeholder="Introduce el precio" />
                                </div>
                            </div>
                            <br><input type="submit" value="Editar"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
