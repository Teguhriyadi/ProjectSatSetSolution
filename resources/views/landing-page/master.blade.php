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
                    <div class="hero-cta d-flex flex-wrap gap-3">
                        <a href="#layanan" class="btn btn-space btn-lg">
                            Eksplor Layanan 🛠️
                        </a>
                        <a href="#paket" class="btn btn-outline-primary btn-lg rounded-4">
                            Lihat Paket Harga 💸
                        </a>
                    </div>

                    <div class="mt-5 d-flex flex-wrap justify-content-center gap-4 align-items-center opacity-75 hero-metrics">
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

    <!-- PORTFOLIO -->
    <section id="portfolio" class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill mb-3">🧩 Portfolio</span>
                <h2 class="fw-bold h1">Project Yang Pernah <span class="text-gradient">Dikerjakan</span></h2>
                <p class="text-muted">
                    Beberapa contoh portfolio jasa pembuatan website UMKM, landing page, dan company profile. Klik untuk lihat detail.
                </p>
            </div>

            @php
                $portfolios = [
                    [
                        'title' => 'Dashboard E-Rapot',
                        'category' => 'Project Skripsi',
                        'summary' => 'E-Rapot adalah sistem informasi berbasis web yang dirancang untuk mengelola, memproses, dan menyajikan data penilaian siswa secara digital.',
                        'detail' => 'E-Rapot adalah sistem informasi berbasis web yang dirancang untuk mengelola, memproses, dan menyajikan data penilaian siswa secara digital dengan cara yang terstruktur dan efisien. Sistem ini bertujuan untuk merampingkan proses evaluasi di sekolah, menjadikannya lebih cepat, akurat, transparan, dan terorganisir. Guru dapat menginput dan mengelola nilai siswa berdasarkan berbagai kategori penilaian.',
                        'highlights' => [
                            'Rekap nilai otomatis + dashboard grafik',
                            'Ekspor/Import data (Excel) untuk percepat input',
                            'Multi role (Admin TU, Kepala Sekolah, Orang Tua, Guru) dengan akses terkontrol',
                        ],
                        'image' => 'https://satsetsolution.my.id/assets/Gambar-Dashboard-E-Rapot.png',
                        'tags' => ['Responsive', 'SEO Basic', 'Laravel', 'Microsoft Excel', 'MySQL', 'Rapot Digital', 'Payment Gateway Xendit', 'Pembayaran Digital', 'Grafik Penilaian'],
                    ],
                    [
                        'title' => 'POS Janari Sport',
                        'category' => 'Website UMKM',
                        'summary' => 'Website POS JANARI SPORT dikembangkan untuk mitra Janari Sport guna menyederhanakan manajemen produk dan operasional penjualan.',
                        'detail' => 'Website POS JANARI SPORT dikembangkan untuk mitra Janari Sport guna menyederhanakan manajemen produk dan operasional penjualan. Fokus pada pengendalian inventaris dan pemrosesan pesanan pre-order (indent). Memfasilitasi alur kerja pemesanan offline yang terintegrasi ke sistem secara real-time. Membantu mitra memantau stok dan pesanan pelanggan melalui satu dashboard terpadu.',
                        'highlights' => [
                            'Manajemen stok + varian barang',
                            'Laporan transaksi + ekspor Excel',
                            'Fitur pendukung toko (indent, e-commerce, dll)',
                        ],
                        'image' => 'https://satsetsolution.my.id/assets/Gambar-POS-Janari.png',
                        'tags' => ['Indent', 'Laravel', 'Grafik', 'Stok Barang', 'Microsoft Excel', 'Laporan Transaksi', 'E-Commerce', 'Variant Barang'],
                    ],
                    [
                        'title' => 'Desa Merdeka',
                        'category' => 'Company Profile',
                        'summary' => 'Website Desa Merdeka mendukung kehadiran digital dan manajemen potensi desa. Memberikan akses informasi mengenai UMKM lokal, ...',
                        'detail' => 'Website Desa Merdeka mendukung kehadiran digital dan manajemen potensi desa. Memberikan akses informasi mengenai UMKM lokal, sumber daya desa, dan peluang ekonomi. Berfungsi sebagai hub digital untuk meningkatkan transparansi dan kolaborasi antara masyarakat desa dengan pihak luar.',
                        'highlights' => [
                            'Halaman profil desa + layanan informasi',
                            'Artikel/berita untuk update kegiatan desa',
                            'Statistik penduduk & laporan data wilayah',
                        ],
                        'image' => 'https://satsetsolution.my.id/assets/Gambar-Desa-Merdeka.png',
                        'tags' => ['Modern UI', 'Kontak', 'Portofolio', 'Laravel', 'Custom UI', 'Informasi Artikel', 'Branding Desa', 'Laporan Jumlah Penduduk'],
                    ],
                    [
                        'title' => 'Project IoT PWA',
                        'category' => 'Website UMKM',
                        'summary' => 'Sistem Pemantauan IoT berbasis Mini PC untuk memantau perangkat dan data secara real-time.',
                        'detail' => 'Sistem Pemantauan IoT berbasis Mini PC untuk memantau perangkat dan data secara real-time. Menggunakan protokol MQTT untuk komunikasi yang ringan dan andal. Menampilkan data sensor seperti suhu dan kelembapan secara live tanpa refresh halaman. Dilengkapi visualisasi grafis dinamis, peringatan anomali, dan pelacakan data historis untuk analisis mendalam.',
                        'highlights' => [
                            'Monitoring real-time berbasis MQTT',
                            'PWA (ringan, bisa add to home screen)',
                            'Dashboard data sensor (contoh: suhu) mudah dibaca',
                        ],
                        'image' => 'https://satsetsolution.my.id/assets/Gambar-PWA-IOT.png',
                        'tags' => ['PWA', 'Responsive', 'IoT', 'Laravel', 'MQTT', 'Microsoft Excel', 'Monitoring Suhu'],
                    ],
                    [
                        'title' => 'QR Code Event',
                        'category' => 'Dashboard Monitoring',
                        'summary' => 'Website Undangan Pernikahan QR Code adalah aplikasi berbasis web untuk manajemen acara seperti pernikahan dan pertunangan.',
                        'detail' => 'Website Undangan Pernikahan QR Code adalah aplikasi berbasis web untuk manajemen acara seperti pernikahan dan pertunangan. Menyediakan solusi undangan digital dan pelacakan kehadiran tanpa kertas yang modern. Dilengkapi dashboard intuitif untuk mengelola daftar tamu dan mengirim undangan via WhatsApp. Setiap tamu menerima kode QR unik sebagai pass masuk digital yang dapat dipindai secara real-time untuk check-in instan dan pencatatan kehadiran otomatis.',
                        'highlights' => [
                            'Scan QR untuk validasi tamu',
                            'Rekap kehadiran + grafik monitoring',
                            'Ekspor data (Excel) untuk laporan event',
                        ],
                        'image' => 'https://satsetsolution.my.id/assets/Gambar-QR-Code.png',
                        'tags' => ['QR Code', 'Event', 'Microsoft Excel', 'Grafik', 'Laravel', 'MySQL', 'Scan QR', 'Validasi Kedatangan Tamu'],
                    ],
                    [
                        'title' => 'Web Monitoring UKS',
                        'category' => 'Tutorial Private',
                        'summary' => 'Sistem Informasi UKS adalah aplikasi berbasis web untuk manajemen layanan kesehatan sekolah secara digital.',
                        'detail' => 'Sistem Informasi UKS adalah aplikasi berbasis web untuk manajemen layanan kesehatan sekolah secara digital. Mencatat kunjungan siswa, riwayat medis, perawatan, dan stok obat. Dashboard interaktif memungkinkan staf memantau kondisi kesehatan siswa secara real-time. Dilengkapi fitur pencarian cepat dan pembuatan laporan otomatis untuk meningkatkan kualitas layanan kesehatan sekolah.',
                        'highlights' => [
                            'Inventory obat + distribusi obat',
                            'Pencatatan gejala & laporan kesehatan',
                            'Multi role + dashboard monitoring',
                        ],
                        'image' => 'https://satsetsolution.my.id/assets/Gambar-Web-UKS.png',
                        'tags' => ['Inventory Obat', 'Microsoft Excel', 'Grafik', 'Gejala Kesehatan', 'MySQL', 'Laravel', 'Monitoring Distribusi Obat', 'Multi Role'],
                    ],
                    [
                        'title' => 'Website RTQ Ulil Albab',
                        'category' => 'Project Dosen',
                        'summary' => 'Website RTQ Ulil Albab Indramayu dirancang untuk mengelola administrasi dan operasional lembaga secara efisien.',
                        'detail' => 'Website RTQ Ulil Albab Indramayu dirancang untuk mengelola administrasi dan operasional lembaga secara efisien. Mengelola data santri, pengajar, dan wali murid. Dilengkapi fitur absensi real-time dan manajemen keuangan (KAS) yang transparan untuk meningkatkan kualitas layanan pendidikan.',
                        'highlights' => [
                            'Data santri + modul iuran',
                            'Absensi + rapor digital terintegrasi',
                            'Multi role untuk admin/pengelola',
                        ],
                        'image' => 'https://satsetsolution.my.id/assets/Gambar-Web-RTQ.png',
                        'tags' => ['Inventory Obat', 'Microsoft Excel', 'Grafik', 'Gejala Kesehatan', 'MySQL', 'Iuran Santri', 'Data Santri', 'Rapot Digital', 'Monitoring Absensi Siswa', 'Laravel', 'Mobile', 'Website', 'Landing Page', 'Multi Role'],
                    ],
                    [
                        'title' => 'Website Proklim Kota Cirebon',
                        'category' => 'Company Profile',
                        'summary' => 'Website ProKlim Kota Cirebon digunakan untuk penyebaran informasi terkait perubahan iklim kepada masyarakat.',
                        'detail' => 'Website ProKlim Kota Cirebon digunakan untuk penyebaran informasi terkait perubahan iklim kepada masyarakat. Menyediakan data iklim komprehensif termasuk laporan harian, bulanan, dan tahunan mengenai suhu, curah hujan, dan indikator lingkungan lainnya melalui antarmuka yang ramah pengguna.',
                        'highlights' => [
                            'Monitoring data wilayah & penduduk',
                            'Tampilan informatif + grafik ringkas',
                            'Multi role untuk pengelolaan data',
                        ],
                        'image' => 'https://satsetsolution.my.id/assets/Gambar-Web-Proklim.png',
                        'tags' => ['Monitoring Iklim Cuaca', 'Laravel', 'MySQL', 'Grafik', 'Monitoring Data Penduduk', 'Microsoft Excel', 'Pencatatan Jumlah Penduduk', 'Data Wilayah', 'Multi Role'],
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($portfolios as $index => $item)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 80 }}">
                        <div class="card-modern p-0 overflow-hidden portfolio-card h-100" role="button" tabindex="0"
                            data-bs-toggle="modal" data-bs-target="#portfolioModal-{{ $index }}"
                            aria-label="Buka detail portfolio {{ $item['title'] }}">
                            <div class="portfolio-thumb">
                                <img src="{{ $item['image'] }}" alt="Portfolio {{ $item['category'] }} - {{ $item['title'] }}"
                                    class="img-fluid w-100 h-100" loading="lazy" decoding="async" />
                                <span class="badge bg-primary position-absolute top-0 start-0 m-3 rounded-pill">
                                    {{ $item['category'] }}
                                </span>
                            </div>
                            <div class="p-4 d-flex flex-column h-100">
                                <h3 class="h5 fw-bold mb-2">{{ $item['title'] }}</h3>
                                <p class="text-muted small mb-3">{{ \Illuminate\Support\Str::limit($item['summary'], 120, '...') }}</p>

                                <div class="d-flex flex-wrap gap-2 mb-4">
                                    @foreach ($item['tags'] as $tag)
                                        <span class="badge bg-primary-soft text-primary rounded-pill px-3 py-2">{{ $tag }}</span>
                                    @endforeach
                                </div>

                                <button type="button" class="btn btn-outline-primary rounded-4 mt-auto"
                                    data-bs-toggle="modal" data-bs-target="#portfolioModal-{{ $index }}"
                                    aria-label="Lihat detail portfolio {{ $item['title'] }}">
                                    Lihat Detail <i class="bi bi-arrow-right ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @foreach ($portfolios as $index => $item)
        <div class="modal fade" id="portfolioModal-{{ $index }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
                <div class="modal-content rounded-4 overflow-hidden border-0">
                    <div class="modal-header border-0 pb-0">
                        <div class="me-3">
                            <div class="badge bg-primary-soft text-primary rounded-pill px-3 py-2">{{ $item['category'] }}</div>
                        </div>
                        <h3 class="modal-title h5 fw-bold mb-0">{{ $item['title'] }}</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body pt-3">
                        <div class="row g-4 align-items-start">
                            <div class="col-lg-6">
                                <div class="portfolio-modal-thumb">
                                    <img src="{{ $item['image'] }}" alt="Detail portfolio {{ $item['title'] }}"
                                        class="img-fluid w-100" loading="lazy" decoding="async" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p class="text-muted mb-3">
                                    {{ $item['detail'] ?? $item['summary'] }}
                                </p>

                                <div class="mb-3">
                                    <div class="fw-semibold mb-2">Highlight</div>
                                    <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                                        @if (!empty($item['highlights']))
                                            @foreach ($item['highlights'] as $highlight)
                                                <li class="d-flex align-items-start gap-2">
                                                    <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                                    <span>{{ $highlight }}</span>
                                                </li>
                                            @endforeach
                                        @else
                                            <li class="d-flex align-items-start gap-2">
                                                <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                                <span>Desain responsif untuk tampilan HP dan desktop</span>
                                            </li>
                                            <li class="d-flex align-items-start gap-2">
                                                <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                                <span>Struktur konten rapi dan mudah dipahami pengunjung</span>
                                            </li>
                                            <li class="d-flex align-items-start gap-2">
                                                <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                                <span>CTA jelas untuk meningkatkan peluang chat/konversi</span>
                                            </li>
                                        @endif
                                    </ul>
                                </div>

                                <div class="mb-4">
                                    <div class="fw-semibold mb-2">Tag</div>
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach ($item['tags'] as $tag)
                                            <span class="badge bg-primary-soft text-primary rounded-pill px-3 py-2">{{ $tag }}</span>
                                        @endforeach
                                    </div>
                                </div>

                                <a target="_blank" rel="noopener noreferrer"
                                    href="https://wa.me/6281214707143?text=Halo%20SatSetSolution,%20saya%20mau%20tanya%20portfolio%20{{ urlencode($item['title']) }}"
                                    class="btn btn-space w-100 py-2">
                                    Tanya Project Serupa <i class="bi bi-whatsapp ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <style>
        #portfolio [data-aos] {
            pointer-events: auto;
        }

        .portfolio-card .portfolio-thumb {
            position: relative;
            height: 210px;
            overflow: hidden;
        }

        .portfolio-card {
            cursor: pointer;
        }

        .portfolio-card img {
            object-fit: cover;
            transition: transform 0.45s ease;
        }

        .portfolio-card:hover img {
            transform: scale(1.06);
        }

        .portfolio-modal-thumb {
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid var(--border);
            background: var(--bg);
        }

        .portfolio-modal-thumb img {
            display: block;
            width: 100%;
            height: auto;
            max-height: 560px;
            object-fit: contain;
        }

        @media (max-width: 991px) {
            .portfolio-card .portfolio-thumb {
                height: 200px;
            }
            .portfolio-modal-thumb {
                border-radius: 16px;
            }
            .portfolio-modal-thumb img {
                max-height: 380px;
            }
        }
    </style>

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
