<x-web-layout title="">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-light p-3">
                                <h5 class="modal-title">Berita Terbaru</h5>
                            </div>
                            <div class="card-body">
                                @if (!$berita->id)
                                    <form action="{{ route('berita.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="customername-field" class="form-label">Judul Berita</label>
                                            <input type="text" name="judulberita"
                                                class="form-control @error('judulberita') is-invalid @enderror"
                                                placeholder="Masukkan judul">
                                            @error('judulberita')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="customername-field" class="form-label">Deskripsi</label>
                                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                                placeholder="Masukkan Deskripsi"></textarea>
                                            @error('deskripsi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary" id="add-btn">
                                            Tambah Berita
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('berita.update', $berita->id) }}" method="POST">
                                        @csrf
                                        {{ method_field('PATCH') }}
                                        <div class="form-group mb-3">
                                            <label for="customername-field" class="form-label">Judul Berita</label>
                                            <input type="text" name="judulberita"
                                                class="form-control @error('judulberita') is-invalid @enderror"
                                                placeholder="Masukkan judul" value="{{ $berita->judulberita }}">
                                            @error('judulberita')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="customername-field" class="form-label">Deskripsi</label>
                                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                                placeholder="Masukkan Deskripsi">{{ $berita->deskripsi }}</textarea>
                                            @error('deskripsi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary" id="add-btn">
                                            Ubah Berita
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
