<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('cdns')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    @yield('styles')
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark" style="background-color: #e3f2fd;">
            <div class="container-xs">
                <a class="navbar-brand ps-4" href="{{ route('home') }}">Home</a>
                <a class="navbar-brand" href="{{ route('movies.index') }}">Movies</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    @yield('scripts')
</body>

</html>
