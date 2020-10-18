@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="usuarios" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1><strong>Editar Usuario con ID {{request()->route()->parameters()['id_user']}}</strong></h1>
            <hr/>
            <div class="container">
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3>Edita los datos del usuario:</h3>
                        <form method="POST" action="{{route('usuarios/edit/post', ['id_user' => request()->route()->parameters()['id_user']])}}">
                            {{ csrf_field() }}
                            <div class="d-flex flex-column">
                                <div>
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" name="nombre" id="nombre" value="{{$response['nombre']}}" required placeholder="Introduce el nombre" />
                                </div>
                                <div>
                                    <label for="apellidos">Apellidos:</label>
                                    <input type="text" name="apellidos" id="apellidos" value="{{$response['apellidos']}}" required placeholder="Introduce los apellidos" />
                                </div>
                                <div>
                                    <label for="fecha_nacimiento">Fecha nacimiento:</label>
                                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{date('Y-m-d', strtotime($response['fecha_nacimiento']))}}" required placeholder="Introduce la fecha de nacimiento" />
                                </div>
                                <div>
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" value="{{$response['email']}}" required placeholder="Introduce el email" />
                                </div>
                                <div>
                                    <label for="url_foto">URL Foto:</label>
                                    <input type="text" name="url_foto" id="url_foto" value="{{$response['url_foto']}}" required placeholder="Introduce la url de la foto" />
                                </div>
                                <div>
                                    <label for="password">Password:</label>
                                    <input type="password" name="password" id="password" value="" required placeholder="Introduce la contraseña" />
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
