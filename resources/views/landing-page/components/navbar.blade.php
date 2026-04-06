<nav class="navbar navbar-expand-lg navbar-genz fixed-top {{ request()->is('blog/*') ? 'scrolled' : '' }}" aria-label="Navigasi utama">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand fw-bold text-white" href="#home">
            SatSet<span>Solution</span>
        </a>

        <!-- TOGGLER -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
            aria-controls="navbarMenu" aria-expanded="false" aria-label="Buka menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">
                        <i class="bi bi-house-door"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang">
                        <i class="bi bi-info-circle"></i> Tentang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">
                        <i class="bi bi-journal-text"></i> Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#paket">
                        <i class="bi bi-tags"></i> Paket
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimoni">
                        <i class="bi bi-chat-quote"></i> Testimoni
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">
                        <i class="bi bi-question-circle"></i> FAQ
                    </a>
                </li>
            </ul>

            <!-- CTA -->
            <div class="d-flex">
                <a target="_blank" href="https://wa.me/6281214707143?text=Halo%20Admin,%20saya%20mau%20konsultasi"
                    rel="noopener noreferrer" class="btn btn-wa-nav">
                    <i class="bi bi-whatsapp"></i> Chat Admin
                </a>
            </div>
        </div>
    </div>
</nav>
