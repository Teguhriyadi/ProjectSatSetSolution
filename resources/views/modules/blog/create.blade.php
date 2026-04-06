@extends('layouts.master')

@push("title", "Blog Artikel")

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css"
        rel="stylesheet" />
    <style>
        .select2-container {
            width: 100% !important;
        }
    </style>
@endpush

@push('content')
    <h4 class="title">
        Tambah Data Blog
    </h4>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @elseif(session('danger'))
        <div class="alert alert-danger" role="alert">
            {{ session('danger') }}
        </div>
    @endif

    <div class="card mt-3">
        <div class="card-header">
            <a href="{{ url('/pages/blog') }}" class="btn btn-danger btn-sm">
                Kembali
            </a>
        </div>
        <form action="{{ url('/pages/blog') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title" class="form-label"> Judul </label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan Judul">
                </div>
                <div class="form-group mt-3">
                    <label class="form-label">Kategori</label>
                    <select name="category_id" class="form-control">
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($kategori as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label class="form-label">Tags</label>
                    <select name="tags[]" class="form-select tag" multiple>
                        @foreach ($tag as $tag)
                            <option value="{{ $tag->id }}">
                                {{ $tag->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label class="form-label">Gambar Artikel</label>
                    <input type="file" class="form-control" name="gambar" id="gambar">
                </div>
                <div class="form-group mt-3">
                    <label class="form-label">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="5"></textarea>
                </div>
            </div>
            <div class="card-footer">
                @include('layouts.components.button')
            </div>
        </form>
    </div>
@endpush

@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- WAJIB DULU -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
        $(document).ready(function() {
            $('.tag').select2({
                theme: 'bootstrap-5', // 🔥 ini kuncinya
                tags: true,
                tokenSeparators: [','],
                placeholder: "Pilih atau ketik tag",
                width: '100%'
            });
        });
    </script>
@endpush
