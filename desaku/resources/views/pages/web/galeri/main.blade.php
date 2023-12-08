<x-web-layout title="Galeri">
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
                                            <h5 class="card-title mb-0">Galeri Desa</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        @auth
                                            <div class="hstack gap-2">
                                                <a type="button" class="btn btn-primary add-btn"
                                                    href="{{ route('galeri.create') }}">
                                                    <i class="ri-add-line align-bottom me-1"></i>
                                                    Tambah Galeri
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
                                                <th class="sort">No</th>
                                                <th class="sort">Judul</th>
                                                <th class="sort">Deskripsi</th>
                                                <th class="sort">Gambar</th>
                                                @auth
                                                    <th class="sort">Action</th>
                                                @endauth
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            @foreach ($galeri as $item)
                                                <tr>
                                                    <td class="no">{{ $loop->iteration }}</td>
                                                    <td class="no">{{ $item->nama }}</td>
                                                    <td class="kritik_saran">{{ $item->deskripsi }}</td>
                                                    <td class="kritik_saran"><img
                                                            src="{{ asset('asset/gambar/' . $item->gambar) }}" alt=""
                                                            style="width:400px;height:250px"></td>
                                                    @auth
                                                        <td>
                                                            <div class="btn-group" role="group">
                                                                <a href="{{ route('galeri.edit', $item->id) }}"
                                                                    class="btn btn-primary">
                                                                    <i class="ri-edit-line"></i>
                                                                </a>
                                                                <a href="javascript:;"
                                                                    onclick="hapus('{{ route('galeri.destroy', $item->id) }}')"
                                                                    class="btn btn-danger delete-btn">
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
</x-web-layout>
