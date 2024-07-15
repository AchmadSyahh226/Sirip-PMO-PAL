@extends('layouts.main')

@section('content')
<main class="container">

<!-- START FORM -->
{{-- <form action='#' method='post'>
    @csrf --}}
    <div class="my-3 p-3 bg-body rounded shadow-sm">

        <!-- TOMBOL TAMBAH DATA -->
        {{-- <div class="pb-3">
            <a href='#' class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropCreate"><i class="fa-solid fa-plus"></i> Tambah Data Milestone</a>
        </div> --}}

        <!-- TAMBAH DATA MODAL -->
        {{-- <div class="modal fade" id="staticBackdropCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Milestone Proyek</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action='{{ url("/session/milestone-project")}}' method='post'>
                    @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="project_id" class="col-sm col-form-label">Proyek</label>
                        <div class="col-sm">
                            <select class="form-control" name='project_id' id="project_id">
                                <option value=""> - Pilih - </option>
                                @foreach ($data_project as $item)
                                <option value="{{ $item->id }}">{{ $item->name_project }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="milestone_id" class="col-sm col-form-label">Milestone</label>
                        <div class="col-sm">
                            <select class="form-control" name='milestone_id' id="milestone_id">
                                <option value=""> - Pilih - </option>
                                @foreach ($data_milestone as $item)
                                <option value="{{ $item->id }}">{{ $item->name_milestone }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="date_milestone" class="col-sm col-form-label">Tanggal Milestone</label>
                        <div class="col-sm">
                            <input type="date" class="form-control" name='date_milestone' id="date_milestone">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="date_real" class="col-sm col-form-label">Tanggal Realisasi</label>
                        <div class="col-sm">
                            <input type="date" class="form-control" name='date_real' id="date_real">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
            </div>
        </div> --}}
        <!-- TUTUP MODAL -->

        {{-- MULAI TABEL --}}
      <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-2">Material</th>
                <th class="col-md-2">Inquiry</th>
                <th class="col-md-2">Quotation</th>
                <th class="col-md-2">Evatek</th>
                <th class="col-md-2">Sign Contract</th>
                <th class="col-md-2">Payment</th>
                <th class="col-md-2">FOB</th>
                <th class="col-md-2">CIF</th>
                <th class="col-md-2">Franco PAL</th>
                <th class="col-md-2">Ready Install</th>
                {{-- <th class="col-md-2">Aksi</th> --}}
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->material->name_material }}</td>
                <td>{{ $item->date_inquiry }}</td>
                <td>{{ $item->date_quotation }}</td>
                <td>{{ $item->date_evatek }}</td>
                <td>{{ $item->date_sign_contract }}</td>
                <td>{{ $item->date_payment }}</td>
                <td>{{ $item->date_fob }}</td>
                <td>{{ $item->date_cif }}</td>
                <td>{{ $item->date_franco }}</td>
                <td>{{ $item->date_instal }}</td>
                {{-- <td>
                    <a href='{{ url("project/milestone/$item->id/edit") }}' class="btn btn-warning btn-sm mb-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    <a href='{{ url("milestone/project/del/$item->id")}}' class="btn btn-danger btn-sm mb-2"><i class="fa-solid fa-trash"></i> Hapus</a>
                </td> --}}
            </tr>
            @endforeach
        </tbody>
        </table>

        <div class="pb-3">
            <p>Total: {{ $data->total() }} data</p>
            {{ $data->links() }}
        </div>
    </div>
    <!-- AKHIR FORM -->

    {{-- @include('sweetalert::alert') --}}
</main>
@endsection
