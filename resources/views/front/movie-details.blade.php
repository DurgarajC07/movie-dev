<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie->name }}</title>

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
    <style>
        /* Modal style */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        .modal-dialog {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .modal-header {
            padding: 16px 24px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.5);
        }

        .modal-title {
            margin: 0;
            color: var(--citrine);
        }

        .modal-body {
            padding: 24px;
        }

        /* Responsive styles */
        @media (min-width: 768px) {
            .modal-dialog {
                max-width: 70%;
                /* Adjust the maximum width for medium-sized screens */
            }

            #videoPlayer {
                width: 560px;
                /* Adjust width for medium-sized screens */
                height: 315px;
                /* Adjust height for medium-sized screens */
            }
        }

        @media (min-width: 992px) {
            .modal-dialog {
                max-width: 50%;
                /* Adjust the maximum width for large screens */
            }

            #videoPlayer {
                width: 640px;
                /* Adjust width for large screens */
                height: 360px;
                /* Adjust height for large screens */
            }
        }
    </style>
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

                        <img src="{{ asset('uploads/' . $movie->image) }}" alt="Free guy movie poster">

                        <button class="play-btn">
                            <ion-icon name="play-circle-outline"></ion-icon>
                        </button>

                    </figure>

                    <div class="movie-detail-content">

                        <p class="detail-subtitle">Movie</p>

                        <h1 class="h1 detail-title">
                            {{ $movie->name }}
                        </h1>

                        <div class="meta-wrapper">

                            <div class="badge-wrapper">
                                <div class="badge badge-fill">PG 13</div>

                                <div class="badge badge-outline">HD</div>
                            </div>

                            <div class="ganre-wrapper">
                                @if (is_array(json_decode($movie->category_id, true)))
                                    @foreach (json_decode($movie->category_id) as $categoryId)
                                        @php
                                            $category = \App\Models\Category::find($categoryId);
                                        @endphp
                                        @if ($category)
                                            <a href="#">{{ $category->category_name }}</a>
                                        @endif
                                    @endforeach
                                @else
                                    @php
                                        $category = \App\Models\Category::find($movie->category_id);
                                    @endphp
                                    @if ($category)
                                        <a href="#">{{ $category->category_name }}</a>
                                    @endif
                                @endif
                            </div>

                            <div class="date-time">
                                @php
                                    $release_date = new DateTime($movie->year);
                                    $formatted_year = $release_date->format('Y');
                                @endphp
                                <div>
                                    <ion-icon name="calendar-outline"></ion-icon>

                                    <time datetime="2021">{{ $formatted_year }}</time>
                                </div>

                                <div>
                                    <ion-icon name="time-outline"></ion-icon>

                                    <time datetime="PT115M">{{ $movie->duration }}</time>
                                </div>

                            </div>

                        </div>

                        <p class="storyline">
                            {{ $movie->description }}
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

                            <button id="watchButton" class="btn btn-primary">
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


            <!-- Modal -->
            <div class="modal" id="watchModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="watchModalLabel">Watch Trailer</h5>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- Embedded video player -->
                                <iframe class="embed-responsive-item" id="videoPlayer" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




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
    <!-- JavaScript -->
    <script>
        // JavaScript to handle the "Watch Now" button click event
        document.addEventListener('DOMContentLoaded', function() {
            var watchButton = document.getElementById('watchButton');
            var videoPlayer = document.getElementById('videoPlayer');
            var modal = document.getElementById('watchModal');

            // Add event listener to the "Watch Now" button
            watchButton.addEventListener('click', function() {
                // Replace 'trailer_link' with the actual property that holds the trailer URL in your movie object
                var trailerLink = '{{ $movie->trailer_link }}';

                // Set the src attribute of the video player iframe to the trailer URL
                videoPlayer.src = trailerLink;

                // Show the modal
                modal.style.display = 'block';
            });

            // Close modal event handler (optional)
            modal.addEventListener('click', function(event) {
                if (event.target === modal) {
                    // Hide the modal when clicked outside the modal content
                    modal.style.display = 'none';
                    // Stop video playback when modal is closed
                    videoPlayer.src = '';
                }
            });
        });
    </script>




</body>

</html>
