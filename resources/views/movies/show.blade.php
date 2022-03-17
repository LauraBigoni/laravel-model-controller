@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                <div class="card m-5">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis pariatur
                            velit voluptates reiciendis nesciunt cumque illo, adipisci quod nulla esse, maiores ipsa dolor
                            aliquam quam? Architecto a explicabo impedit consequatur.
                            Ad laborum doloremque voluptates placeat ea dolore odio, impedit sint, nulla, fugit velit cum
                            culpa expedita! Possimus rem aut numquam aliquid a maiores quisquam? Magni ab nam quod totam
                            sapiente!
                            Quas molestiae accusamus asperiores minima fugiat dolores deserunt, rem adipisci nisi delectus
                            non facilis sequi optio dignissimos excepturi, atque, neque incidunt! Sint fugiat,
                            necessitatibus unde quam similique commodi ullam sit?</p>
                        <p>Data di uscita: {{ $movie->date }}</p>
                        <p>Voto: {{ $movie->vote }}</p>
                    </div>
                </div>
                <nav>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="{{ url("/movies/$prev") }}">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="{{ url("/movies/$next") }}">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
