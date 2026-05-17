@extends('landing-page.app')

@section('title', 'SatSetSolution | Jasa Website UMKM, Branding Korporat & Asistensi Akademik')
@section('description', 'Solusi digital terintegrasi: Pembuatan website UMKM, Company Profile perusahaan, mentoring akademik, dan asistensi tugas akhir profesional. SatSet Beres untuk semua kalangan.')

@section('content-modules')
    <!-- HERO SECTION -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill mb-3">
                        🚀 Partner Digital & Akademik Terpercaya
                    </span>
                    <h1 class="hero-title">
                        Solusi Digital Profesional <br>
                        <span class="text-gradient">Tepat, Cepat, SatSet!</span>
                    </h1>
                    <p class="lead text-muted mb-4">
                        Mulai dari digitalisasi UMKM, branding korporat, hingga pendampingan akademik (Skripsi/TA) dan mentoring privat. Kami hadir memberikan hasil berkualitas untuk setiap kebutuhan Anda. 😎
                    </p>
                    <div class="hero-cta d-flex gap-3">
                        <a href="#layanan" class="btn btn-space btn-lg">
                            Eksplor Layanan 🛠️
                        </a>
                        <a href="#paket" class="btn btn-outline-primary btn-lg rounded-4">
                            Lihat Paket Harga 💸
                        </a>
                    </div>

                    <div class="mt-5 d-flex gap-4 align-items-center opacity-75">
                        <div>
                            <h4 class="fw-bold mb-0">200+</h4>
                            <small class="text-muted">Klien Terbantu</small>
                        </div>
                        <div class="vr"></div>
                        <div>
                            <h4 class="fw-bold mb-0">4.9/5</h4>
                            <small class="text-muted">Rating Kepuasan</small>
                        </div>
                        <div class="vr"></div>
                        <div>
                            <h4 class="fw-bold mb-0">Multi</h4>
                            <small class="text-muted">Layanan Solutif</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block" data-aos="zoom-in" data-aos-delay="200">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800"
                            alt="SatSetSolution Professional Services" class="img-fluid rounded-5 shadow-lg">
                        <div class="position-absolute bottom-0 end-0 bg-white p-3 rounded-4 shadow-lg m-4 d-flex align-items-center gap-3 border" data-aos="fade-up" data-aos-delay="400">
                            <div class="bg-success p-2 rounded-3">
                                <i class="bi bi-shield-check text-white fs-4"></i>
                            </div>
                            <div>
                                <p class="mb-0 fw-bold text-dark">Layanan Terpadu</p>
                                <small class="text-muted">Profesional & Terjamin</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TENTANG -->
    @include("landing-page.tentang-kami")

    <!-- LAYANAN -->
    @include("landing-page.components.layanan")

    <!-- BLOG SECTION -->
    <section id="blog" class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill mb-3">📝 Insight & Tips</span>
                <h2 class="fw-bold h1">Update Dunia <span class="text-gradient">Digital & Akademik</span></h2>
                <p class="text-muted">Berbagi wawasan seputar teknologi bisnis dan strategi penyelesaian studi 🚀</p>
            </div>

            <div class="row g-4">
                @foreach ($blog as $item)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="card-modern">
                            <div class="position-relative overflow-hidden rounded-4 mb-3">
                                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=600"
                                    alt="{{ $item->title }}" class="img-fluid">
                                <span class="badge bg-primary position-absolute top-0 start-0 m-3 rounded-pill">
                                    {{ $item->category->category->name }}
                                </span>
                            </div>

                            <div class="blog-content">
                                <small class="text-muted">
                                    <i class="bi bi-calendar3 me-1"></i>
                                    {{ \Carbon\Carbon::parse($item->published_at)->translatedFormat('d F Y') }}
                                </small>
                                <h5 class="fw-bold mt-2 mb-3">
                                    {{ $item->title }}
                                </h5>
                                <p class="text-muted small">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($item->content), 100) }}
                                </p>
                                <a href="{{ url('/blog/' . $item->slug) }}" class="btn btn-link text-primary p-0 fw-bold text-decoration-none">
                                    Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- PAKET -->
    @include("landing-page.paket")

    <!-- TESTIMONI -->
    @include("landing-page.testimoni")

    <!-- FAQ -->
    @include("landing-page.faq")
@endsection
