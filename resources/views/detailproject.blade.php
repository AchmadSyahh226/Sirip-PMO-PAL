@extends('layouts.main')

@section('content')
<main class="container">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- JUDUL MENU -->
        <div class="pb-3">
            <h3>Detail Proyek</h3>
        </div>

        <!-- FORM PENCARIAN -->
        {{-- <div class="pb-3">
          <form class="d-flex" action="{{ $projects->id }}" method="get">
              <input class="form-control me-1" type="search" name="search" value="{{ Request::get('search') }}" placeholder="Masukkan kata kunci" aria-label="Search">
              <button class="btn btn-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
          </form>
        </div> --}}

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
          <a href='#' class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus"></i> Tambah Data</a>
          <a href='#' class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropImp"><i class="fa-solid fa-file-excel"></i> Import Excel</a>
          <a href='{{ url("d-project/exp-excel")}}' class="btn btn-warning"><i class="fa-solid fa-file-excel"></i> Export Excel</a>
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

        <!-- CREATE MODAL -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Transaksi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action='{{ url("session/detailproject")}}' method='post'>
                    @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="date_transaction" class="col-sm col-form-label">Tanggal</label>
                        <div class="col-sm">
                            <input type="date" class="form-control" name='date_transaction' id="date_transaction">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="project_id" class="col-sm-1 col-form-label">Proyek</label>
                        <select class="form-control" name='project_id' id="project_id">
                            <option value=""> - Pilih - </option>
                            @foreach ($project as $item)
                            <option value="{{ $item->id }}">{{ $item->name_project }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="material_id" class="col-sm-1 col-form-label">Material</label>
                        <select class="form-control" name='material_id' id="material_id">
                            <option value=""> - Pilih - </option>
                            @foreach ($material as $item)
                            <option value="{{ $item->id }}">{{ $item->name_material }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="idr_budget" class="col-sm col-form-label">Budget (IDR)</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" name='idr_budget' id="idr_budget">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="usd_budget" class="col-sm col-form-label">Budget (USD)</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" name='usd_budget' id="usd_budget">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="idr_price_material" class="col-sm col-form-label">Harga Kontrak (IDR)</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" name='idr_price_material' id="idr_price_material">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="usd_price_material" class="col-sm col-form-label">Harga Kontrak (USD)</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" name='usd_price_material' id="usd_price_material">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="idr_down_payment" class="col-sm col-form-label">DP (IDR)</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" name='idr_down_payment' id="idr_down_payment">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="usd_down_payment" class="col-sm col-form-label">DP (USD)</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" name='usd_down_payment' id="usd_down_payment">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="idr_lc_skbdn" class="col-sm col-form-label">LC/SKBDN (IDR)</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" name='idr_lc_skbdn' id="idr_lc_skbdn">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="usd_lc_skbdn" class="col-sm col-form-label">LC/SKBDN (USD)</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" name='usd_lc_skbdn' id="usd_lc_skbdn">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="idr_price_warranty" class="col-sm col-form-label">Harga Warranty (IDR)</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" name='idr_price_warranty' id="idr_price_warranty">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="usd_price_warranty" class="col-sm col-form-label">Harga Warranty (USD)</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" name='usd_price_warranty' id="usd_price_warranty">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date_inquiry" class="col-sm col-form-label">Inquiry</label>
                        <div class="col-sm">
                            <input type="date" class="form-control" name='date_inquiry' id="date_inquiry">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date_quotation" class="col-sm col-form-label">Quotation</label>
                        <div class="col-sm">
                            <input type="date" class="form-control" name='date_quotation' id="date_quotation">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date_evatek" class="col-sm col-form-label">Evatek</label>
                        <div class="col-sm">
                            <input type="date" class="form-control" name='date_evatek' id="date_evatek">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date_sign_contract" class="col-sm col-form-label">Sign Contract</label>
                        <div class="col-sm">
                            <input type="date" class="form-control" name='date_sign_contract' id="date_sign_contract">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date_payment" class="col-sm col-form-label">Payment</label>
                        <div class="col-sm">
                            <input type="date" class="form-control" name='date_payment' id="date_payment">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date_fob" class="col-sm col-form-label">FOB</label>
                        <div class="col-sm">
                            <input type="date" class="form-control" name='date_fob' id="date_fob">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date_cif" class="col-sm col-form-label">CIF</label>
                        <div class="col-sm">
                            <input type="date" class="form-control" name='date_cif' id="date_cif">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date_franco" class="col-sm col-form-label">Franco PAL</label>
                        <div class="col-sm">
                            <input type="date" class="form-control" name='date_franco' id="date_franco">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date_instal" class="col-sm col-form-label">Ready to Install</label>
                        <div class="col-sm">
                            <input type="date" class="form-control" name='date_instal' id="date_instal">
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

        <!-- TABEL DETAIL PROYEK -->
        <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    {{-- JUDUL TABEL --}}
                    <th class="col-md-1">ID</th>
                    <th class="col-md-1">Tanggal</th>
                    <th class="col-md-2">Nama Material</th>
                    <th class="col-md-2">Budget IPP</th>
                    <th class="col-md-2">Kontrak</th>
                    <th class="col-md-2">DP</th>
                    <th class="col-md-2">LC/SKBDN</th>
                    <th class="col-md-2">Warranty</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    {{-- ISI TABEL --}}
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->date_transaction }}</td>
                    <td>{{ $item->material->name_material }}</td>
                    <td>{{ $item->formatRupiah('idr_budget') }}
                        <br>{{ $item->formatUSD('usd_budget') }}
                    </td>
                    <td>{{ $item->formatRupiah('idr_price_material') }}
                        <br>{{ $item->formatUSD('usd_price_material') }}
                    </td>
                    <td>{{ $item->formatRupiah('idr_down_payment') }}
                        <br>{{ $item->formatUSD('usd_down_payment') }}
                    </td>
                    <td>{{ $item->formatRupiah('idr_lc_skbdn') }}
                        <br>{{ $item->formatUSD('usd_lc_skbdn') }}
                    </td>
                    <td>{{ $item->formatRupiah('idr_price_warranty') }}
                        <br>{{ $item->formatUSD('usd_price_warranty') }}
                    </td>

                    {{-- TOMBOL EDIT & HAPUS --}}
                    <td>
                        <a href='{{ url("project/detail/edit/$item->id") }}' class="btn btn-warning btn-sm mb-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        <a href='{{ url("project/detail/del/$item->id") }}' class="btn btn-danger btn-sm mb-2"><i class="fa-solid fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- TUTUP TABEL DETAIL PROYEK -->

        <div class="pb-3">
            <p>Total: {{ $data->total() }} data</p>
            {{ $data->links() }}
        </div>
    </div>
</main>
@endsection

