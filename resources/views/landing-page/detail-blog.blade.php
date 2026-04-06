@extends('landing-page.app')

@section('css')
    <style>
        .blog-content h2 {
            margin-top: 30px;
            font-weight: 700;
        }

        .blog-content p {
            margin-bottom: 16px;
        }

        .blog-content img {
            max-width: 100%;
            border-radius: 12px;
            margin: 20px 0;
        }

        /* TAG STYLE */
        .tag-badge {
            font-size: 11px;
            padding: 5px 10px;
            border-radius: 999px;
            background: #f1f3f5;
            color: #333;
            margin-right: 5px;
            display: inline-block;
        }

        /* CARD */
        .card-img-top {
            height: 180px;
            object-fit: cover;
            transition: 0.3s;
        }

        .card:hover .card-img-top {
            transform: scale(1.05);
        }

        .card {
            overflow: hidden;
            border-radius: 16px;
        }

        /* SIDEBAR */
        .sidebar-post {
            display: flex;
            gap: 10px;
            margin-bottom: 14px;
            align-items: center;
        }

        .sidebar-post img {
            width: 65px;
            height: 65px;
            object-fit: cover;
            border-radius: 10px;
        }

        .sidebar-post-title {
            font-size: 13px;
            font-weight: 600;
            line-height: 1.3;
        }

        /* RELATED GRID */
        .related-card {
            height: 230px;
            position: relative;
            border-radius: 16px;
            overflow: hidden;
        }

        .related-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.4s;
        }

        .related-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.2));
        }

        /* 🔥 TAG DI ATAS IMAGE */
        .related-tags {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 2;
        }

        .related-tags span {
            font-size: 10px;
            background: rgba(255, 255, 255, 0.9);
            padding: 4px 8px;
            border-radius: 999px;
            margin-right: 4px;
        }

        .related-content {
            position: absolute;
            bottom: 0;
            padding: 15px;
            z-index: 2;
        }

        .related-card:hover .related-img {
            transform: scale(1.08);
        }
    </style>
@endsection

@section('content-modules')
    <section class="blog-detail py-5 mt-5">
        <div class="container">

            <!-- BREADCRUMB -->
            <div class="mb-3 small text-muted text-center">
                <a href="/" class="text-decoration-none text-muted">Home</a> /
                <a href="/blog" class="text-decoration-none text-muted">Blog</a> /
                <span class="text-dark">{{ $blog->title }}</span>
                <div class="mt-3 text-center">
                    @foreach ($blog->tags as $tag)
                        <span class="badge bg-light text-dark border me-1">
                            #{{ $tag->tag->name }}
                        </span>
                    @endforeach
                </div>
            </div>

            <!-- TITLE -->
            <div class="text-center mb-4">
                <span class="badge bg-primary">
                    {{ $blog->category->category->name }}
                </span>

                <h1 class="fw-bold mt-3">
                    {{ $blog->title }}
                </h1>

                <p class="text-muted small">
                    {{ \Carbon\Carbon::parse($blog->published_at)->translatedFormat('d F Y, H:i') }} WIB
                </p>
            </div>

            <!-- IMAGE -->
            <div class="mb-4 text-center">
                <img src="{{ $blog->image ?? 'https://images.unsplash.com/photo-1519389950473-47ba0277781c' }}"
                    class="img-fluid rounded-4 shadow-sm" style="max-height: 400px; object-fit: cover;">
            </div>

            <div class="row">

                <!-- CONTENT -->
                <div class="col-lg-8">

                    <!-- HIGHLIGHT -->
                    <div class="alert alert-light border rounded-4 shadow-sm">
                        <strong>Ringkasan:</strong>
                        {!! \Illuminate\Support\Str::limit(strip_tags($blog->content), 150) !!}
                    </div>

                    <div class="blog-content fs-6 lh-lg mt-4">
                        {!! $blog->content !!}
                    </div>

                    <!-- SHARE -->
                    @php
                        $url = urlencode(request()->fullUrl());
                        $title = urlencode($blog->title);
                    @endphp

                    <div class="text-center mt-5">
                        <p class="text-muted">Bagikan artikel ini 🚀</p>

                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" target="_blank"
                            class="btn btn-outline-primary btn-sm">Facebook</a>

                        <a href="https://wa.me/?text={{ $title }}%20{{ $url }}" target="_blank"
                            class="btn btn-outline-success btn-sm">WhatsApp</a>

                        <a href="https://twitter.com/intent/tweet?text={{ $title }}&url={{ $url }}"
                            target="_blank" class="btn btn-outline-info btn-sm">Twitter</a>
                    </div>

                    <!-- CTA -->
                    <div class="text-center mt-5 p-4 bg-light rounded-4 shadow-sm">
                        <h5 class="fw-bold">Butuh Website / Aplikasi?</h5>
                        <p class="text-muted small">Kami siap bantu bisnis kamu 🚀</p>
                        <a href="/contact" class="btn btn-primary">Konsultasi Gratis</a>
                    </div>

                </div>

                <!-- SIDEBAR -->
                <div class="col-lg-4">

                    <!-- CATEGORY -->
                    <div class="p-3 bg-light rounded-4 shadow-sm mb-4">
                        <h6 class="fw-bold">Kategori</h6>
                        <span class="badge bg-primary">
                            {{ $blog->category->category->name }}
                        </span>
                    </div>

                    <!-- RELATED MINI (🔥 UPGRADED) -->
                    <div class="p-3 bg-light rounded-4 shadow-sm">
                        <h6 class="fw-bold">Artikel Lain</h6>

                        @foreach ($related as $item)
                            <a href="{{ url('/blog/' . $item->slug) }}" class="text-decoration-none text-dark">
                                <div class="sidebar-post">
                                    <img
                                        src="{{ $item->image ?? 'https://images.unsplash.com/photo-1519389950473-47ba0277781c' }}">
                                    <div>
                                        <div class="sidebar-post-title">
                                            {{ \Illuminate\Support\Str::limit($item->title, 50) }}
                                        </div>
                                        <div class="small text-muted">
                                            {{ \Carbon\Carbon::parse($item->published_at)->translatedFormat('d F Y') }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- RELATED GRID -->
    <section class="related-blog py-5 bg-light">
        <div class="container">

            <h4 class="fw-bold mb-4 text-center">Artikel Terkait</h4>

            <div class="row g-4">
                @foreach ($related as $item)
                    <div class="col-md-4">
                        <a href="{{ url('/blog/' . $item->slug) }}" class="text-decoration-none">

                            <div class="related-card position-relative overflow-hidden rounded-4 shadow-sm">

                                <!-- IMAGE -->
                                <img src="{{ $item->image ?? 'https://images.unsplash.com/photo-1519389950473-47ba0277781c' }}"
                                    class="w-100 related-img">

                                <!-- OVERLAY -->
                                <div class="related-overlay"></div>

                                <div class="related-tags">
                                    @foreach ($item->tags->take(2) as $tag)
                                        <span>#{{ $tag->tag->name }}</span>
                                    @endforeach
                                </div>

                                <!-- CONTENT -->
                                <div class="related-content">
                                    <small class="text-white-50">
                                        {{ \Carbon\Carbon::parse($item->published_at)->translatedFormat('d F Y') }}
                                    </small>

                                    <h6 class="text-white fw-semibold mt-1">
                                        {{ \Illuminate\Support\Str::limit($item->title, 60) }}
                                    </h6>
                                </div>

                            </div>

                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
