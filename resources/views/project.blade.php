@extends('layouts.main')

@section('content')
<main class="container">
        <!-- START DATA -->
        {{-- {{ json_encode($view_data) }}; --}}
        <div class="my-3 p-3 bg-body rounded shadow-sm">

                {{-- Judul Menu --}}
                <div class="pb-3">
                    <h3>Data Proyek</h3>
                </div>

                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('/project-master') }}" method="get">
                      <input class="form-control me-1" type="search" name="search" value="{{ Request::get('search') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i>  Cari</button>
                  </form>
                </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='session/project/create' class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus"></i> Tambah Data</a>
                </div>

                <!-- MODAL -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Proyek</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action='{{ url("session/project")}}' method='post'>
                            @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="code_project" class="col-sm col-form-label">Kode Proyek</label>
                                <div class="col-sm">
                                    <input type="text" class="form-control" name='code_project' id="code_project">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="name_project" class="col-sm col-form-label">Nama Proyek</label>
                                <div class="col-sm">
                                    <input type="text" class="form-control" name='name_project' id="name_project">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="ket_project" class="col-sm col-form-label">Keterangan</label>
                                <div class="col-sm">
                                    <input type="text" class="form-control" name='ket_project' id="ket_project">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                <!-- TUTUP MODAL -->

                <!-- TABEL -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">ID</th>
                            <th class="col-md-3">Kode Proyek</th>
                            <th class="col-md-4">Nama Proyek</th>
                            <th class="col-md-2">Keterangan</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->code_project }}</td>
                            <td>{{ $item->name_project }}</td>
                            <td>{{ $item->ket_project }}</td>
                            <td>
                                {{-- <a href='project/detail/{{ $item->id }}' class="btn btn-primary btn-sm mb-2"><i class="fa-solid fa-eye"></i> Detail</a> --}}
                                <a href='project/edit/{{ $item->id }}' class="btn btn-warning btn-sm mb-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <a href='project/delete/{{ $item->id }}' class="btn btn-danger btn-sm mb-2"><i class="fa-solid fa-trash"></i> Hapus</a>
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
