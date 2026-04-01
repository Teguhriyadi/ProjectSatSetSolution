<form action="{{ url('/pages/kategori/' . $edit->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="modal-body">
        <div class="form-group">
            <label for="nama" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" name="nama" id="name" placeholder="Masukkan Nama Kategori" value="{{ $edit->name }}">
        </div>
    </div>
    <div class="modal-footer">
        @include('layouts.components.button')
    </div>
</form>
