<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $show->show_name }}</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="{{ asset('assets/favicon.svg') }}" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="#top">

    @include('layout.header')



    <main>
        <article>

            <!--
        - #MOVIE DETAIL
      -->

            <section class="movie-detail">
                <div class="container">

                    <figure class="movie-detail-banner">

                        <img src="{{ asset('uploads/' . $show->image) }}" alt="Free guy movie poster">

                        <button class="play-btn">
                            <ion-icon name="play-circle-outline"></ion-icon>
                        </button>

                    </figure>

                    <div class="movie-detail-content">

                        <p class="detail-subtitle">Tv Show</p>

                        <h1 class="h1 detail-title">
                            {{ $show->show_name }}
                        </h1>

                        <div class="meta-wrapper">

                            <div class="badge-wrapper">
                                <div class="badge badge-fill">PG 13</div>

                                <div class="badge badge-outline">HD</div>
                            </div>

                            <div class="ganre-wrapper">
                                @if (is_array(json_decode($show->category_id, true)))
                                    @foreach (json_decode($show->category_id) as $categoryId)
                                        @php
                                            $category = \App\Models\Category::find($categoryId);
                                        @endphp
                                        @if ($category)
                                            <a href="#">{{ $category->category_name }}</a>
                                        @endif
                                    @endforeach
                                @else
                                    @php
                                        $category = \App\Models\Category::find($show->category_id);
                                    @endphp
                                    @if ($category)
                                        <a href="#">{{ $category->category_name }}</a>
                                    @endif
                                @endif
                            </div>

                            <div class="date-time">
                                @php
                                    $release_date = new DateTime($show->year);
                                    $formatted_year = $release_date->format('Y');
                                @endphp
                                <div>
                                    <ion-icon name="calendar-outline"></ion-icon>

                                    <time datetime="2021">{{ $formatted_year }}</time>
                                </div>

                                <div>
                                    <ion-icon name="time-outline"></ion-icon>

                                    <time datetime="PT115M">{{ $show->duration }}</time>
                                </div>

                            </div>

                        </div>

                        <p class="storyline">
                            {{ $show->description }}
                        </p>

                        <div class="details-actions">

                            <button class="share">
                                <ion-icon name="share-social"></ion-icon>

                                <span>Share</span>
                            </button>

                            <div class="title-wrapper">
                                <p class="title">Prime Video</p>

                                <p class="text">Streaming Channels</p>
                            </div>

                            <button class="btn btn-primary">
                                <ion-icon name="play"></ion-icon>

                                <span>Watch Trailer</span>
                            </button>

                        </div>

                        <a href="./assets/images/movie-4.png" download class="download-btn">
                            <span>Download</span>

                            <ion-icon name="download-outline"></ion-icon>
                        </a>

                    </div>

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





    <!--
    - #FOOTER
  -->

    @include('layout.footer')






    <!--
    - #GO TO TOP
  -->

    <a href="#top" class="go-top" data-go-top>
        <ion-icon name="chevron-up"></ion-icon>
    </a>





    <!--
    - custom js link
  -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
