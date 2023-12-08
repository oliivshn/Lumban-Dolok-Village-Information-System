<x-web-layout title="kritik_saran">
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
                                            <h5 class="card-title mb-0">Kritik & Saran</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @auth
                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-card mb-1">
                                        <table class="table align-middle" id="customerTable">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th class="sort" data-sort="No">No</th>
                                                    <th class="sort" data-sort="kritik_saran">Nama Pengirim</th>
                                                    <th class="sort" data-sort="kritik_saran">Kritik & Saran</th>
                                                    <th class="sort" data-sort="kritik_saran">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($kritik as $item)
                                                    <tr>
                                                        <td class="no">{{ $loop->iteration }}</td>
                                                        <td class="kritik_saran">{{ $item->nama }}</td>
                                                        <td class="kritik_saran">{{ $item->kritik_saran }}</td>
                                                        <td>
                                                            <div class="btn-group" role="group">
                                                                <a href="javascript:;"
                                                                    onclick="hapus('{{ route('kritik_saran.destroy', $item->id) }}')"
                                                                    class="btn btn-danger">
                                                                    <i class="ri-delete-bin-line align-bottom me-1"></i>
                                                                    Delete
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-web-layout>
