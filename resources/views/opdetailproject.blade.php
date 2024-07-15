@extends('layouts.main')

@section('content')
<main class="container">
    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">

            {{-- JUDUL MENU --}}
            <div class="pb-3">
                <h3>Detail Proyek</h3>
             </div>

            <!-- FORM PENCARIAN -->
            <div class="pb-3">
              <form class="d-flex" action="{{ url('project/select') }}" method="get">
                  <input class="form-control me-1" type="search" name="search" value="{{ Request::get('search') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                  <button class="btn btn-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
              </form>
            </div>

            <!-- TOMBOL IMPORT EXCEL-->
            <div class="pb-3">
                <a href='#' class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropImp"><i class="fa-solid fa-file-excel"></i> Import Excel</a>
            </div>

            <!-- IMPORT EXCEL MODAL -->
            <div class="modal fade" id="staticBackdropImp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Import Excel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action='{{ url("d-project/imp-excel")}}' method='post' enctype="multipart/form-data">
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

            {{-- TABEL PROYEK --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-3">Kode Proyek</th>
                        <th class="col-md-3">Nama Proyek</th>
                        <th class="col-md-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->code_project }}</td>
                        <td>{{ $item->name_project }}</td>
                        <td>
                            <a href='detail/{{ $item->id }}' class="btn btn-primary btn-sm mb-2"><i class="fa-solid fa-eye"></i> Detail</a>
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
