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
