@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="usuarios" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title">Usuarios</h1>
            <hr/>
            <div class="container">
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3>Filtrar por ID:</h3>
                        <form method="POST" action="{{route('usuarios/id')}}">
                            {{ csrf_field() }}
                            <input class="customInputFiltro" type="text" name="id" value="" required placeholder="ID del usuario" />
                            <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                        </form>
                        <form class="mt-1" method="POST" action="{{route('usuarios/nombre')}}">
                            {{ csrf_field() }}
                            <input class="customInputFiltro" type="text" name="nombre" value="" required placeholder="Nombre del usuario" />
                            <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                        </form>
                        <form class="mt-1" method="POST" action="{{route('usuarios/email')}}">
                            {{ csrf_field() }}
                            <input class="customInputFiltro" type="text" name="email" value="" required placeholder="Email del usuario" />
                            <input class="customSubmitFiltro btn btn-primary ml-2" type="submit" value="Filtrar"/>
                        </form>
                    </div>
                    <div>
                        <h1><a class="customLink" title="Nuevo usuario" href="{{route('usuarios/nuevo')}}">+</a></h1>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-12">
                        <div class="card-header d-flex flex-row font-weight-bolder coloured">
                            <p class="idCol col-auto">ID</p>
                            <p class="col-md-2">Nombre</p>
                            <p class="col-md-2">Apellidos</p>
                            <p class="col-md-3">Email</p>
                            <p class="fechaCol col-auto">Fecha Nacimiento</p>
                            <p class="col-md-2">Acciones</p>
                        </div>
                        @foreach ($response as $user)
                            <div id="app"><usuario-component v-bind:user="{{ json_encode($user) }}"></usuario-component></div>
                        @endforeach
                    </div>
                </div>
            </div>

            <script src="{{asset('js/app.js')}}"></script>
        </div>
    </div>
</div>
@endsection
