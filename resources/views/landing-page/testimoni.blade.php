<section id="testimoni" class="py-5 overflow-hidden">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill mb-3">💬 Testimoni</span>
            <h2 class="fw-bold h1">Apa Kata <span class="text-gradient">Mereka?</span></h2>
            <p class="text-muted">Kisah sukses dari klien yang sudah membuktikan layanan kami</p>
        </div>

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner pb-5">
                @php
                    $testimonials = [
                        ['name' => 'Firli Ardiansyah', 'role' => 'Mahasiswa', 'text' => 'Fast respon, pengerjaan rapi, deadline aman. Setiap ada tugas atau skripsi selalu konsultasi kesini. Terima Kasih satsetsolution'],
                        ['name' => 'Rahmat Pajar', 'role' => 'Mahasiswa', 'text' => 'Rekomendasi asli buat kalian yang bingung buat ngerjain Skripsi / Laporan. Udah mah bisa di nego lagi harganya. Ramah banget buat kantor mahasiswa. Kereen abiezz'],
                        ['name' => 'Sha*d*ina', 'role' => 'Mahasiswa', 'text' => 'Waktu itu aku order buat bikin laporan. Fast respon banget jujur kakanya. Sempet juga repeat order, karena sesuka itu hasil sama harganya.'],
                        ['name' => 'Tegu*ri*adi', 'role' => 'UMKM', 'text' => 'Padahal di tempat lain harganya bisa diatas 4 juta an. Tapi kenapa disini murah banget, definisi mengerjakan dengan ikhlas. Semoga makin berkembang buat kakanya. Mantulll'],
                    ];
                @endphp

                @foreach ($testimonials as $index => $testi)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="card-modern text-center p-5">
                                    <div class="mb-4">
                                        @for ($i = 0; $i < 5; $i++)
                                            <i class="bi bi-star-fill text-warning fs-4 mx-1"></i>
                                        @endfor
                                    </div>
                                    <p class="lead mb-4 italic">
                                        “{{ $testi['text'] }}”
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center gap-3">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <i class="bi bi-person-fill fs-3"></i>
                                        </div>
                                        <div class="text-start">
                                            <h6 class="fw-bold mb-0">{{ $testi['name'] }}</h6>
                                            <small class="text-muted">{{ $testi['role'] }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- CUSTOM CONTROLS -->
            <div class="d-flex justify-content-center gap-3 mt-n4">
                <button class="btn btn-primary-soft rounded-circle p-3" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <i class="bi bi-arrow-left fs-4"></i>
                </button>
                <button class="btn btn-primary-soft rounded-circle p-3" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <i class="bi bi-arrow-right fs-4"></i>
                </button>
            </div>
        </div>
    </div>
</section>
