@extends('layouts.main')

@section('content')
<main class="container">
        <!-- START FORM -->
       <form action='{{ url("material/update/$data->id")}}' method='post'>
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            {{-- Judul Menu --}}
            <div class="pb-3">
                <h3> >> Edit Data Material</h3>
            </div>
            <div class="mb-3 row">
                <label for="code_material" class="col-sm-2 col-form-label">Kode Material</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='code_material' id="code_material" value="{{ $data->code_material }}" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="name_material" class="col-sm-2 col-form-label">Nama Material</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='name_material' id="name_material" value="{{ $data->name_material }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="category_material" class="col-sm-2 col-form-label">Kategori Material</label>
                <div class="col-sm-10">
                    <select class="form-control" name='category_material' id=category_material">
                        <option value=""> - Pilih - </option>
                        @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name_category }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="unit_material" class="col-sm-2 col-form-label">Satuan Material</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='unit_material' id="unit_material" value="{{ $data->unit_material }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ket_material" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='ket_material' id="ket_material" value="{{ $data->ket_material }}">
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
