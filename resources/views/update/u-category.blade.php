@extends('layouts.main')

@section('content')
<main class="container">

        <!-- START FORM -->
       <form action='{{ url("category/update/$data->id")}}' method='post'>
            @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            {{-- Judul Menu --}}
            <div class="pb-3">
                <h3> >> Edit Data Kategori</h3>
            </div>
            <div class="mb-3 row">
                <label for="code_category" class="col-sm-2 col-form-label">Kode Kategori</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='name_category' id="name_category" value="{{ $data->code_category }}" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="name_category" class="col-sm-2 col-form-label">Nama Kategori</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='name_category' id="name_category" value="{{ $data->name_category }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ket_category" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='ket_category' id="ket_category" value="{{ $data->ket_category }}">
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
