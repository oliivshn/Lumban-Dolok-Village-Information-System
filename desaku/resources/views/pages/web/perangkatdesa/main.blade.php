<x-web-layout title="Perangkat Desa">
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
                                            <h5 class="card-title mb-0">Perangkat Desa</h5>
                                        </div>
                                    </div>
                                    @auth
                                        <div class="col-sm-auto">
                                            <div class="hstack gap-2">
                                                <a type="button" class="btn btn-primary add-btn"
                                                    href="{{ route('perangkatdesa.create') }}">
                                                    <i class="ri-add-line align-bottom me-1"></i>
                                                    Tambah Perangkat Desa
                                                </a>
                                            </div>
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
                                                <th class="sort">No</th>
                                                <th class="sort">Nama</th>
                                                <th class="sort">Jabatan</th>
                                                <th class="sort">Tanggal Lahir</th>
                                                <th class="sort">Nomor Telepon</th>
                                                <th class="sort">email</th>
                                                <th class="sort">Gambar</th>
                                                @auth
                                                    <th class="sort">Action</th>
                                                @endauth
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            @foreach ($perangkatDesa as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->jabatan }}</td>
                                                    <td>
                                                        {{ \Carbon\Carbon::parse($item->tanggal_lahir)->translatedFormat('d-m-Y') }}
                                                    </td>
                                                    <td>{{ $item->nohp }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td><img src="{{ asset('asset/gambar/' . $item->gambar) }}"
                                                            width="200" height="300"></td>

                                                    @auth
                                                        <td>
                                                            <div class="btn-group" role="group">
                                                                <a href="{{ route('perangkatdesa.edit', $item->id) }}"
                                                                    class="btn btn-primary">
                                                                    <i class="ri-edit-line"></i>
                                                                </a>
                                                                <a href="javascript:;"
                                                                    onclick="hapus('{{ route('perangkatdesa.destroy', $item->id) }}')"
                                                                    class="btn btn-danger">
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
