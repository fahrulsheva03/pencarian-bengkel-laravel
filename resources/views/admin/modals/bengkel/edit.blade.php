@foreach ($datas as $data)
    <form action="{{ route('update.bengkel', $data->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="modal fade" id="modalEdit{{ $data->id }}">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Edit Bengkel</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Bengkel</label>
                                    <input type="text" required name="nama_bengkel" class="form-control"
                                        value="{{ $data->nama_bengkel }}">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" required name="alamat" class="form-control"
                                        value="{{ $data->alamat }}">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" required name="keterangan" class="form-control"
                                        value="{{ $data->keterangan }}">
                                </div>
                                <div class="form-group">
                                    <label>Peta</label>
                                    <input type="text" required name="peta" class="form-control"
                                        value="{{ $data->peta }}">
                                </div>

                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar" class="form-control"
                                        value="{{ $data->gambar }}"
                                        onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                <div class="mt-3"> <img src="{{ asset($data->gambar) }}" width="300" alt=""
                                        id="output">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary mb-3" type="submit">Ubah</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
