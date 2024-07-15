@extends('layouts.main')

@section('content')
<main class="container">
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">

                {{-- Judul Menu --}}
                <div class="pb-3">
                    <h3>Data Material</h3>
                </div>

                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('/material-master') }}" method="get">
                      <input class="form-control me-1" type="search" name="search" value="{{ Request::get('search') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
                  </form>
                </div>

                <!-- TOMBOL TAMBAH, IMPORT, EXPORT DATA -->
                <div class="pb-3">
                  <a href='#' class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropCreate"><i class="fa-solid fa-plus"></i> Tambah Material</a>
                  <a href='import-excel/file' class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-file-excel"></i> Import Excel</a>
                  <a href='export-excel/file' class="btn btn-warning"><i class="fa-solid fa-file-excel"></i> Export Excel</a>
                </div>

                <!-- TAMBAH DATA MODAL -->
                <div class="modal fade" id="staticBackdropCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Material</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action='{{ url("/session/material")}}' method='post'>
                            @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="code_material" class="col-sm col-form-label">Kode Material</label>
                                <div class="col-sm">
                                    <input type="text" class="form-control" name='code_material' id="code_material">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="name_material" class="col-sm col-form-label">Nama Material</label>
                                <div class="col-sm">
                                    <input type="text" class="form-control" name='name_material' id="name_material">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="category_material" class="col-sm col-form-label">Kategori Material</label>
                                <div class="col-sm">
                                    <select class="form-control" name='category_id' id="category_id">
                                        <option value=""> - Pilih - </option>
                                        @foreach ($category as $item)
                                        <option value="{{ $item->id }}"> {{ $item->name_category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="unit_material" class="col-sm col-form-label">Satuan Material</label>
                                <div class="col-sm">
                                    <input type="text" class="form-control" name='unit_material' id="unit_material">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="ket_material" class="col-sm col-form-label">Keterangan</label>
                                <div class="col-sm">
                                    <input type="text" class="form-control" name='ket_material' id="ket_material">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                <!-- TUTUP MODAL -->

                <!-- IMPORT EXCEL MODAL -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Import Excel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action='{{ url("import-excel/file")}}' method='post' enctype="multipart/form-data">
                            @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="file" class="form-control" name='file' id="file" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                <!-- TUTUP MODAL -->

                <!-- MULAI TABEL -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">ID</th>
                            <th class="col-md-1">Kode Material</th>
                            <th class="col-md-2">Nama Material</th>
                            <th class="col-md-2">Kategori</th>
                            <th class="col-md-2">Satuan</th>
                            <th class="col-md-2">Keterangan</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->code_material }}</td>
                            <td>{{ $item->name_material }}</td>
                            <td>{{ $item->category->name_category }}</td>
                            <td>{{ $item->unit_material }}</td>
                            <td>{{ $item->ket_material }}</td>
                            <td>
                                <!-- <a href='' class="btn btn-primary btn-sm mb-2">👁️Detail</a> -->
                                <a href='material/edit/{{ $item->id }}' class="btn btn-warning btn-sm mb-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <a href='material/delete/{{ $item->id }}' class="btn btn-danger btn-sm mb-2"><i class="fa-solid fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="pb-3">
                    <p>Total: {{ $data->total() }} data</p>
                    {{ $data->links() }}
                </div>
          </div>
          <!-- AKHIR DATA -->
          @include('sweetalert::alert')
    </main>
@endsection
