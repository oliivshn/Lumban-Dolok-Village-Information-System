<x-web-layout title="">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Kegiatan</h5>
                            </div>
                            @if(!$artikel->id)
                            <form action="{{ route('artikel.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" id="id-field">

                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">Nama Kegiatan</label>
                                        <input type="text" name="namakegiatan" class="form-control @error('namakegiatan') is-invalid @enderror" id="namakegiatan" placeholder="Masukkan Nama Kegiatan">
                                    </div>
                                    @error('namakegiatan')
                                            <div class="alert-alert danger">{{ $message}}</div>
                                            @enderror
                    
                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="tanngal" placeholder="">
                                    </div>
                                    @error('tanggal')
                                    <div class="alert-alert danger">{{ $message}}</div>
                                    @enderror
                    
                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label">Hari</label>
                                        <input type="text" name="hari" class="form-control @error('hari') is-invalid @enderror" id="hari" placeholder="Masukkan Hari">
                                    </div>
                                    @error('hari')
                                    <div class="alert-alert danger">{{ $message}}</div>
                                    @enderror
                    
                                    <div class="mb-3">
                                        <label for="date-field" class="form-label">Jam</label>
                                        <input type="time" name="jam" class="form-control flatpickr-input @error('jam') is-invalid @enderror" id="jam" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Select date" >
                                    </div>
                                    @error('jam')
                                    <div class="alert-alert danger">{{ $message}}</div>
                                    @enderror
                    
                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label">Tempat</label>
                                        <input type="text" name="tempatkegiatan" class="form-control @error('tempatkegiatan') is-invalid @enderror" id="tempatkegiatan" placeholder="Tempat Kegiatan">
                                    </div>
                                    @error('tempatkegiatan')
                                    <div class="alert-alert danger">{{ $message}}</div>
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        
                                        <button type="submit" class="btn btn-primary" id="add-btn">Tambah Kegiatan</button>
                                        
                                    </div>
                                </div>
                            </form>
                            @else
                            <form action="{{ route('artikel.update',$artikel->id) }}" method="POST">
                                @csrf
                                {{ method_field('PATCH') }}
                                <div class="modal-body">
                                    <input type="hidden" id="id-field">

                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">Nama Kegiatan</label>
                                        <input type="text" name="namakegiatan" class="form-control" placeholder="Masukkan Nama Kegiatan" value="{{$artikel->namakegiatan}}">
                                    </div>
                    
                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" placeholder="Masukkan Tanggal Kegiatan"value="{{$artikel->tanggal}}">
                                    </div>
                    
                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label">Hari</label>
                                        <input type="text" name="hari" class="form-control" placeholder="Masukkan Nomor Telepon"value="{{$artikel->hari}}">
                                    </div>
                    
                                    <div class="mb-3">
                                        <label for="date-field" class="form-label">Jam</label>
                                        <input type="time" name="jam" class="form-control flatpickr-input" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Select date"value="{{$artikel->jam}}">
                                    </div>
                    
                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label">Tempat</label>
                                        <input type="text" name="tempatkegiatan" class="form-control" placeholder="Masukkan Tempat Kegiatan"value="{{$artikel->tempatkegiatan}}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                    
                                        <button type="submit" class="btn btn-primary" id="add-btn">Edit Kegiatan</button>
                                        
                                    </div>
                                </div>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-web-layout>