@extends('layouts.main')

@section('content')
<main class="container">

        <!-- START FORM -->
       <form action='{{ url("payment/update/$data->id")}}' method='post'>
            @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            {{-- Judul Menu --}}
            <div class="pb-3">
                <h3> >> Edit Data Payment</h3>
            </div>
            <div class="mb-3 row">
                <label for="code_payment" class="col-sm-2 col-form-label">Kode Payment</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='code_payment' id="code_payment" value="{{ $data->code_payment }}" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="type_payment" class="col-sm-2 col-form-label">Tipe Payment</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='type_payment' id="type_payment" value="{{ $data->type_payment }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="save" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
        <!-- AKHIR FORM -->
    </main>
@endsection
