<x-web-layout title="">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-light p-3">
                                <h5 class="modal-title">Tambah kontak</h5>
                            </div>
                            <div class="card-body">
                                @if (!$hubungiKami->id)
                                    <form enctype="multipart/form-data" action="{{ route('hubungikami.store') }}"
                                        method="POST">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" name="nama"
                                                class="form-control @error('hubungikami') is-invalid @enderror"
                                                placeholder="Masukkan Nama">
                                            @error('hubungikami')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="jabatan" class="form-label">jabatan</label>
                                            <input type="text" name="jabatan"
                                                class="form-control @error('hubungikami') is-invalid @enderror"
                                                placeholder="Masukkan jabatan">
                                            @error('hubungikami')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        @error('jabatan')
                                            <div class="alert-alert danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group mb-3">
                                            <label for="nomortelepon" class="form-label">nomortelepon</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">+62</span>
                                                <input type="number" name="nomortelepon"
                                                    class="form-control @error('hubungikami') is-invalid @enderror"
                                                    placeholder="Masukkan nomortelepon">
                                            </div>

                                        </div>
                                        @error('nomortelepon')
                                            <div class="alert-alert danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group mb-3">
                                            <label for="gambar" class="form-label">gambar</label>
                                            <input type="file" name="gambar"
                                                class="form-control @error('hubungikami') is-invalid @enderror"
                                                placeholder="Masukkan gambar">
                                        </div>
                                        @error('gambar')
                                            <div class="alert-alert danger">{{ $message }}</div>
                                        @enderror
                                        <div class="modal-footer">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="submit" class="btn btn-primary" id="add-btn">Tambah
                                                    Kontak</button>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <form enctype="multipart/form-data"
                                        action="{{ route('hubungikami.update', $hubungiKami->id) }}" method="POST">
                                        @csrf
                                        {{ method_field('PATCH') }}
                                        <div class="modal-body">

                                            <div class="form-group mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" name="nama"
                                                    class="form-control @error('hubungikami') is-invalid @enderror"
                                                    placeholder="Masukkan Nama" value="{{ $hubungiKami->nama }}">
                                            </div>
                                            @error('nama')
                                                <div class="alert-alert danger">{{ $message }}</div>
                                            @enderror

                                            <div class="form-group mb-3">
                                                <label for="jabatan" class="form-label">jabatan</label>
                                                <input type="text" name="jabatan"
                                                    class="form-control @error('hubungikami') is-invalid @enderror"
                                                    placeholder="Masukkan jabatan"
                                                    value="{{ $hubungiKami->jabatan }}">
                                            </div>
                                            @error('jabatan')
                                                <div class="alert-alert danger">{{ $message }}</div>
                                            @enderror

                                            <div class="form-group mb-3">
                                                <label for="nomortelepon" class="form-label">nomortelepon</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                                    <input type="number" name="nomortelepon"
                                                        class="form-control @error('hubungikami') is-invalid @enderror"
                                                        placeholder="Masukkan nomortelepon"
                                                        value="{{ $hubungiKami->nomortelepon }}">
                                                </div>

                                            </div>
                                            @error('nomortelepon')
                                                <div class="alert-alert danger">{{ $message }}</div>
                                            @enderror

                                            <div class="form-group mb-3">
                                                <label for="gambar" class="form-label">gambar</label>
                                                <input type="file" name="gambar"
                                                    class="form-control @error('hubungikami') is-invalid @enderror"
                                                    placeholder="Masukkan gambar" value="{{ $hubungiKami->gambar }}">
                                            </div>
                                            @error('gambar')
                                                <div class="alert-alert danger">{{ $message }}</div>
                                            @enderror
                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" class="btn btn-primary" id="add-btn">Ubah
                                                        Perangkat Desa</button>
                                                </div>
                                            </div>
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
