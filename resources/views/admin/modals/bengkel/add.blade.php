<form action="{{ route('store.bengkel') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modalAdd">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Tambah Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Bengkel</label>
                                <input type="text" required name="nama_bengkel" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Alamat </label>
                                <input type="text" required name="alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" required name="keterangan" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Peta</label>
                                <input type="text" required name="peta" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" required name="gambar"
                                    onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])"
                                    class="form-control">
                            </div>


                            {{-- @if ($data->hasFile('gambar'))
                                <div class="mt-3"> <img src="{{ asset($data->gambar) }}" width="300" alt=""
                                        id="output">
                                </div>
                            @endif --}}

                            {{-- <div class="form-group">
                                <label>Kategori</label>
                                <select name="id_kategori" class="form-control">
                                    <option value="">--- Pilih ---</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div> --}}


                            {{-- <div class="form-group">
                                <label>Id Kategori</label>
                                <input type="text" required name="id_kategori" class="form-control">
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
