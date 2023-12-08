<x-web-layout title="sarana">
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
                                            <h5 class="card-title mb-0">Sarana Dan Prasarana</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        @auth
                                            <div class="hstack gap-2">
                                                <a type="button" class="btn btn-primary add-btn"
                                                    href="{{ route('sarana.create') }}"><i
                                                        class="ri-add-line align-bottom me-1"></i>Tambah Sarana &
                                                    Prasarana</a>
                                            </div>
                                        @endauth
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div>
                                <div class="table-responsive table-card mb-1">
                                    <table class="table align-middle" id="customerTable">
                                        <thead class="table-light text-muted">
                                            <tr>
                                                <th class="sort" data-sort="no">No</th>
                                                <th class="sort" data-sort="jenis">Jenis</th>
                                                <th class="sort" data-sort="jumlah">Jumlah</th>
                                                @auth
                                                    <th class="sort" data-sort="action">Action</th>
                                                @endauth
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            @foreach ($sarana as $item)
                                                <tr>
                                                    <td class="no">{{ $loop->iteration }}</td>
                                                    <td class="Nama_Kegiatan">{{ $item->jenis }}</td>
                                                    <td class="date">{{ $item->jumlah }}</td>
                                                    @auth
                                                        <td class="action">
                                                            <div class="btn-group" role="group">
                                                                <a href="{{ route('sarana.edit', $item->id) }}"
                                                                    class="btn btn-primary">
                                                                    <i class="ri-edit-line"></i>
                                                                </a>
                                                                <a href="javascript:;" class="btn btn-danger"
                                                                    onclick="hapus('{{ route('sarana.destroy', $item->id) }}')">
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
    <!-- End Page-content -->
</x-web-layout>
