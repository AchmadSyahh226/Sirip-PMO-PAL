@extends('layouts.main')

@section('content')
<main class="container">
    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">

            {{-- JUDUL MENU --}}
            <div class="pb-3">
                <h3>Milestone Proyek</h3>
             </div>

            <!-- FORM PENCARIAN -->
            <div class="pb-3">
              <form class="d-flex" action="{{ url('/milestone-project') }}" method="get">
                  <input class="form-control me-1" type="search" name="search" value="{{ Request::get('search') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                  <button class="btn btn-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
              </form>
            </div>

            {{-- TABEL PROYEK --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-3">Kode Proyek</th>
                        <th class="col-md-3">Nama Proyek</th>
                        <th class="col-md-3">Milestone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->code_project }}</td>
                        <td>{{ $item->name_project }}</td>
                        <td>
                            <a href='{{ url("project/$item->id/milestone") }}' class="btn btn-primary btn-sm mb-2"><i class="fa-solid fa-eye"></i> Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="pb-3">
                <p>Total: {{ $data->total() }} data</p>
                {{ $data->links() }}
            </div>
      </div>
      <!-- AKHIR DATA -->

      @include('sweetalert::alert')
</main>
@endsection
