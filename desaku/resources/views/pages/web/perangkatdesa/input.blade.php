<x-web-layout title="">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-light p-3">
                                <h5 class="card-title">Perangkat Desa</h5>
                            </div>
                            <div class="card-body">
                                @if (!$perangkatDesa->id)
                                    <form action="{{ route('perangkatdesa.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="nama" class="form-label">Nama Perangkat
                                                Desa</label>
                                            <input type="text" name="nama"
                                                class="form-control @error('nama') is-invalid @enderror"
                                                placeholder="Nama">
                                            @error('nama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="jabatan" class="form-label">Jabatan</label>
                                            <input type="text" name="jabatan"
                                                class="form-control @error('jabatan') is-invalid @enderror"
                                                placeholder="Jabatan">
                                            @error('jabatan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="nohp" class="form-label">No HP</label>
                                            <input type="number" name="nohp"
                                                class="form-control @error('nohp') is-invalid @enderror"
                                                placeholder="Nomor Telepon">
                                            @error('nohp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir"
                                                class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                placeholder="Tanggal Lahir">
                                            @error('tanggal_lahir')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="gambar" class="form-label">Gambar</label>
                                            <input type="file" name="gambar"
                                                class="form-control @error('gambar') is-invalid @enderror"
                                                placeholder="Gambar">
                                            @error('gambar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary" id="add-btn">
                                            Tambah perangkat desa
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('perangkatdesa.update', $perangkatDesa->id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{ method_field('PATCH') }}

                                        <div class="form-group mb-3">
                                            <label for="customername-field" class="form-label">Nama</label>
                                            <input type="text" name="nama"
                                                class="form-control @error('nama') is-invalid @enderror"
                                                placeholder="Nama" value="{{ $perangkatDesa->nama }}">
                                            @error('nama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="customername-field" class="form-label">Jabatan</label>
                                            <input type="text" name="jabatan"
                                                class="form-control  @error('jabatan') is-invalid @enderror"
                                                placeholder="Jabatan" value="{{ $perangkatDesa->jabatan }}">
                                            @error('jabatan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="customername-field" class="form-label">Email</label>
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email" value="{{ $perangkatDesa->email }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="customername-field" class="form-label">No HP</label>
                                            <input type="number" name="nohp"
                                                class="form-control @error('nohp') is-invalid @enderror"
                                                placeholder="Nomor Telepon" value="{{ $perangkatDesa->nohp }}">
                                            @error('nohp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="customername-field" class="form-label">Tanggal
                                                Lahir</label>
                                            <input type="date" name="tanggal_lahir"
                                                class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                placeholder="Tanggal Lahir"
                                                value="{{ $perangkatDesa->tanggal_lahir }}">
                                            @error('tanggal_lahir')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="customername-field" class="form-label">Gambar</label>
                                            <input type="file" name="gambar" class="form-control" placeholder="Gambar"
                                                value="{{ $perangkatDesa->gambar }}">
                                            @error('gambar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary" id="add-btn">
                                            Ubah perangkat desa
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-web-layout>
