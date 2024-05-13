@extends('layout.layout')
@section('content')
    <main>
        <article>
            <section class="top-rated">
                <div class="container">




                    <ul class="movies-list ">
                        @foreach ($movies as $movie)
                            <li>
                                <div class="movie-card">
                                    <a href="{{ url('movie-details', $movie->id) }}">
                                        <!-- Assuming you have a route for movie-details and $movie->id is the movie's id -->
                                        <figure class="card-banner">
                                            <img src="{{ asset('uploads/' . $movie->image) }}"
                                                alt="{{ $movie->name }} movie poster">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="{{ url('movie-details', $movie->id) }}">
                                            <!-- Again, assuming you have a route for movie-details -->
                                            <h3 class="card-title">{{ $movie->name }}</h3>
                                        </a>
                                        @php
                                            $release_date = new DateTime($movie->year);
                                            $formatted_year = $release_date->format('Y');
                                        @endphp
                                        <time datetime="{{ $movie->year }}">{{ $formatted_year }}</time>
                                    </div>
                                    <div class="card-meta">
                                        <div class="badge badge-outline">HD</div>
                                        <div class="duration">
                                            <ion-icon name="time-outline"></ion-icon>
                                            <time datetime="{{ $movie->duration }}">{{ $movie->duration }}</time>
                                        </div>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <data>{{ $movie->rating }}</data>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach



                    </ul>
                    <div class="horizontal-pagination">
                        <ul class="pagination-horizontal">

                            <!-- Previous Page Link -->
                            <li class="page-item {{ $movies->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $movies->previousPageUrl() }}" rel="prev">«</a>
                            </li>

                            <!-- Pagination Elements -->
                            @for ($i = 1; $i <= $movies->lastPage(); $i++)
                                <li class="page-item {{ $movies->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $movies->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <!-- Next Page Link -->
                            <li class="page-item {{ $movies->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $movies->nextPageUrl() }}" rel="next">»</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </section>
        </article>
    </main>
@endsection
