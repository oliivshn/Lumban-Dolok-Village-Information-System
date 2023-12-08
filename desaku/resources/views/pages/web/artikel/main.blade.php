<x-web-layout title="artikel">
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
                                            <h5 class="card-title mb-0"> Kegiatan</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        @auth
                                            <div class="hstack gap-2">
                                                <a type="button" class="btn btn-primary add-btn"
                                                    href="{{ route('artikel.create') }}">
                                                    <i class="ri-add-line align-bottom me-1"></i>
                                                    Tambah Kegiatan
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
                                                <th class="sort" data-sort="Nama_kegiatan">No</th>
                                                <th class="sort" data-sort="Nama_kegiatan">Nama Kegiatan</th>
                                                <th class="sort" data-sort="Date">Tanggal</th>
                                                <th class="sort" data-sort="Date">Hari</th>
                                                <th class="sort" data-sort="hour">Jam</th>
                                                <th class="sort" data-sort="Tempat_kegiatan">Tempat Kegiatan
                                                </th>
                                                @auth
                                                    <th class="sort" data-sort="action">Action</th>
                                                @endauth
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            @foreach ($artikel as $item)
                                                <tr>
                                                    <td class="no">{{ $loop->iteration }}</td>
                                                    <td class="Nama_Kegiatan">{{ $item->namakegiatan }}</td>
                                                    <td class="date">
                                                        {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d-m-Y') }}
                                                    </td>
                                                    <td class="Date">{{ $item->hari }}</td>
                                                    <td class="hour">{{ $item->jam }}</td>
                                                    <td class="Tempat_kegiatan">{{ $item->tempatkegiatan }}</td>
                                                    @auth
                                                        <td class="action">
                                                            <div class="btn-group" role="group">
                                                                <a href="{{ route('artikel.edit', $item->id) }}"
                                                                    class="btn btn-primary">
                                                                    <i class="ri-edit-line"></i></a>
                                                                <a href="javascript:;"
                                                                    onclick="hapus('{{ route('artikel.destroy', $item->id) }}')"
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
