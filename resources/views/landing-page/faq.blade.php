<section id="faq" class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill mb-3">❓ FAQ</span>
            <h2 class="fw-bold h1">Tanya <span class="text-gradient">SatSet</span></h2>
            <p class="text-muted">Jawaban cepat untuk pertanyaan yang sering muncul</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion accordion-flush" id="faqAccordion">
                    @php
                        $faqs = [
                            ['q' => 'Apa saja layanan utama di SatSetSolution?', 'a' => 'Kami fokus pada empat pilar layanan: Digitalisasi UMKM (Website), Branding Korporat (Company Profile), Mentoring Akademik/IT, dan Asistensi Riset (Skripsi/Tugas Akhir).'],
                            ['q' => 'Apakah layanan bimbingan akademik bersifat legal?', 'a' => 'Tentu. Kami memberikan layanan asistensi riset dan mentoring untuk membantu mahasiswa memahami materi dan metode penelitian secara profesional tanpa melanggar kode etik akademik.'],
                            ['q' => 'Bagaimana proses pengerjaan website untuk UMKM?', 'a' => 'Proses kami sangat transparan: dimulai dari konsultasi kebutuhan, desain antarmuka, tahap development, revisi, hingga peluncuran website Anda.'],
                            ['q' => 'Bisa request deadline mepet untuk project korporat?', 'a' => 'Bisa banget! Tim Enterprise kami siap bekerja SatSet dengan dedikasi tinggi untuk mengejar timeline bisnis Anda yang dinamis.'],
                            ['q' => 'Apakah ada jaminan kerahasiaan data klien?', 'a' => 'Sangat aman! Kami menjamin 100% kerahasiaan data bisnis maupun riset akademik Anda melalui kesepakatan internal yang ketat.'],
                            ['q' => 'Berapa lama pengerjaan jasa pembuatan website UMKM?', 'a' => 'Durasi pengerjaan menyesuaikan kebutuhan. Landing page UMKM umumnya 3–7 hari kerja, sedangkan website bisnis dengan fitur lebih lengkap biasanya 1–3 minggu setelah materi dan kebutuhan disepakati.'],
                            ['q' => 'Apakah SatSetSolution menyediakan domain dan hosting website?', 'a' => 'Ya. Kami dapat membantu pengadaan domain dan hosting, termasuk setup SSL, email bisnis, dan konfigurasi dasar agar website UMKM atau company profile siap online dengan aman.'],
                            ['q' => 'Berapa kali revisi desain untuk Company Profile perusahaan?', 'a' => 'Revisi mengikuti paket yang dipilih. Umumnya tersedia revisi desain dan konten agar company profile terlihat profesional, selaras branding, dan siap digunakan untuk presentasi bisnis maupun kebutuhan marketing.'],
                            ['q' => 'Bagaimana sistem pembayaran dan tahapan kerja project?', 'a' => 'Pembayaran dilakukan bertahap sesuai milestone (DP, progress, pelunasan). Alur kerja kami: konsultasi, perencanaan, desain UI, development, testing, revisi, dan go-live. Semua tahap transparan dan terdokumentasi.'],
                            ['q' => 'Apakah mentoring IT cocok untuk pemula dan bisa kelas privat?', 'a' => 'Cocok untuk pemula sampai intermediate. Mentoring tersedia privat atau kelompok, materi bisa disesuaikan (web development, dasar pemrograman, atau pendampingan tugas) dengan target yang jelas dan progres terukur.'],
                        ];
                    @endphp

                    @foreach ($faqs as $index => $faq)
                        <div class="accordion-item mb-3 overflow-hidden border rounded-4 bg-surface" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <h2 class="accordion-header">
                                <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }} fw-bold bg-transparent py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-{{ $index }}">
                                    {{ $faq['q'] }}
                                </button>
                            </h2>
                            <div id="faq-{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted pb-4">
                                    {{ $faq['a'] }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .accordion-item {
        border-color: var(--border) !important;
        background-color: var(--surface) !important;
        transition: 0.3s;
    }
    .accordion-item:hover {
        border-color: var(--primary) !important;
        box-shadow: var(--card-shadow);
    }
    .accordion-button {
        color: var(--text) !important;
    }
    .accordion-button:not(.collapsed) {
        color: var(--primary) !important;
        background-color: transparent !important;
        box-shadow: none !important;
    }
    .accordion-button:focus {
        box-shadow: none;
        border-color: rgba(0,0,0,.125);
    }
    .accordion-button::after {
        filter: grayscale(1) brightness(0.5);
    }
</style>
