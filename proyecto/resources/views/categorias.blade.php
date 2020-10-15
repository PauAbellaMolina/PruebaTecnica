@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div id="productos" class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1><strong>Categorias</strong></h1>
            <hr/>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card-header d-flex flex-row font-weight-bolder">
                            <p class="idCol col-auto">ID</p>
                            <p class="col-md-1">Codigo</p>
                            <p class="col-md-3">Nombre</p>
                            <p class="col-md-6">Descripción</p>
                            <p class="col-auto">Acciones</p>
                        </div>
                            @foreach ($response as $categoria)
                                <div id="app"><categoria-component v-bind:categoria="{{ json_encode($categoria) }}"></categoria-component></div>
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
