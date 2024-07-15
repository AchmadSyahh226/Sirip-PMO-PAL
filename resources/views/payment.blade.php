@extends('layouts.main')

@section('content')
<main class="container">
    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">

            {{-- Judul Menu --}}
            <div class="pb-3">
                <h3>Data Tipe Payment</h3>
             </div>

            <!-- FORM PENCARIAN -->
            <div class="pb-3">
              <form class="d-flex" action="{{ url('/payment-master') }}" method="get">
                  <input class="form-control me-1" type="search" name="search" value="{{ Request::get('search') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                  <button class="btn btn-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
              </form>
            </div>

            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
              <a href='session/payment/create' class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus"></i> Tambah Data</a>
            </div>

            <!-- MODAL -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action='{{ url("session/payment")}}' method='post'>
                        @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="code_payment" class="col-sm col-form-label">Kode Payment</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" name='code_payment' id="code_payment">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="type_payment" class="col-sm col-form-label">Tipe Payment</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" name='type_payment' id="type_payment">
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
                        <th class="col-md-3">Kode Payment</th>
                        <th class="col-md-4">Tipe Payment</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->code_payment }}</td>
                        <td>{{ $item->type_payment }}</td>
                        <td>
                            <!-- <a href='' class="btn btn-primary btn-sm mb-2">👁️Detail</a> -->
                            <a href='payment/edit/{{ $item->id }}' class="btn btn-warning btn-sm mb-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <a href='payment/delete/{{ $item->id }}' class="btn btn-danger btn-sm mb-2" data-confirm-delete="true"><i class="fa-solid fa-trash"></i> Hapus</a>
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
