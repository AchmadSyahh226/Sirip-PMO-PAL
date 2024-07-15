@extends('layouts.main')

@section('content')
<main class="container">

        <!-- START FORM -->
       <form action='{{ url('project/milestone/{id}/update') }}' method='post'>
            @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            {{-- Judul Menu --}}
            <div class="pb-3">
                <h3> >> Edit Data Milestone Proyek</h3>
            </div>
            <div class="mb-3 row">
                <label for="project_id" class="col-sm-2 col-form-label">Proyek</label>
                <div class="col-sm-10">
                    <select class="form-control" name='project_id' id="project_id">
                        <option value="{{ $data->first() }}">{{ $data->first() }}</option>
                        @foreach ($projects as $item)
                        <option value="{{ $item->id }}">{{ $item->name_project }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="name_milestone" class="col-sm-2 col-form-label">Nama Milestone</label>
                <div class="col-sm-10">
                    <select class="form-control" name='name_milestone' id="name_milestone">
                        <option value="">  </option>
                        @foreach ($milestones as $item)
                        <option value="{{ $item->id }}">{{ $item->name_milestone }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="date_milestone" class="col-sm-2 col-form-label">Tanggal Milestone</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='date_milestone' id="date_milestone" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="date_real" class="col-sm-2 col-form-label">Tanggal Realisasi</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='date_real' id="date_real" value="">
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
