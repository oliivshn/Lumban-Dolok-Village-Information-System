<x-web-layout title="datapenduduk">
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
                                            <h5 class="card-title mb-0">Data Penduduk</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        @auth
                                            <div class="hstack gap-2">
                                                <a type="button" class="btn btn-primary add-btn"
                                                    href="{{ route('datapenduduk.create') }}">
                                                    <i class="ri-add-line align-bottom me-1"></i>
                                                    Tambah Data
                                                </a>
                                            </div>
                                        @endauth
                                    </div>
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

                                                <th class="sort" data-sort="no">No</th>
                                                <th class="sort" data-sort="dusun">Dusun</th>
                                                <th class="sort" data-sort="nama">Nama</th>
                                                <th class="sort" data-sort="alamat">Alamat</th>
                                                <th class="sort" data-sort="nomortelepon">NomorTelepon</th>
                                                <th class="sort" data-sort="jeniskelamin">JenisKelamin</th>
                                                @auth
                                                    <th class="sort" data-sort="action">Action</th>
                                                @endauth
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            @foreach ($datapenduduk as $item)
                                                <tr>
                                                    <td class="no">{{ $loop->iteration }}</td>
                                                    <td class="dusun">{{ $item->dusun->name }}</td>
                                                    <td class="nama">{{ $item->nama }}</td>
                                                    <td class="date">{{ $item->alamat }}</td>
                                                    <td class="Date">{{ $item->nomortelepon }}</td>
                                                    <td class="Date">{{ $item->jeniskelamin }}</td>
                                                    @auth
                                                        <td class="action">
                                                            <div class="btn-group" role="group">
                                                                <a href="{{ route('datapenduduk.edit', $item->id) }}"
                                                                    class="btn btn-primary">
                                                                    <i class="ri-edit-line align-bottom me-1"></i>
                                                                </a>
                                                                <a href="javascript:;" class="btn btn-danger"
                                                                    onclick="hapus('{{ route('datapenduduk.destroy', $item->id) }}')">
                                                                    <i class="ri-delete-bin-line align-bottom me-1"></i>
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
</x-web-layout>
