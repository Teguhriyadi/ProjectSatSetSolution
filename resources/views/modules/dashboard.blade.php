@extends("layouts.master")

@push("title", "Dashboard")

@push("content")

    @if (session("success"))
        <div class="alert alert-success">
            <strong>Berhasil,</strong> {{ session('success') }}
        </div>
    @elseif(session("error"))
        <div class="alert alert-danger">
            <strong>Gagal,</strong> {{ session('error') }}
        </div>
    @endif

    <div class="mb-4">
        <h3 class="fw-bold">Dashboard CMS</h3>
        <p class="text-muted small">Kelola konten website kamu di sini 🚀</p>
    </div>

    <!-- 🔥 STATS -->
    <div class="row g-3 mb-4">

        <div class="col-md-3">
            <div class="card shadow border-0 rounded-4 p-3">
                <h6 class="text-muted">Total Post</h6>
                <h3 class="fw-bold">{{ $totalPost ?? 0 }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow border-0 rounded-4 p-3">
                <h6 class="text-muted">Kategori</h6>
                <h3 class="fw-bold">{{ $totalCategory ?? 0 }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow border-0 rounded-4 p-3">
                <h6 class="text-muted">Tag</h6>
                <h3 class="fw-bold">{{ $totalTag ?? 0 }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow border-0 rounded-4 p-3">
                <h6 class="text-muted">Draft</h6>
                <h3 class="fw-bold">{{ $draftPost ?? 0 }}</h3>
            </div>
        </div>

    </div>

    <div class="row g-4">

        <!-- 🔥 POST TERBARU -->
        <div class="col-lg-8">
            <div class="card shadow border-0 rounded-4">

                <div class="card-header bg-white border-0 d-flex justify-content-between">
                    <h6 class="fw-bold mb-0">Post Terbaru</h6>
                    <a href="{{ url('/pages/blog') }}" class="btn btn-sm btn-primary">Kelola</a>
                </div>

                <div class="card-body">

                    @forelse ($latestPosts ?? [] as $post)
                        <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">

                            <div>
                                <div class="fw-semibold">
                                    {{ \Illuminate\Support\Str::limit($post->title, 60) }}
                                </div>

                                <small class="text-muted">
                                    {{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d F Y') }}
                                </small>
                            </div>

                            <a href="{{ url('/blog/' . $post->slug) }}" target="_blank"
                               class="btn btn-sm btn-outline-secondary">
                                Lihat
                            </a>

                        </div>
                    @empty
                        <p class="text-muted small">Belum ada post</p>
                    @endforelse

                </div>
            </div>
        </div>

        <!-- 🔥 QUICK ACTION -->
        <div class="col-lg-4">
            <div class="card shadow-sm border-0 rounded-4">

                <div class="card-header bg-white border-0">
                    <h6 class="fw-bold mb-0">Quick Action</h6>
                </div>

                <div class="card-body d-grid gap-2">

                    <a href="{{ url('/pages/blog/create') }}" class="btn btn-primary">
                        + Buat Post
                    </a>

                    <a href="{{ url('/pages/kategori') }}" class="btn btn-outline-dark">
                        Kelola Kategori
                    </a>

                    <a href="{{ url('/pages/tag') }}" class="btn btn-outline-dark">
                        Kelola Tag
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@endpush
