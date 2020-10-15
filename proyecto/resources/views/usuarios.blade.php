@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="usuarios" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1><strong>Usuarios</strong></h1>
            <hr/>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card-header d-flex flex-row font-weight-bolder">
                            <p class="idCol col-auto">ID</p>
                            <p class="col-md-2">Nombre</p>
                            <p class="col-md-2">Apellidos</p>
                            <p class="col-md-4">Email</p>
                            <p class="fechaCol col-auto">Fecha Nacimiento</p>
                            <p class="col-auto">Acciones</p>
                        </div>
                            @foreach ($response as $user)
                                <div id="app"><usuario-component v-bind:user="{{ json_encode($user) }}"></usuario-component></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <script src="{{asset('js/app.js')}}"></script>
        </div>
    </div>
</div>
@endsection
