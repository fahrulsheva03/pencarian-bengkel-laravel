@extends('admin.layouts.index', ['title' => 'Data Bengkel'])
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Bengkel</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="#">Bengkel</a></div>
                    <div class="breadcrumb-item">Data</div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tabel Bengkel</h4>
                            </div>

                            <?php
                            $i = $datas->firstItem();
                            ?>

                            <div class="card-body">

                                <div class="d-flex justify-content-between">

                                    <div class="">

                                        <a href="#" data-toggle="modal" data-target="#modalAdd"
                                            class="btn btn-primary float-left mb-3">+
                                            Tambah Data
                                        </a>
                                    </div>

                                    <form action="{{ route('cari.bengkel') }}" method="GET" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="d-flex">

                                                <input type="text" class="form-control"
                                                    placeholder="Masukkan Pencarian..." name="cari">

                                                <button type="submit" class="btn btn-warning">Cari</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                                <div class="table-responsive">

                                    <table class="table table-striped table-md">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama bengkel</th>
                                            <th>Alamat</th>
                                            <th>Keterangan</th>
                                            <th>Peta</th>
                                            <th>Gambar</th>
                                            {{-- <th>Id Kategori</th> --}}
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $data->nama_bengkel }}</td>
                                                <td>{{ $data->alamat }}</td>
                                                <td>{{ $data->keterangan }}</td>
                                                <td>{{ substr($data->peta, 0, 100) }}</td>

                                                <td>
                                                    <img src="{{ asset($data->gambar) }}" alt="" width="60">
                                                </td>

                                                <td class="d-flex">
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#modalEdit{{ $data->id }}"
                                                        class="btn btn-icon btn-warning">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#modalHapus{{ $data->id }}"
                                                        class="btn btn-icon btn-danger"><i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                @if ($datas->hasPages())
                                    <div class="card-footer">
                                        {{ $datas->links() }}
                                    </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('admin.modals.bengkel.add')
    @include('admin.modals.bengkel.edit')
    @include('admin.modals.bengkel.delete')
@endsection
