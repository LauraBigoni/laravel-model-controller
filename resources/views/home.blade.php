@extends('layouts.main')

@section('content')
    <header>
        <nav class="navbar navbar-dark bg-dark" style="background-color: #e3f2fd;">
            <div class="container-xs">
                <a class="navbar-brand ps-4" href="{{ route('home') }}">Home</a>
                <a class="navbar-brand" href="{{ route('movies') }}">Movies</a>
            </div>
        </nav>
    </header>
    <main>
        <h1 class="text-center pt-5">Visita il nostro sito</h1>
    </main>
@endsection
