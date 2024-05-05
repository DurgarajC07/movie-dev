<header class="header" data-header>
    <div class="container">

        <div class="overlay" data-overlay></div>

        <a href="{{ url('/') }}" class="logo"> <!-- Assuming '/' is your homepage URL -->
            <img src="{{ asset('assets/images/logo.svg') }}" alt="Filmlane logo">
        </a>

        <div class="header-actions">

        </div>

        <button class="menu-open-btn" data-menu-open-btn>
            <ion-icon name="reorder-two"></ion-icon>
        </button>

        <nav class="navbar" data-navbar>

            <div class="navbar-top">

                <a href="{{ url('/') }}" class="logo"> <!-- Assuming '/' is your homepage URL -->
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Filmlane logo">
                </a>

                <button class="menu-close-btn" data-menu-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>

            </div>

            <ul class="navbar-list">

                <li>
                    <a href="{{ url('/') }}" class="navbar-link">Home</a>
                    <!-- Assuming '/' is your homepage URL -->
                </li>

                <li>
                    <a href="#" class="navbar-link">Movie</a>
                </li>

                <li>
                    <a href="#" class="navbar-link">Tv Show</a>
                </li>


            </ul>

            <ul class="navbar-social-list">

                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-pinterest"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                </li>

            </ul>

        </nav>

    </div>
</header>
