<div class="row p-2">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5><b>{{ $title }}</b></h5>

                <hr>

                @isset($kategori)
                    <form
                        action="{{ auth()->user()->role == 'petugas' ? '/kategori/' . $kategori->id : '/admin/kategori/' . $kategori->id }}"
                        method="POST" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                    @endisset
                    <form action="{{ auth()->user()->role == 'petugas' ? '/kategori' : '/admin/kategori/' }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="">Nama Kategori</label>
                        <input type="text" name="nama_kategori"
                            class="form-control @error('nama_kategori') is-invalid @enderror"
                            placeholder="Nama Kategori"
                            value="{{ isset($kategori) ? $kategori->nama_kategori : old('nama_kategori') }}"
                            autocomplete="off">
                        @error('nama_kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    </form>
            </div>
        </div>
    </div>
</div>
