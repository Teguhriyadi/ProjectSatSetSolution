@extends('landing-page.app')

@section('content-modules')
    <section id="home" class="hero-section">
        <div class="hero-overlay"></div>

        <div class="container position-relative">
            <div class="row align-items-center min-vh-100">
                <!-- KIRI : TEXT -->
                <div class="col-lg-6 text-white" data-aos="fade-right">
                    <span class="hero-badge mb-3">
                        🚀 Jasa Digital untuk Semua Kebutuhan
                    </span>

                    <h1 class="hero-title mt-3">
                        Website • Aplikasi • Sistem Digital <br />
                        <span>SatSet Beres!</span>
                    </h1>

                    <p class="hero-desc mt-3">
                        Cocok untuk <strong>UMKM, perusahaan, mahasiswa, maupun personal</strong> yang butuh solusi digital cepat, rapi, dan profesional.
                        Tinggal cerita kebutuhanmu, kami yang beresin 😎
                    </p>

                    <div class="hero-cta mt-4 d-flex gap-3 flex-wrap">
                        <a href="#paket" class="btn btn-glow btn-lg"> Lihat Paket 💸 </a>

                        <a target="_blank"
                            href="https://wa.me/6281214707143?text=Halo%20SatSetSolution,%20saya%20mau%20konsultasi"
                            rel="noopener noreferrer" class="btn btn-outline-light btn-lg rounded-pill">
                            Chat Admin 💬
                        </a>
                    </div>

                    <!-- TRUST -->
                    <div class="hero-trust mt-4">
                        <span>⭐ 4.9/5 Rating</span>
                        <span>🔥 150+ Project Beres</span>
                        <span>🎓 UMKM & Perusahaan</span>
                    </div>
                </div>

                <!-- KANAN : VISUAL -->
                <div class="col-lg-6 d-none d-lg-block" data-aos="fade-left">
                    <div class="hero-visual">
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
                            alt="Jasa Website Mahasiswa Murah Indonesia" class="img-fluid rounded-4 shadow-lg"
                            decoding="async" fetchpriority="high" />
                    </div>
                </div>
            </div>
        </div>

        <!-- FLOATING SHAPE -->
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
    </section>

    <!-- TENTANG -->
    @include("landing-page.tentang-kami")

    <section id="blog" class="blog-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <span class="blog-badge">📝 Blog</span>
                <h2 class="fw-bold mt-3">Tips & Insight Buat Kamu</h2>
                <p class="text-muted">Biar nggak salah langkah 🚀</p>
            </div>

            <div class="row g-4">
                @foreach ($blog as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card h-100">
                            <div class="blog-image">
                                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c" alt="Tips Skripsi"
                                    class="img-fluid">
                                <span class="blog-category">{{ $item->category->category->name }}</span>
                            </div>

                            <div class="blog-content p-3">
                                <small class="text-muted">
                                    {{ \Carbon\Carbon::parse($item->published_at)->translatedFormat('d F Y, H:i') }} WIB
                                </small>

                                <h5 class="mt-2">
                                    {{ $item->title }}
                                </h5>

                                <p class="text-muted small">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($item->content), 120) }}
                                </p>

                                <a href="{{ url('/blog/' . $item->slug) }}" class="btn btn-sm btn-primary rounded-pill">
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- <div class="text-center mt-5">
                <a href="{{ url('/blog') }}" class="btn btn-outline-primary rounded-pill px-4">
                    Lihat Semua Artikel →
                </a>
            </div> --}}
        </div>
    </section>

    <!-- PAKET -->
    @include("landing-page.paket")
    @include("landing-page.testimoni")
    @include("landing-page.faq")
@endsection
