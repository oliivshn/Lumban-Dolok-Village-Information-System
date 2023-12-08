<x-web-layout title="berita">
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
                                            <h5 class="card-title mb-0">Berita Terbaru</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        @auth
                                            <div class="hstack gap-2">
                                                <a type="button" class="btn btn-primary add-btn"
                                                    href="{{ route('berita.create') }}"><i
                                                        class="ri-add-line align-bottom me-1"></i>Tambah Berita</a>
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
                                                <th class="sort" data-sort="No">No</th>
                                                <th class="sort" data-sort="JudulBerita">Judul Berita</th>
                                                <th class="sort" data-sort="Deskripsi">Deskripsi</th>
                                                @auth
                                                    <th class="sort" data-sort="Action">Action</th>
                                                @endauth
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            @foreach ($berita as $item)
                                                <tr>
                                                    <td class="no">{{ $loop->iteration }}</td>
                                                    <td class="judulberita">{{ $item->judulberita }}</td>
                                                    <td class="deskripsi">{{ $item->deskripsi }}</td>
                                                    @auth
                                                        <td class="action">
                                                            <div class="btn-group" role="group">
                                                                <a href="{{ route('berita.edit', $item->id) }}"
                                                                    class="btn btn-primary">
                                                                    <i class="ri-edit-line align-bottom"></i>
                                                                </a>
                                                                <a href="javascript:;" class="btn btn-danger"
                                                                    onclick="hapus('{{ route('berita.destroy', $item->id) }}')">
                                                                    <i class="ri-delete-bin-line align-bottom"></i>
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
