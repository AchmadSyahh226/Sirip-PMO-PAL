@extends('layouts.main')

@section('content')
<main class="container">

        <!-- START FORM -->
       <form action='{{ url("project/detail/update/$data->id")}}' method='post'>
            @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            {{-- Judul Menu --}}
            <div class="pb-3">
                <h3> >> Edit Data Detail Proyek</h3>
            </div>
            <div class="mb-3 row">
                <label for="date_transaction" class="col-sm col-form-label">Tanggal Transaksi</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='date_transaction' id="date_transaction" value="{{ $data->date_transaction }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="material_id" class="col-sm-2 col-form-label">Material</label>
                <div class="col-sm-10">
                <select class="form-control" name='material_id' id="material_id">
                    <option value="{{ $data->material->id }}">{{ $data->material->name_material }}</option>
                    @foreach ($materials as $item)
                    <option value="{{ $item->id }}">{{ $item->name_material }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="budget"><strong>Budget IPP</strong></label>
            </div>
            <div class="mb-3 row">
                <label for="idr_budget" class="col-sm col-form-label">IDR</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='idr_budget' id="idr_budget" value="{{ $data->idr_budget }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="usd_budget" class="col-sm col-form-label">USD</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='usd_budget' id="usd_budget" value="{{ $data->usd_budget }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="price_material"><strong>Harga Kontrak</strong></label>
            </div>
            <div class="mb-3 row">
                <label for="idr_price_material" class="col-sm col-form-label">IDR</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='idr_price_material' id="idr_price_material" value="{{ $data->idr_price_material }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="usd_price_material" class="col-sm col-form-label">USD</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='usd_price_material' id="usd_price_material" value="{{ $data->usd_price_material }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="down_payment"><strong>Down Payment (DP)</strong></label>
            </div>
            <div class="mb-3 row">
                <label for="idr_down_payment" class="col-sm col-form-label">IDR</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='idr_down_payment' id="idr_down_payment" value="{{ $data->idr_down_payment }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="usd_down_payment" class="col-sm col-form-label">USD</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='usd_down_payment' id="usd_down_payment" value="{{ $data->usd_down_payment }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="lc_skbdn"><strong>LC/SKBDN</strong></label>
            </div>
            <div class="mb-3 row">
                <label for="idr_lc_skbdn" class="col-sm col-form-label">IDR</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='idr_lc_skbdn' id="idr_lc_skbdn" value="{{ $data->idr_lc_skbdn }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="usd_lc_skbdn" class="col-sm col-form-label">USD</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='usd_lc_skbdn' id="usd_lc_skbdn" value="{{ $data->usd_lc_skbdn }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="price_warranty"><strong>Warranty</strong></label>
            </div>
            <div class="mb-3 row">
                <label for="idr_price_warranty" class="col-sm col-form-label">IDR</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='idr_price_warranty' id="idr_price_warranty" value="{{ $data->idr_price_warranty }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="usd_price_warranty" class="col-sm col-form-label">USD</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='usd_price_warranty' id="usd_price_warranty" value="{{ $data->usd_price_warranty }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="milestone"><strong>Milestone</strong></label>
            </div>
            <div class="mb-3 row">
                <label for="date_inquiry" class="col-sm col-form-label">Inquiry</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='date_inquiry' id="date_inquiry" value="{{ $data->date_inquiry }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="date_quotation" class="col-sm col-form-label">Quotation</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='date_quotation' id="date_quotation" value="{{ $data->date_quotation }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="date_evatek" class="col-sm col-form-label">Evatek</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='date_evatek' id="date_evatek" value="{{ $data->date_evatek }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="date_sign_contract" class="col-sm col-form-label">Sign Contract</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='date_sign_contract' id="date_sign_contract" value="{{ $data->date_sign_contract }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="date_payment" class="col-sm col-form-label">Payment</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='date_payment' id="date_payment" value="{{ $data->date_payment }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="date_fob" class="col-sm col-form-label">FOB</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='date_fob' id="date_fob" value="{{ $data->date_fob }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="date_cif" class="col-sm col-form-label">CIF</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='date_cif' id="date_cif" value="{{ $data->date_cif }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="date_franco" class="col-sm col-form-label">Franco PAL</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='date_franco' id="date_franco" value="{{ $data->date_franco }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="date_instal" class="col-sm col-form-label">Ready to Instal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='date_instal' id="date_instal" value="{{ $data->date_instal }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="save" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
        </form>
    </div>
        <!-- AKHIR FORM -->
    </main>
@endsection
