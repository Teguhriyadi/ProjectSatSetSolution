<form action="{{ url('/pages/tag/' . $edit->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="modal-body">
        <div class="form-group">
            <label for="nama" class="form-label">Nama Tag</label>
            <input type="text" class="form-control" name="nama" id="name" placeholder="Masukkan Nama Tag" value="{{ $edit->name }}">
        </div>
    </div>
    <div class="modal-footer">
        @include('layouts.components.button')
    </div>
</form>
