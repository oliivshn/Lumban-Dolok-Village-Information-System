<x-web-layout title="">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModalLabel">Sarana&Prasarana</h5>
                            </div>
                            @if(!$sarana->id)
                            <form action="{{ route('sarana.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" id="id-field">

                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">jenis</label>
                                        <input type="text" name="jenis" class="form-control" placeholder="" required="">
                                    </div>
                    
                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">jumlah</label>
                                        <textarea name="jumlah" class="form-control" placeholder="" required=""></textarea>
                                    </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="submit" class="btn btn-primary" id="add-btn">Tambah Sarana&Prasarana</button>
                                        
                                    </div>
                                </div>
                            </form>
                            @else
                            <form action="{{ route('sarana.update',$sarana->id) }}" method="POST">
                                @csrf
                                {{ method_field('PATCH') }}
                                <div class="modal-body">
                                    <input type="hidden" id="id-field">

                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label"></label>
                                        <input type="text" name="jenis" class="form-control" placeholder="" required="" value="{{$sarana->jenis}}">
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">jumlah</label>
                                        <textarea name="jumlah" class="form-control">{{$sarana->jumlah}}</textarea>
                                    </div>
                    
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="submit" class="btn btn-primary" id="add-btn">Edit Sarana&Prasarana</button>
                                        
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