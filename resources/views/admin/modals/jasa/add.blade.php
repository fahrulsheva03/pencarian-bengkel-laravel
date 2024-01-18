<form action="{{ route('store.jasa') }}" method="POST">
    @csrf
    <div class="modal fade" id="modalAdd">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Tambah Jasa</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Jasa</label>
                                <input type="text" required name="nama_jasa" class="form-control">
                            </div>

                            {{-- <div class="form-group">
                                <label>Id Bengkel</label>
                                <input type="text" required name="id_bengkel" class="form-control">
                            </div> --}}

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary mb-3" type="submit">Tambah</button>
                </div>
            </div>
        </div>
    </div>

</form>
