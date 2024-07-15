@extends('layouts.main')

@section('content')
<main class="container">
    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">

            {{-- Judul Menu --}}
            <div class="pb-3">
                <h3>Data Milestone</h3>
             </div>

            <!-- FORM PENCARIAN -->
            <div class="pb-3">
              <form class="d-flex" action="milestone-master" method="get">
                  <input class="form-control me-1" type="search" name="search" value="{{ Request::get('search') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                  <button class="btn btn-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
              </form>
            </div>

            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
              <a href='session/milestone/create' class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus"></i> Tambah Data</a>
            </div>

            <!-- MODAL -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Milestone</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action='{{ url("session/milestone-master")}}' method='post'>
                        @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name_milestone" class="col-sm col-form-label">Nama Milestone</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" name='name_milestone' id="name_milestone">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="percent_milestone" class="col-sm col-form-label">Persen</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" name='percent_milestone' id="percent_milestone">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="ket_milestone" class="col-sm col-form-label">Keterangan</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" name='ket_milestone' id="ket_milestone">
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

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">ID</th>
                        <th class="col-md-4">Nama Milestone</th>
                        <th class="col-md-2">Persen Milestone</th>
                        <th class="col-md-2">Keterangan</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name_milestone }}</td>
                        <td>{{ $item->percent_milestone }}</td>
                        <td>{{ $item->ket_milestone }}</td>
                        <td>
                            <a href='{{ url("milestone/master/edit/$item->id") }}' class="btn btn-warning btn-sm mb-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <a href='{{ url("milestone/master/del/$item->id") }}' class="btn btn-danger btn-sm mb-2" data-confirm-delete="true"><i class="fa-solid fa-trash"></i> Hapus</a>
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
