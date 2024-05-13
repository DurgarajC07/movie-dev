<footer class="footer">
    <div class="footer-top">
        <div class="container">

            <div class="footer-brand-wrapper">
                <a href="{{ url('/') }}" class="logo"> <!-- Assuming '/' is your homepage URL -->
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Filmlane logo">
                </a>
                <ul class="footer-list">
                    <li>
                        <a href="{{ url('/') }}" class="footer-link">Home</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Movie</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">TV Show</a>
                    </li>

                </ul>
            </div>

            <div class="divider"></div>

            <div class="quicklink-wrapper">
                <ul class="quicklink-list">
                    <li>
                        <a href="#" class="quicklink-link"></a>
                    </li>
                    <li>
                        <a href="#" class="quicklink-link"></a>
                    </li>
                    <li>
                        <a href="#" class="quicklink-link"></a>
                    </li>
                    <li>
                        <a href="#" class="quicklink-link"></a>
                    </li>
                </ul>
                <ul class="social-list">
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-pinterest"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p class="copyright">
                &copy; {{ date('Y') }} <a href="#">collerteam</a>.
            </p>
            <img src="{{ asset('assets/images/footer-bottom-img.png') }}" alt="Online banking companies logo"
                class="footer-bottom-img">
        </div>
    </div>
</footer>
<script>
    $(document).ready(function() {
        // Function to handle search input
        $('#searchInput').on('input', function() {
            var searchValue = $(this).val().trim(); // Get search input value

            // If search value is not empty, perform AJAX search
            if (searchValue !== "") {
                // AJAX request to the server
                $.ajax({
                    url: "{{ route('search') }}",
                    method: 'GET',
                    data: {
                        search: searchValue
                    },
                    success: function(response) {
                        // Update search results with response from server
                        var html =
                            '<div id="topTvShowsContent" style="display: block;margin-top:12px;"><ul class="movies-list">';
                        if (response.movies.length > 0) {
                            $.each(response.movies, function(index, movie) {
                                html += '<li>';
                                html += '<div class="movie-card">';
                                html += '<a href="/movie-details/' + movie.id +
                                    '">';
                                html += '<figure class="card-banner">';
                                html += '<img src="uploads/' + movie.image +
                                    '" alt="' +
                                    movie
                                    .name + ' movie poster">';
                                html += '</figure></a>';
                                html +=
                                    '<div class="title-wrapper"><a href="/movie-details/' +
                                    movie
                                    .id + '">';
                                html += '<h3 class="card-title">' + movie.name +
                                    '</h3></a>';
                                html += '<time datetime="' + new Date(movie.year)
                                    .getFullYear() + '">' + new Date(movie.year)
                                    .getFullYear() + '</time></div>';
                                html +=
                                    '<div class="card-meta"><div class="badge badge-outline">HD</div>';
                                html +=
                                    '<div class="duration"><ion-icon name="time-outline"></ion-icon>';
                                html += '<time datetime="' + movie.duration + '">' +
                                    movie
                                    .duration + '</time></div>';
                                html +=
                                    '<div class="rating"><ion-icon name="star"></ion-icon>';
                                html += '<data>' + movie.rating +
                                    '</data></div></div></div></li>';
                            });
                        } else if (response.tvShows.length > 0) {
                            $.each(response.tvShows, function(index, show) {
                                html += '<li>';
                                html += '<div class="movie-card">';
                                html += '<a href="/tvshow-details/' + show.id +
                                    '">';
                                html += '<figure class="card-banner">';
                                html += '<img src="uploads/' + show.image +
                                    '" alt="' +
                                    show
                                    .show_name + ' movie poster">';
                                html += '</figure></a>';
                                html +=
                                    '<div class="title-wrapper"><a href="/tvshow-details/' +
                                    show
                                    .id + '">';
                                html += '<h3 class="card-title">' + show.show_name +
                                    '</h3></a>';
                                html += '<time datetime="' + new Date(show.year)
                                    .getFullYear() + '">' + new Date(show.year)
                                    .getFullYear() + '</time></div>';
                                html +=
                                    '<div class="card-meta"><div class="badge badge-outline">HD</div>';
                                html +=
                                    '<div class="duration"><ion-icon name="time-outline"></ion-icon>';
                                html += '<time datetime="' + show.duration + '">' +
                                    show
                                    .duration + '</time></div>';
                                html +=
                                    '<div class="rating"><ion-icon name="star"></ion-icon>';
                                html += '<data>' + show.rating +
                                    '</data></div></div></div></li>';
                            });
                        } else {
                            // Display a message if there are no search results
                            html += '<li>No results found</li>';
                        }
                        html += '</ul></div>';
                        $('#searchResults').html(html);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            } else {
                // Clear search results if search input is empty
                $('#searchResults').html('');
            }
        });
    });
</script>
