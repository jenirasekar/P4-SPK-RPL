<div class="container-fluid pt-2">
    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <h4><b>Tambah Data</b></h4>

                    @isset($user)
                        <form action="/admin/user/{{ $user->id }}" method="POST">
                            @method('put')
                        @else
                            <form action="/admin/user" method="POST">
                            @endisset

                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" placeholder="Nama Lengkap"
                                    value="{{ isset($user) ? $user->nama : old('nama') }}" autocomplete="off">

                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" placeholder="Email"
                                    value="{{ isset($user) ? $user->email : old('email') }}" autocomplete="off">

                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" placeholder="Password" autocomplete="off">

                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control @error('re_password') is-invalid @enderror"
                                    name="re_password" placeholder="Konfirmasi password" autocomplete="off">

                                @error('re_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Role</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="admin" {{ isset($user) ? $user->role == 'admin' : '' }}>
                                        Admin
                                    </option>
                                    <option value="petugas" {{ isset($user) ? $user->role == 'petugas' : '' }}>
                                        Petugas
                                    </option>
                                </select>

                                @error('re_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
