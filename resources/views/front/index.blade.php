@extends('layout.layout')
@section('content')
    <main>
        <article>

            <!--
                                                                                                                                                                                                                                                                                                                                                                                                                    - #UPCOMING
                                                                                                                                                                                                                                                                                                                                                                                                                  -->

            <section class="upcoming">
                <div class="container">

                    <div class="flex-wrapper">

                        <div class="title-wrapper">
                            <h2 id="sectionTitle" class="h2 section-title">Trending Movies</h2>
                        </div>

                        <ul class="filter-list">

                            <li>
                                <button class="filter-btn" onclick="toggleContent('movies')">Movies</button>
                            </li>

                            <li>
                                <button class="filter-btn" onclick="toggleContent('tvShows')">TV Shows</button>
                            </li>


                        </ul>

                    </div>
                    <div id="moviesContent" style="display: block;">
                        <ul class="movies-list  has-scrollbar">
                            @foreach ($new_movies as $movie)
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
                    </div>
                    <div id="tvShowsContent" style="display: none;">
                        <ul class="movies-list  has-scrollbar">
                            @foreach ($new_shows as $show)
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
                    </div>

                </div>
            </section>

            <!--
                                                                                                                                                                                                                                                                                                                                                                                                                    - #TOP RATED
                                                                                                                                                                                                                                                                                                                                                                                                                  -->

            <section class="top-rated">
                <div class="container">

                    <h2 class="h2 section-title">Top Rated Movies</h2>

                    <ul class="filter-list">

                        <li>
                            <button class="filter-btn">Movies</button>
                        </li>

                        <li>
                            <button class="filter-btn">TV Shows</button>
                        </li>



                    </ul>

                    <ul class="movies-list ">
                        @foreach ($top_rates as $movie)
                            <li>
                                <div class="movie-card">
                                    <a href="{{ $movie->trailer_link }}">
                                        <figure class="card-banner">
                                            <img src="{{ asset('uploads/' . $movie->image) }}"
                                                alt="{{ $movie->name }} movie poster">
                                        </figure>
                                    </a>

                                    <div class="title-wrapper">
                                        <a href="{{ $movie->trailer_link }}">
                                            <h3 class="card-title">{{ $movie->name }}</h3>
                                        </a>

                                        <time datetime="{{ $movie->year }}">{{ $movie->year }}</time>
                                    </div>

                                    <div class="card-meta">
                                        <div class="badge badge-outline">{{ $movie->quality }}</div>

                                        <div class="duration">
                                            <ion-icon name="time-outline"></ion-icon>
                                            <time datetime="PT{{ $movie->duration }}"> {{ $movie->duration }} min</time>
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

                </div>
            </section>





            <!--
                                                                                                                                                                                                                                                                                                                                                                                                                    - #TV SERIES
                                                                                                                                                                                                                                                                                                                                                                                                                  -->

            <section class="tv-series">
                <div class="container">

                    <p class="section-subtitle">Best TV Series</p>

                    <h2 class="h2 section-title">World Best TV Series</h2>

                    <ul class="movies-list">

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="./assets/images/series-1.png" alt="Moon Knight movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">Moon Knight</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">2K</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT47M">47 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>8.6</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="./assets/images/series-2.png" alt="Halo movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">Halo</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">2K</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT59M">59 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>8.8</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="./assets/images/series-3.png" alt="Vikings: Valhalla movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">Vikings: Valhalla</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">2K</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT51M">51 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>8.3</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="./assets/images/series-4.png" alt="Money Heist movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">Money Heist</h3>
                                    </a>

                                    <time datetime="2017">2017</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">4K</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT70M">70 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>8.3</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>

        </article>
    </main>
@endsection
