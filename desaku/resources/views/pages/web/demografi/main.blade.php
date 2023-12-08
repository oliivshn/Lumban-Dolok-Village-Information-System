<x-web-layout title="demografi">
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="customerList">
                            <div class="card-header border-bottom-dashed">
                                <div class="row g-4 align-items-center">
                                    <div class="col-sm">
                                        <div>
                                            <h5 class="card-title mb-0">Demografi</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        @auth
                                            <div class="hstack gap-2">
                                                <a type="button" class="btn btn-primary add-btn"
                                                    href="{{ route('demografi.create') }}">
                                                    <i class="ri-add-line align-bottom me-1"></i>
                                                    Tambah Demografi
                                                </a>
                                            </div>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                            @auth
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            @endauth
                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-card mb-1">
                                        <table class="table align-middle" id="customerTable">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th class="sort" data-sort="nama_dusun">No</th>
                                                    <th class="sort" data-sort="nama_dusun">Nama Dusun</th>
                                                    <th class="sort" data-sort="jumlah_KK">Jumlah KK</th>
                                                    <th class="sort" data-sort="jumlah_laki_laki">Jumlah Laki
                                                        Laki
                                                    </th>
                                                    <th class="sort" data-sort="jumlah_perempuan">Jumlah
                                                        Perempuan
                                                    </th>
                                                    <th class="sort" data-sort="total_jiwa">Total</th>
                                                    @auth
                                                        <th class="sort" data-sort="action">Action</th>
                                                    @endauth
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($demografi as $item)
                                                    <tr>
                                                        <td class="no">{{ $loop->iteration }}</td>
                                                        <td class="nama_dusun">{{ $item->dusun->nama }}</td>
                                                        <td class="jumlah_KK">{{ $item->jumlah_KK }}</td>
                                                        <td class="jumlah_laki_laki">
                                                            {{ $item->dusun->dataPenduduk->where('jeniskelamin', 'Laki-laki')->count() }}
                                                        </td>
                                                        <td class="jumlah_perempuan">
                                                            {{ $item->dusun->dataPenduduk->where('jeniskelamin', 'Perempuan')->count() }}
                                                        </td>
                                                        <td class="total_jiwa">
                                                            {{ $item->dusun->dataPenduduk->count() }}
                                                        </td>
                                                        @auth
                                                            <td class="action">
                                                                <div class="btn-group" role="group">
                                                                    <a href="{{ route('demografi.edit', $item->id) }}"
                                                                        class="btn btn-primary">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:;" class="btn btn-danger"
                                                                        onclick="hapus('{{ route('demografi.destroy', $item->id) }}')">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        @endauth
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-web-layout>
