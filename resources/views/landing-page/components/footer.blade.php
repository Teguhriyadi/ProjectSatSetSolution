<footer class="py-5 mt-5 border-top" style="background: var(--surface); border-color: var(--border) !important;">
    <div class="container">
        <div class="row gy-5">
            <!-- BRAND -->
            <div class="col-lg-4 col-md-12">
                <a class="navbar-brand fw-bold fs-3 mb-3 d-block" href="{{ url('/') }}">
                    <span class="text-gradient">SatSet</span>Solution
                </a>
                <p class="text-muted mb-4" style="max-width: 350px;">
                    Partner digital professional yang siap membantu mewujudkan ide-ide brilian kamu menjadi kenyataan. SatSet Beres! 🚀
                </p>
                <div class="d-flex gap-2 flex-wrap">
                    <a target="_blank" href="https://instagram.com/ilham_teguhriyadi" class="btn btn-primary-soft rounded-3 p-2 px-3 social-btn">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>
                    <a target="_blank" href="https://x.com/HameTR29" class="btn btn-primary-soft rounded-3 p-2 px-3 social-btn">
                        <i class="bi bi-twitter-x fs-5"></i>
                    </a>
                    <a target="_blank" href="#" class="btn btn-primary-soft rounded-3 p-2 px-3 social-btn">
                        <i class="bi bi-linkedin fs-5"></i>
                    </a>
                    <a target="_blank" href="mailto:ilham.teguh55@gmail.com" class="btn btn-primary-soft rounded-3 p-2 px-3 social-btn">
                        <i class="bi bi-envelope fs-5"></i>
                    </a>
                </div>
            </div>

            <!-- QUICK LINKS -->
            <div class="col-lg-2 col-md-3 col-6">
                <h6 class="fw-bold mb-4">Layanan</h6>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="#" class="text-muted text-decoration-none hover-primary">Website Mahasiswa</a></li>
                    <li><a href="#" class="text-muted text-decoration-none hover-primary">Company Profile</a></li>
                    <li><a href="#" class="text-muted text-decoration-none hover-primary">Sistem Informasi</a></li>
                    <li><a href="#" class="text-muted text-decoration-none hover-primary">Landing Page</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <h6 class="fw-bold mb-4">Perusahaan</h6>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="#tentang" class="text-muted text-decoration-none hover-primary">Tentang Kami</a></li>
                    <li><a href="#paket" class="text-muted text-decoration-none hover-primary">Paket Harga</a></li>
                    <li><a href="#blog" class="text-muted text-decoration-none hover-primary">Blog & Artikel</a></li>
                    <li><a href="#faq" class="text-muted text-decoration-none hover-primary">FAQ</a></li>
                </ul>
            </div>

            <!-- CONTACT -->
            <div class="col-lg-4 col-md-6">
                <h6 class="fw-bold mb-4">Hubungi Kami</h6>
                <p class="text-muted mb-4">Punya pertanyaan atau butuh penawaran khusus? Jangan ragu untuk menyapa!</p>
                <div class="footer-contact-card p-3 rounded-4 border shadow-sm" style="background: var(--bg); border-color: var(--border) !important;">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-primary text-white p-2 rounded-3 px-3">
                            <i class="bi bi-whatsapp fs-4"></i>
                        </div>
                        <div>
                            <p class="small text-muted mb-0">Konsultasi via WhatsApp</p>
                            <h6 class="fw-bold mb-0 text-text">+62 812-1470-7143</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5 mt-5 border-top text-center" style="border-color: var(--border) !important;">
            <p class="text-muted mb-0">
                &copy; 2025. <strong>SatSetSolution</strong>. Dibuat untuk untuk Mahasiswa & UMKM Indonesia.
            </p>
        </div>
    </div>
</footer>

<style>
    .hover-primary:hover {
        color: var(--primary) !important;
        padding-left: 5px;
        transition: 0.3s ease;
    }
    .social-btn {
        transition: 0.3s ease;
        border: 1px solid transparent;
    }
    .social-btn:hover {
        background: var(--primary) !important;
        color: white !important;
        transform: translateY(-3px);
    }
    .footer-contact-card {
        transition: 0.3s ease;
    }
    .footer-contact-card:hover {
        border-color: var(--primary) !important;
        transform: scale(1.02);
    }
    .text-text {
        color: var(--text);
    }

    @media (max-width: 768px) {
        footer {
            text-align: center;
        }
        footer .d-flex {
            justify-content: center;
        }
        footer p {
            margin-left: auto;
            margin-right: auto;
        }
        .hover-primary:hover {
            padding-left: 0;
        }
    }
</style>
