@extends('layouts.app')
@extends('layouts.sidemenu')
@section('main')
<div class="container py-4 text-start">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1><strong>Bienvenido!</strong></h1>
            <hr/>
            <h2>{{ $userInfo[0] }} {{ $userInfo[1] }}</h2>
            <h4 class="mb-4">{{ $userInfo[2] }}</h4>
            <a class="logOutButton" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
