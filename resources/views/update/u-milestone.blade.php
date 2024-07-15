@extends('layouts.main')

@section('content')
<main class="container">

        <!-- START FORM -->
       <form action='{{ url("milestone/master/update/$data->id")}}' method='post'>
            @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            {{-- Judul Menu --}}
            <div class="pb-3">
                <h3> >> Edit Data Milestone</h3>
            </div>
            <div class="mb-3 row">
                <label for="name_milestone" class="col-sm-2 col-form-label">Nama Milestone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='name_milestone' id="name_milestone" value="{{ $data->name_milestone }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="percent_milestone" class="col-sm-2 col-form-label">Persen</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='percent_milestone' id="percent_milestone" value="{{ $data->percent_milestone }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ket_milestone" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='ket_milestone' id="ket_milestone" value="{{ $data->ket_milestone }}">
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
