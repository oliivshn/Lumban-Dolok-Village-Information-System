<x-web-layout title="Hubungikami">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Hubungi kami</h4>
                            <div class="page-title-right">
                                @auth
                                    <div class="hstack gap-2">
                                        <a type="button" class="btn btn-primary add-btn"
                                            href="{{ route('hubungikami.create') }}">
                                            <i class="ri-add-line align-bottom me-1"></i>
                                            Tambah Kontak
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
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="team-list grid-view-filter row">
                            @foreach ($data as $item)
                                <div class="col">
                                    <div class="card team-box">
                                        <div class="team-cover">
                                            <img src="assets/images/DesaLD.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="card-body p-4">
                                            <div class="row align-items-center team-row">
                                                <div class="col team-settings"></div>
                                                <div class="col-lg-4 col">
                                                    <div class="team-profile-img">
                                                        <div class="avatar img-thumbnail rounded-circle flex-shrink-0">
                                                            <img style="width:100px; height:100px;"
                                                                src="{{ asset('image/' . $item->gambar) }}"
                                                                alt="{{ $item->nama }}"
                                                                class="img-fluid d-block rounded-circle">
                                                        </div>
                                                        <div class="team-content">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                                aria-controls="offcanvasExample">
                                                                <h5 class="fs-16 mb-1">{{ $item->nama }}</h5>
                                                            </a>
                                                            <p class="text-muted mb-0">{{ $item->jabatan }}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col">
                                                    <div class="text-end">
                                                        <a href="https://wa.me/62{{ $item->nomortelepon }}"
                                                            class="btn btn-light view-btn">Hubungi Perangkat Desa
                                                        </a>
                                                    </div>
                                                </div>
                                                @auth
                                                    <div class="d-flex justify-content-center my-2">
                                                        <a href="{{ route('hubungikami.edit', $item->id) }}"
                                                            class="btn btn-outline-info mx-1">
                                                            <i class="ri-edit-line"></i>
                                                        </a>

                                                        <a href="javascript:;"
                                                            onclick="hapus('{{ route('hubungikami.destroy', $item->id) }}')"
                                                            class="btn btn-outline-danger mx-1">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </div>
                                                @endauth

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        ©Kelompok 7 PA1
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
    </div>
    </footer>
    </div>
</x-web-layout>
