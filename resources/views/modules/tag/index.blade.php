@extends('layouts.master')

@push("title", "Tag")

@push('content')
    <h4 class="title">
        Data Tag
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
            <button type="button" class="btn btn-primary btn-sm text-uppercase mt-2 mb-2" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Tambah Data
            </button>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th>Nama Kategori</th>
                        <th>Slug Kategori</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nomer = 0;
                    @endphp
                    @foreach ($tag as $item)
                        <tr>
                            <td class="text-center">{{ ++$nomer }}.</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td class="text-center">
                                <button onclick="editData(`{{ $item->id }}`)" type="button" class="btn btn-warning btn-sm text-uppercase" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalEdit">
                                    Edit
                                </button>
                                <form action="{{ url('/pages/tag/' . $item->id) }}" method="POST" style="display: inline">
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

    <!-- Tambah Data -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        <i class="fa fa-plus"></i> Tambah Data
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('/pages/tag') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Tag</label>
                            <input type="text" class="form-control" name="nama" id="name"
                                placeholder="Masukkan Nama Tag">
                        </div>
                    </div>
                    <div class="modal-footer">
                        @include('layouts.components.button')
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Edit Data -->
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        <i class="fa fa-plus"></i> Edit Data
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="modal-content-edit">

                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endpush

@push("js")
    <script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function editData(id) {
            $.ajax({
                url: "{{ url('/pages/tag') }}" + "/" + id + "/edit",
                type: "GET",
                success: function(response) {
                    $("#modal-content-edit").html(response)
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    </script>
@endpush
