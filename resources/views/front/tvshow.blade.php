@extends('layout.layout')
@section('content')
    <main>
        <article>
            <section class="top-rated">
                <div class="container">




                    <ul class="movies-list ">
                        @foreach ($shows as $show)
                            <li>
                                <div class="movie-card">
                                    <a href="{{ url('tvshow-details', $show->id) }}">
                                        <!-- Assuming you have a route for movie-details and $movie->id is the movie's id -->
                                        <figure class="card-banner">
                                            <img src="{{ asset('uploads/' . $show->image) }}"
                                                alt="{{ $show->name }} movie poster">
                                        </figure>
                                    </a>
                                    <div class="title-wrapper">
                                        <a href="{{ url('movie-details', $show->id) }}">
                                            <!-- Again, assuming you have a route for movie-details -->
                                            <h3 class="card-title">{{ $show->show_name }}</h3>
                                        </a>
                                        @php
                                            $release_date = new DateTime($show->year);
                                            $formatted_year = $release_date->format('Y');
                                        @endphp
                                        <time datetime="{{ $show->year }}">{{ $formatted_year }}</time>
                                    </div>
                                    <div class="card-meta">
                                        <div class="badge badge-outline">HD</div>
                                        <div class="duration">
                                            <ion-icon name="time-outline"></ion-icon>
                                            <time datetime="{{ $show->duration }}">{{ $show->duration }}</time>
                                        </div>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <data>{{ $show->rating }}</data>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach




                    </ul>
                    <div class="horizontal-pagination">
                        <ul class="pagination-horizontal">

                            <!-- Previous Page Link -->
                            <li class="page-item {{ $shows->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $shows->previousPageUrl() }}" rel="prev">«</a>
                            </li>

                            <!-- Pagination Elements -->
                            @for ($i = 1; $i <= $shows->lastPage(); $i++)
                                <li class="page-item {{ $shows->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $shows->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <!-- Next Page Link -->
                            <li class="page-item {{ $shows->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $shows->nextPageUrl() }}" rel="next">»</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </section>
        </article>
    </main>
@endsection
