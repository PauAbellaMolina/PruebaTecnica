@section('content')
<div class="d-flex flex-row justify-start">
    <div id="sideMenu" class="test">
        <div><a href="{{ route('home') }}">Home</a></div>
        <div><a href="{{ route('usuarios') }}">Usuarios</a></div>
        <div><a href="{{ route('productos') }}">Productos</a></div>
        <div><a href="{{ route('tarifas') }}">Tarifas</a></div>
        <div><a href="{{ route('categorias') }}">Categorias</a></div>
    </div>
    @yield('main')
</div>
@endsection
