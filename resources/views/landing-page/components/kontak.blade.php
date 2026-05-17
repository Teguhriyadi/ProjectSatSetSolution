<section id="kontak" class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- KIRI : INFO -->
            <div class="col-lg-5" data-aos="fade-right">
                <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill mb-3">💬 Konsultasi</span>
                <h2 class="fw-bold h1 mb-4">
                    Punya Ide Brilian?<br />
                    Mari <span class="text-gradient">Wujudkan!</span>
                </h2>
                <p class="text-muted lead mb-4">
                    Konsultasi <strong>GRATIS</strong> tanpa komitmen. Ceritakan kebutuhan kamu,
                    kami siap bantu cari solusi digital yang paling pas buat kamu.
                </p>

                <div class="d-flex flex-column gap-3 mb-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-success-soft p-2 rounded-circle">
                            <i class="bi bi-whatsapp text-success fs-5"></i>
                        </div>
                        <span>Fast Respon (08.00 – 23.00 WIB)</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-primary-soft p-2 rounded-circle">
                            <i class="bi bi-shield-lock text-primary fs-5"></i>
                        </div>
                        <span>Aman & 100% Rahasia</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-info-soft p-2 rounded-circle">
                            <i class="bi bi-people text-info fs-5"></i>
                        </div>
                        <span>Sudah 50+ Klien Puas</span>
                    </div>
                </div>

                <div class="d-flex gap-3 flex-wrap">
                    <a target="_blank"
                        href="https://wa.me/6281214707143?text=Halo%20SatSetSolution,%20saya%20mau%20konsultasi"
                        rel="noopener noreferrer" class="btn btn-space">
                        <i class="bi bi-whatsapp me-2"></i> Chat Sekarang
                    </a>
                    <a href="mailto:ilham.teguh55@gmail.com" class="btn btn-outline-primary rounded-4 px-4">
                        <i class="bi bi-envelope me-2"></i> Email Kami
                    </a>
                </div>
            </div>

            <!-- KANAN : CARD -->
            <div class="col-lg-7" data-aos="zoom-in">
                <div class="card-modern p-4 p-lg-5 shadow-lg border-primary">
                    <h4 class="fw-bold mb-3">Kirim Pesan Cepat 🚀</h4>
                    <p class="text-muted mb-4">
                        Isi form di bawah, kami akan segera merespon via WhatsApp.
                    </p>

                    <form id="contactForm" autocomplete="on">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input id="contactName" name="name" type="text" class="form-control bg-transparent"
                                        placeholder="Nama" autocomplete="name" required />
                                    <label for="contactName">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input id="contactWhatsapp" name="whatsapp" type="tel" class="form-control bg-transparent"
                                        placeholder="No WhatsApp" autocomplete="tel" required />
                                    <label for="contactWhatsapp">Nomor WhatsApp</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea id="contactMessage" name="message" class="form-control bg-transparent"
                                        placeholder="Pesan" style="height: 120px" required></textarea>
                                    <label for="contactMessage">Ceritakan Kebutuhanmu...</label>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-space w-100 mt-4 py-3">
                            Kirim & Konsultasi Sekarang 🚀
                        </button>

                        <p class="text-center text-muted mt-3 mb-0 small">
                            <i class="bi bi-lock-fill me-1"></i> Data kamu aman bersama kami.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .bg-success-soft { background: rgba(37, 211, 102, 0.1); }
    .bg-info-soft { background: rgba(0, 210, 255, 0.1); }

    .form-control {
        border-radius: 12px;
        border: 1px solid var(--border);
    }
    .form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.25rem var(--primary-soft);
        background: transparent;
    }
</style>

<script>
    const contactForm = document.querySelector("#contactForm");

    if (contactForm) {
        contactForm.addEventListener("submit", (e) => {
            e.preventDefault();

            const name = document.querySelector("#contactName")?.value?.trim() || "";
            const whatsapp = document.querySelector("#contactWhatsapp")?.value?.trim() || "";
            const message = document.querySelector("#contactMessage")?.value?.trim() || "";

            const composed = [
                    "Halo SatSetSolution, saya mau konsultasi.",
                    name ? `Nama: ${name}` : "",
                    whatsapp ? `WhatsApp: ${whatsapp}` : "",
                    message ? `Kebutuhan: ${message}` : "",
                ]
                .filter(Boolean)
                .join("\n");

            const url = `https://wa.me/6281214707143?text=${encodeURIComponent(composed)}`;
            window.open(url, "_blank", "noopener,noreferrer");
        });
    }
</script>
