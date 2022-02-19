@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column align-items-center">
        <h1>Mój profil</h1>

        <div>Jesteś zalogowany jako {{ auth()->user()->name }}</div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit">Wyloguj się</button>
        </form>
    </div>


@endsection
