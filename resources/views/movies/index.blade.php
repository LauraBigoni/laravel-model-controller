@extends('layouts.main')

@section('cdns')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-5">
                    &#127909; Movies database</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">TITLE</th>
                            <th scope="col">ORIGINAL TITLE</th>
                            <th scope="col">NATIONALITY</th>
                            <th scope="col">DATE</th>
                            <th scope="col">VOTE</th>
                            <th scope="col">INFO</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                            <tr>
                                <td>{{ $movie->id }}</td>
                                <td>{{ $movie->title }}</td>
                                <td>{{ $movie->original_title }}</td>
                                <td>{{ $movie->nationality }}</td>
                                <td>{{ $movie->date }}</td>
                                <td>{{ $movie->vote }}</td>
                                <td><a href="{{ url("/movie/$movie->id") }}"><i class="fa-solid fa-eye"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
