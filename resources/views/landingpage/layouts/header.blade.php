<header class="site-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container header-container">

            <!-- LOGO -->
            <a class="navbar-brand site-logo" href="{{ route('index') }}">
                TabunganSampahku
            </a>

            <!-- MOBILE -->
            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- MENU -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav main-menu">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}"
                           href="{{ route('index') }}">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('tentangkami') ? 'active' : '' }}"
                           href="{{ route('tentangkami') }}">
                            Tentang Kami
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('lokasibanksampah') ? 'active' : '' }}"
                           href="{{ route('lokasibanksampah') }}">
                            Lokasi Bank Sampah
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('artikelberita') ? 'active' : '' }}"
                           href="{{ route('artikelberita') }}">
                            Artikel & Berita
                        </a>
                    </li>

                </ul>

                <!-- LOGIN -->
                <a href="/login" class="login-button">
                    Login
                </a>

            </div>

        </div>
    </nav>
</header>