<nav class="navbar navbar-expand-lg navbar-genz fixed-top" aria-label="Navigasi utama">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
            <span class="text-gradient">SatSet</span>Solution
        </a>

        <!-- TOGGLER -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
            aria-controls="navbarMenu" aria-expanded="false" aria-label="Buka menu">
            <i class="bi bi-list fs-1 text-primary"></i>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/#home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#tentang') }}">
                        Tentang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#layanan') }}">
                        Layanan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#portfolio') }}">
                        Portfolio
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#blog') }}">
                        Blog
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#paket') }}">
                        Paket
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#testimoni') }}">
                        Testimoni
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#faq') }}">
                        FAQ
                    </a>
                </li>
            </ul>

            <!-- CTA -->
            <div class="d-flex align-items-center gap-2">
                <a target="_blank" href="https://wa.me/6281214707143?text=Halo%20Admin,%20saya%20mau%20konsultasi"
                    rel="noopener noreferrer" class="btn btn-space">
                    <i class="bi bi-whatsapp me-2"></i> Chat Admin
                </a>
            </div>
        </div>
    </div>
</nav>
