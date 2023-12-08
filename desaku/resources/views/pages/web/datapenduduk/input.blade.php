<x-web-layout title="datapenduduk">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                            </div>
                            <div class="card-body">
                                @if (!$datapenduduk->id)
                                    <form action="{{ route('datapenduduk.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="dusun_id">Dusun</label>
                                            <select name="dusun_id" id="dusun_id"
                                                class="form-control @error('dusun_id') is-invalid @enderror">
                                                <option value="">Pilih Dusun</option>
                                                @foreach ($dusun as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                            @error('dusun_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="customername-field" class="form-label">Nama</label>
                                            <input type="text" name="nama"
                                                class="form-control @error('nama') is-invalid @enderror" id="nama"
                                                placeholder="Nama penduduk">
                                            @error('nama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email-field" class="form-label">Alamat</label>
                                            <input type="text" name="alamat"
                                                class="form-control @error('alamat') is-invalid @enderror"
                                                id="alamat" placeholder="Alamat">
                                            @error('alamat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="phone-field" class="form-label">Nomor Telepon</label>
                                            <input type="number" name="nomortelepon"
                                                class="form-control @error('nomortelepon') is-invalid @enderror"
                                                id="nomortelepon" placeholder="Masukkan nomor telepon">
                                            @error('nomortelepon')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="phone-field" class="form-label">Jenis Kelamin</label>
                                            <select name="jeniskelamin" id="jeniskelamin"
                                                class="form-control @error('jeniskelamin') is-invalid @enderror">
                                                <option value="" selected>Pilih Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            @error('jeniskelamin')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary" id="add-btn">Tambah
                                            data</button>
                                    </form>
                                @else
                                    <form action="{{ route('datapenduduk.update', $datapenduduk->id) }}"
                                        method="POST">
                                        @csrf
                                        {{ method_field('PATCH') }}
                                        <div class="form-group mb-3">
                                            <label for="dusun_id">Dusun</label>
                                            <select name="dusun_id" id="dusun_id"
                                                class="form-control @error('dusun_id') is-invalid @enderror">
                                                <option value="0" selected>Pilih Dusun</option>
                                                @foreach ($dusun as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $datapenduduk->dusun_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                            @error('dusun_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="customername-field" class="form-label">Nama</label>
                                            <input type="text" name="nama"
                                                class="form-control @error('nama') is-invalid @enderror" id="nama"
                                                placeholder="Nama penduduk" value="{{ $datapenduduk->nama }}">
                                            @error('nama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email-field" class="form-label">Alamat</label>
                                            <input type="text" name="alamat"
                                                class="form-control @error('alamat') is-invalid @enderror"
                                                id="alamat" placeholder="Alamat"
                                                value="{{ $datapenduduk->alamat }}">
                                            @error('alamat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="phone-field" class="form-label">Nomor Telepon</label>
                                            <input type="number" name="nomortelepon"
                                                class="form-control @error('nomortelepon') is-invalid @enderror"
                                                id="nomortelepon" placeholder="Masukkan nomor telepon"
                                                value="{{ $datapenduduk->nomortelepon }}">
                                            @error('nomortelepon')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="phone-field" class="form-label">Jenis Kelamin</label>
                                            <select name="jeniskelamin" id="jeniskelamin"
                                                class="form-control @error('jeniskelamin') is-invalid @enderror">
                                                <option value="" selected>Pilih Jenis Kelamin</option>
                                                <option value="Laki-laki"
                                                    {{ $datapenduduk->jeniskelamin == 'Laki-laki' ? 'selected' : '' }}>
                                                    Laki-laki</option>
                                                <option value="Perempuan"
                                                    {{ $datapenduduk->jeniskelamin == 'Perempuan' ? 'selected' : '' }}>
                                                    Perempuan</option>
                                            </select>
                                            @error('jeniskelamin')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary" id="add-btn">Ubah
                                            data</button>
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
