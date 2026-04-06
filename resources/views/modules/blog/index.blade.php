@extends('layouts.master')

@push("title", "Blog Artikel")

@push('content')
    <h4 class="title">
        Data Blog
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
            <a href="{{ url('/pages/blog/create') }}" class="btn btn-primary mt-2 mb-2 text-uppercase btn-sm">
                <i class="fa fa-plus"></i> Tambah Data
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th>Nama Judul</th>
                        <th>Slug</th>
                        <th>Kategori</th>
                        <th>Tag</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nomer = 0;
                    @endphp
                    @foreach ($blog as $item)
                        <tr>
                            <td class="text-center">{{ ++$nomer }}.</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->category->category->name }}</td>
                            <td>
                                @foreach ($item->tags as $tag)
                                    <span class="badge bg-success text-uppercase">
                                        {{ $tag->tag->name }}
                                    </span>
                                @endforeach
                            </td>
                            <td class="text-center">
                                <button onclick="editData(`{{ $item->id }}`)" type="button" class="btn btn-warning btn-sm text-uppercase" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalEdit">
                                    Edit
                                </button>
                                <form action="{{ url('/pages/kategori/' . $item->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method("DELETE")
                                    <button onclick="return confirm('Yakin ? Ingin Menghapus Data Ini?')" type="submit" class="btn btn-danger btn-sm text-uppercase">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endpush
