<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta name="theme-color" content="#6a00ff" />

    <!-- PRIMARY SEO -->
    <title>@yield('title', 'SatSetSolution | Solusi Digital, Website UMKM & Asistensi Akademik Professional')</title>
    <meta name="description"
        content="@yield('description', 'SatSetSolution menghadirkan layanan profesional untuk pembuatan website UMKM, Company Profile korporat, mentoring IT, dan asistensi riset akademik (Skripsi/TA). Solusi cepat, tepat, dan berkualitas untuk semua.')" />
    <meta name="keywords"
        content="@yield('keywords', 'jasa website UMKM, jasa company profile perusahaan, mentoring IT privat, bimbingan skripsi profesional, asistensi tugas akhir, SatSetSolution, solusi digital korporat, jasa koding mahasiswa')" />
    <meta name="author" content="SatSetSolution" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- OPEN GRAPH -->
    <meta property="og:title" content="@yield('title', 'SatSetSolution | Solusi Digital & Akademik Professional')" />
    <meta property="og:description" content="@yield('description', 'Transformasi digital UMKM, branding korporat, dan pendampingan akademik dalam satu pintu. Hasil kerja SatSet, kualitas tetap premium.')" />
    <meta property="og:image" content="https://satsetsolution.my.id/assets/Logo_SatSetSolutions_Store.png" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="SatSetSolution" />

    <!-- TWITTER CARD -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SatSetSolution | Solusi Digital & Akademik Professional">
    <meta name="twitter:description" content="Layanan pembuatan website UMKM, branding korporat, dan pendampingan akademik profesional.">
    <meta name="twitter:image" content="https://satsetsolution.my.id/assets/Logo_SatSetSolutions_Store.png">

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="https://satsetsolution.my.id/assets/Logo_SatSetSolutions_Store.png">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP & ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary: #6a00ff;
            --primary-soft: rgba(106, 0, 255, 0.1);
            --secondary: #00d2ff;
            --accent: #ff00ff;
            --bg: #f8f9ff;
            --surface: #ffffff;
            --text: #1a1a2e;
            --text-muted: #64748b;
            --nav-bg: rgba(255, 255, 255, 0.8);
            --card-shadow: 0 10px 30px rgba(106, 0, 255, 0.08);
            --border: #e2e8f0;
        }

        * {
            font-family: 'Plus Jakarta Sans', sans-serif;
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }

        h1, h2, h3, .navbar-brand {
            font-family: 'Space Grotesk', sans-serif;
        }

        body {
            background-color: var(--bg);
            color: var(--text);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* SPACE THEME ELEMENTS */
        .glass {
            background: var(--nav-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--border);
        }

        .btn-space {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white !important;
            border: none;
            padding: 12px 28px;
            border-radius: 14px;
            font-weight: 600;
            box-shadow: 0 4px 15px var(--primary-soft);
            transition: 0.3s;
        }

        .btn-space:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px var(--primary-soft);
        }

        /* NAVBAR MODERN */
        .navbar-genz {
            background: transparent;
            padding: 20px 0;
            transition: 0.4s;
        }

        .navbar-genz.scrolled {
            padding: 12px 0;
            background: var(--nav-bg);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
        }

        .nav-link {
            color: var(--text) !important;
            font-weight: 500;
            margin: 0 5px;
            padding: 8px 16px !important;
            border-radius: 10px;
        }

        .nav-link:hover, .nav-link.active {
            background: var(--primary-soft);
            color: var(--primary) !important;
        }

        /* HERO SECTION */
        .hero-section {
            padding: 160px 0 100px;
            position: relative;
            overflow: hidden;
        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            margin-bottom: 1.5rem;
        }

        .text-gradient {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* CARDS */
        .card-modern {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 30px;
            height: 100%;
            transition: 0.4s;
            box-shadow: var(--card-shadow);
        }

        .card-modern:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
        }

        /* FLOATING WA */
        .wa-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: #25d366;
            color: white;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.3);
            z-index: 1000;
            transition: 0.3s;
        }

        .wa-float:hover {
            transform: scale(1.1) rotate(10deg);
            color: white;
        }

        /* RESPONSIVE FIXES */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: var(--surface);
                margin-top: 15px;
                padding: 20px;
                border-radius: 20px;
                border: 1px solid var(--border);
                box-shadow: var(--card-shadow);
            }
            .hero-section {
                padding: 120px 0 60px;
                text-align: center;
            }
            .hero-cta {
                justify-content: center;
            }
        }

        /* SECTION PADDING */
        section {
            padding: 80px 0;
            scroll-margin-top: 100px;
        }

        /* UTILITIES */
        .bg-primary-soft { background-color: var(--primary-soft) !important; }
        .bg-success-soft { background-color: rgba(37, 211, 102, 0.1) !important; }
        .bg-info-soft { background-color: rgba(0, 210, 255, 0.1) !important; }
        .text-primary { color: var(--primary) !important; }
    </style>
    @yield('css')
</head>

<body class="blog-detail-page">
    <!-- FLOATING WA -->
    <a href="https://wa.me/6281214707143" target="_blank" rel="noopener noreferrer" class="wa-float"
        aria-label="Chat WhatsApp SatSetSolution">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- NAVBAR -->
    @include('landing-page.components.navbar')

    <main id="main-content">
        @yield('content-modules')
        @include('landing-page.components.kontak')
    </main>

    <!-- FOOTER -->
    @include('landing-page.components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Navbar Scroll Effect
        const navbar = document.querySelector(".navbar-genz");
        window.addEventListener("scroll", () => {
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    </script>
    @yield('js')
</body>

</html>
