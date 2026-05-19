<section id="testimoni" class="py-5 overflow-hidden position-relative">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill mb-3">💬 Testimoni</span>
            <h2 class="fw-bold h1">Apa Kata <span class="text-gradient">Mereka?</span></h2>
            <p class="text-muted">Kisah sukses dari klien yang sudah membuktikan layanan kami</p>
        </div>

        @php
            $testimonials = [
                ['name' => 'Firli Ardiansyah', 'role' => 'Mahasiswa', 'service' => 'Asistensi Riset', 'text' => 'Fast respon, pengerjaan rapi, deadline aman. Setiap ada tugas atau skripsi selalu konsultasi kesini. Terima Kasih satsetsolution'],
                ['name' => 'Rahmat Pajar', 'role' => 'Mahasiswa', 'service' => 'Mentoring Akademik', 'text' => 'Rekomendasi asli buat kalian yang bingung buat ngerjain Skripsi / Laporan. Udah mah bisa di nego lagi harganya. Ramah banget buat kantor mahasiswa. Kereen abiezz'],
                ['name' => 'Sha*d*ina', 'role' => 'Mahasiswa', 'service' => 'Pendampingan Tugas', 'text' => 'Waktu itu aku order buat bikin laporan. Fast respon banget jujur kakanya. Sempet juga repeat order, karena sesuka itu hasil sama harganya.'],
                ['name' => 'Tegu*ri*adi', 'role' => 'UMKM', 'service' => 'Website UMKM', 'text' => 'Padahal di tempat lain harganya bisa diatas 4 juta an. Tapi kenapa disini murah banget, definisi mengerjakan dengan ikhlas. Semoga makin berkembang buat kakanya. Mantulll'],
                ['name' => 'Gal**h Wa*s*', 'role' => 'Mahasiswa', 'service' => 'Pendampingan Tugas', 'text' => 'Metode yang diajarkan cukup jelas dan detail, mudah dipahami dan orangnya ramah. Intinya beda dari yang lain, sukses selalu satsetsolution!'],
                ['name' => 'M. Fa**l', 'role' => 'Mahasiswa', 'service' => 'Mentoring Akademik', 'text' => 'Dulu setiap ada tugas atau buat program, selalu bimbingan dulu biar dapet pencerahan. Alhamdulillah, selalu selesai dan sesuai apa yang dimau Dosen. Terpercaya asli!'],
                ['name' => 'Al *ar**', 'role' => 'Mahasiswa', 'service' => 'Pendampingan Tugas', 'text' => 'Setiap ada revisi atau perubahan, selalu dibales fast respon. Bahkan dikasih tau dulu kalau misalkan ada yang kurang dalam nerjemahin bahasa Dosen. Ngga salah sih harga murah tapi hasil berkualitas!'],
                ['name' => 'D***', 'role' => 'UMKM', 'service' => 'Website UMKM', 'text' => 'Pernah order pake jasa satsetsolution, hasil nya cukup bagus, rapih, modern dan tidak ada bug. Metode yang dijelasin nya cukup interaktif dan mudah dipahamin secara alur dan konsep nya. Gasskeun order juga buat yang lain nya!'],
            ];
            $indicatorCount = count($testimonials);
        @endphp

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators testimonial-indicators">
                @for ($i = 0; $i < $indicatorCount; $i++)
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="{{ $i }}"
                        class="{{ $i === 0 ? 'active' : '' }}" aria-current="{{ $i === 0 ? 'true' : 'false' }}"
                        aria-label="Testimoni {{ $i + 1 }}"></button>
                @endfor
            </div>

            <div class="carousel-inner pb-4 pb-lg-5">
                @foreach ($testimonials as $index => $testi)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="testimonial-card p-4 p-md-5">
                                    <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="testimonial-avatar">
                                                {{ strtoupper(substr($testi['name'], 0, 1)) }}
                                            </div>
                                            <div>
                                                <div class="d-flex flex-wrap align-items-center gap-2">
                                                    <h6 class="fw-bold mb-0">{{ $testi['name'] }}</h6>
                                                    <span class="badge bg-primary-soft text-primary rounded-pill px-3 py-2">
                                                        {{ $testi['service'] }}
                                                    </span>
                                                </div>
                                                <div class="small text-muted">{{ $testi['role'] }}</div>
                                            </div>
                                        </div>
                                        <div class="testimonial-stars" aria-label="Rating 5 dari 5">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="bi bi-star-fill"></i>
                                            @endfor
                                        </div>
                                    </div>

                                    <p class="testimonial-quote mb-0">
                                        “{{ $testi['text'] }}”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- CUSTOM CONTROLS -->
            <div class="d-flex justify-content-center gap-2 gap-sm-3 mt-3 testimonial-controls">
                <button class="btn btn-primary-soft rounded-circle testimonial-control" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev" aria-label="Testimoni sebelumnya">
                    <i class="bi bi-arrow-left fs-5"></i>
                </button>
                <button class="btn btn-primary-soft rounded-circle testimonial-control" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next" aria-label="Testimoni berikutnya">
                    <i class="bi bi-arrow-right fs-5"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<style>
    #testimoni::before {
        content: "";
        position: absolute;
        inset: -200px -100px auto -100px;
        height: 420px;
        background: radial-gradient(closest-side, rgba(106, 0, 255, 0.16), rgba(0, 210, 255, 0.08), transparent 70%);
        pointer-events: none;
        z-index: 0;
    }

    #testimoni .container {
        position: relative;
        z-index: 1;
    }

    .testimonial-card {
        background: rgba(255, 255, 255, 0.75);
        border: 1px solid var(--border);
        border-radius: 24px;
        box-shadow: var(--card-shadow);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        transition: transform 0.35s ease, border-color 0.35s ease, box-shadow 0.35s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-6px);
        border-color: rgba(106, 0, 255, 0.35);
        box-shadow: 0 18px 44px rgba(106, 0, 255, 0.14);
    }

    .testimonial-avatar {
        width: 54px;
        height: 54px;
        border-radius: 16px;
        display: grid;
        place-items: center;
        font-weight: 800;
        color: #ffffff;
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        box-shadow: 0 10px 20px rgba(106, 0, 255, 0.15);
        flex: 0 0 auto;
    }

    .testimonial-stars {
        display: flex;
        gap: 6px;
        color: #f59e0b;
        opacity: 0.95;
        flex: 0 0 auto;
        padding-top: 2px;
    }

    .testimonial-quote {
        font-size: clamp(1rem, 2.2vw, 1.2rem);
        line-height: 1.85;
        color: var(--text);
    }

    .testimonial-indicators {
        position: static;
        margin: 0 0 18px;
        padding: 0;
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .testimonial-indicators [data-bs-target] {
        width: 10px;
        height: 10px;
        border-radius: 999px;
        background-color: rgba(100, 116, 139, 0.35);
        opacity: 1;
        border: 0;
        margin: 0;
    }

    .testimonial-indicators .active {
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        width: 26px;
    }

    .testimonial-control {
        width: 48px;
        height: 48px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 1px solid var(--border);
    }

    .testimonial-controls {
        position: relative;
        z-index: 2;
    }

    .btn-primary-soft {
        background-color: var(--primary-soft);
        color: var(--primary);
        border-color: var(--border);
    }

    .btn-primary-soft:hover {
        background-color: rgba(106, 0, 255, 0.16);
        color: var(--primary);
        border-color: rgba(106, 0, 255, 0.35);
        transform: translateY(-2px);
    }

    @media (max-width: 576px) {
        .testimonial-avatar {
            width: 48px;
            height: 48px;
            border-radius: 14px;
        }
        .testimonial-control {
            width: 44px;
            height: 44px;
        }
    }
</style>
