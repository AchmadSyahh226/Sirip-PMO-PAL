@extends('layouts.main')

@section('content')
<main class="container">

<!-- START FORM -->
<form action='{{ url("project/update/$data->id")}}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        {{-- Judul Menu --}}
        <div class="pb-3">
            <h3> >> Edit Data Proyek</h3>
        </div>
        <div class="mb-3 row">
            <label for="code_project" class="col-sm-2 col-form-label">Kode Project</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='code_project' id="code_project" value="{{ $data->code_project }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name_project" class="col-sm-2 col-form-label">Nama Project</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='name_project' id="name_project" value="{{ $data->name_project }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="ket_project" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='ket_project' id="ket_project" value="{{ $data->ket_project }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="submit" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
      </form>
    </div>
    <!-- AKHIR FORM -->
</main>
@endsection
