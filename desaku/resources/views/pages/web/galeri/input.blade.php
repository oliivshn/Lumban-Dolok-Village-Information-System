<x-web-layout title="">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title">Galeri</h5>
                            </div>
                            <div class="card-body">
                                @if (!$galeri->id)
                                    <form action="{{ route('galeri.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="title" class="form-label">Judul</label>
                                            <input type="text" name="nama"
                                                class="form-control @error('galeri') is-invalid @enderror"
                                                placeholder="Masukkan Judul">
                                            @error('galeri')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="deskripsi" class="form-label">Deskripsi</label>
                                            <input type="text" name="deskripsi"
                                                class="form-control @error('galeri') is-invalid @enderror"
                                                placeholder="Deskripsi">
                                            @error('galeri')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="gambar" class="form-label">Gambar</label>
                                            <input type="file" name="gambar"
                                                class="form-control @error('galeri') is-invalid @enderror"
                                                placeholder="Masukkan Gambar">
                                            @error('galeri')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary" id="add-btn">
                                            Tambah Galeri
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        {{ method_field('PATCH') }}
                                        <div class="form-group mb-3">
                                            <label for="title" class="form-label">Judul</label>
                                            <input type="text" name="nama"
                                                class="form-control @error('galeri') is-invalid @enderror"
                                                placeholder="Masukkan Judul" value="{{ $galeri->nama }}">
                                            @error('galeri')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="deskripsi" class="form-label">Deskripsi</label>
                                            <input type="text" name="deskripsi"
                                                class="form-control @error('galeri') is-invalid @enderror"
                                                placeholder="Deskripsi" value="{{ $galeri->deskripsi }}">
                                            @error('galeri')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="gambar" class="form-label">Gambar</label>
                                            <input type="file" name="gambar"
                                                class="form-control @error('galeri') is-invalid @enderror"
                                                placeholder="Masukkan Gambar">
                                            @error('galeri')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary" id="add-btn">
                                            Ubah Galeri
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
