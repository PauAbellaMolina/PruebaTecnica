@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="usuarios" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="coloured"><strong>Nuevo Usuario</strong></h1>
            <hr/>
            <div class="container">
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3>Introduce los datos del nuevo usuario:</h3>
                        <form method="POST" action="{{route('usuarios/nuevo/post')}}">
                            {{ csrf_field() }}
                            <div class="d-flex flex-column">
                                <div>
                                    <label class="customLabel" for="nombre">Nombre:</label>
                                    <input class="customInput" type="text" name="nombre" id="nombre" value="" required placeholder="Introduce el nombre" />
                                </div>
                                <div>
                                    <label class="customLabel" for="apellidos">Apellidos:</label>
                                    <input class="customInput" type="text" name="apellidos" id="apellidos" value="" required placeholder="Introduce los apellidos" />
                                </div>
                                <div>
                                    <label class="customLabel" for="fecha_nacimiento">Fecha nacimiento:</label>
                                    <input class="customInput" type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="" required placeholder="Introduce la fecha de nacimiento" />
                                </div>
                                <div>
                                    <label class="customLabel" for="email">Email:</label>
                                    <input class="customInput" type="email" name="email" id="email" value="" required placeholder="Introduce el email" />
                                </div>
                                <div>
                                    <label class="customLabel" for="url_foto">URL Foto:</label>
                                    <input class="customInput" type="text" name="url_foto" id="url_foto" value="" required placeholder="Introduce la url de la foto" />
                                </div>
                                <div>
                                    <label class="customLabel" for="password">Password:</label>
                                    <input class="customInput" type="password" name="password" id="password" value="" required placeholder="Introduce la contraseña" />
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
