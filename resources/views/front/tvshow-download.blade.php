<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

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

            <section class="upcoming">
                <div class="container">
                    <h2 class="h2 section-title">{{ $tvshowlinks->show_name }}</h2>
                    <div class="screenshot-gallery">
                        @if ($tvshowlinks->episode->isNotEmpty())
                            <h3 class="h3 card-title">Download Links</h3>
                            @foreach ($tvshowlinks->episode as $link)
                                <p><br></p>

                                <li>
                                    @if ($link->episode_download_link)
                                        <a href="{{ $link->episode_download_link }}" class="filter-btn" target="_blank">
                                            {{ $link->episode_name }} Download @if ($link->quality == 1)
                                                480p
                                            @elseif ($link->quality == 2)
                                                720p
                                            @elseif ($link->quality == 3)
                                                1080p
                                            @endif
                                        </a>
                                    @else
                                        <button class="filter-btn" disabled>Not available</button>
                                    @endif
                                </li>
                            @endforeach
                        @else
                            <p>No movie links available.</p>
                        @endif
                    </div>
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
    <!-- JavaScript -->
    <script></script>




</body>

</html>
