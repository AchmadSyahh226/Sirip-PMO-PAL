@extends('layouts.main')
@section('content')
<main class="container">

    <!-- START FORM -->
    <form action='{{ url('report-pdf') }}' method='post'>
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            {{-- MENU TITLE --}}
            <div class="pb-3">
                <h3>Cetak Laporan Cash Out </h3>
            </div>
            <div class="mb-3 row">
                <label for="project_id" class="col-sm-2 col-form-label">Nama Proyek</label>
                <div class="col-sm-10">
                    <select class="form-control" name='project_id' id="project_id">
                        <option value=""> - Pilih - </option>
                        @foreach ($project as $item)
                        <option value="{{ $item->id }}">{{ $item->name_project }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="material_id" class="col-sm-2 col-form-label">Nama Material</label>
                <div class="col-sm-10">
                    <select class="form-control" name='material_id' id="material_id">
                        <option value=""> - Pilih - </option>
                        @foreach ($material as $item)
                        <option value="{{ $item->id }}">{{ $item->name_material }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- <div class="mb-3 row">
                <label for="budget_currency" class="col-sm-2 col-form-label">Mata Uang Budget</label>
                <div class="col-sm-10">
                    <select class="form-control" name='budget_currency' id="budget_currency">
                        <option value=""> - Pilih - </option>
                        <option value="rp_budget"> IDR </option>
                        <option value="usd_budget"> USD </option>
                        <option value="eur_budget"> EUR </option>
                        <option value="chf_budget"> CHF </option>
                        <option value="sgd_budget"> SGD </option>
                        <option value="gbp_budget"> GBP </option>
                        <option value="nok_budget"> NOK </option>
                    </select>
                </div>
            </div> --}}
            {{-- <div class="mb-3 row">
                <label for="price_currency" class="col-sm-2 col-form-label">Mata Uang Harga Kontrak</label>
                <div class="col-sm-10">
                    <select class="form-control" name='price_currency' id="price_currency">
                        <option value=""> - Pilih - </option>
                        <option value="rp_price_material"> IDR </option>
                        <option value="usd_price_material"> USD </option>
                        <option value="eur_price_material"> EUR </option>
                        <option value="chf_price_material"> CHF </option>
                        <option value="sgd_price_material"> SGD </option>
                        <option value="gbp_price_material"> GBP </option>
                        <option value="nok_price_material"> NOK </option>
                    </select>
                </div>
            </div> --}}
            <div class="mb-3 row">
                <label for="start_date" class="col-sm-2 col-form-label">Tanggal Awal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="start_date" id="start_date">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="end_date" class="col-sm-2 col-form-label">Tanggal Akhir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='end_date' id="end_date">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="submit" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-success" name="submit"><i class="fa-solid fa-print"></i> CETAK</button></div>
            </div>
          </form>
        </div>
        <!-- AKHIR FORM -->
    </main>
@endsection
