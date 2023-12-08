<x-web-layout title="demografi">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-content">
                            <div class="card-header bg-light p-3">
                                <h5 class="modal-title">Tambah Demografi</h5>
                            </div>
                            <div class="card-body">
                                @if (!$demografi->id)
                                    <form action="{{ route('demografi.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="dusun_id" class="form-label">Nama Dusun</label>
                                            <select name="dusun_id" id="dusun_id" class="form-control">
                                                <option value="" selected disabled>Pilih Dusun</option>
                                                @foreach ($dusun as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('dusun_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="jumlah_KK" class="form-label">Jumlah KK</label>
                                            <input type="text" name="jumlah_KK"
                                                class="form-control @error('jumlah_KK') is-invalid @enderror"
                                                id="jumlah_kk" placeholder="Masukkan Jumlah KK">
                                            @error('jumlah_KK')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary" id="add-btn">
                                            Tambah Data
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('demografi.update', $demografi->id) }}" method="POST">
                                        @csrf
                                        {{ method_field('PATCH') }}
                                        <div class="form-group mb-3">
                                            <label for="dusun_id" class="form-label">Nama Dusun</label>
                                            <select name="dusun_id" id="dusun_id" class="form-control">
                                                <option value="" selected disabled>Pilih Dusun</option>
                                                @foreach ($dusun as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $demografi->dusun_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('dusun_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="jumlah_KK" class="form-label">Jumlah KK</label>
                                            <input type="text" name="jumlah_KK"
                                                class="form-control @error('jumlah_KK') is-invalid @enderror"
                                                id="jumlah_kk" placeholder="Masukkan Jumlah KK"
                                                value="{{ $demografi->jumlah_KK }}">
                                            @error('jumlah_KK')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary" id="add-btn">
                                            Ubah Data
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
