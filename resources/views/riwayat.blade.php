@extends('template')
@section('title')
    Riwayat
@endsection

@section('content')
      <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Riwayat Transaksi</h1>
        </div>
        <div class="row">
            <div class="col">
              <div class="card">
                <div class="row">
                    <div class="card-header">
                        <div class="col">
                            <h4>Data table</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
                  @endif
                  <div class="table-responsive">
                    <table class="table table-striped" id="table1">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">kategori</th>
                          <th scope="col">berat</th>
                          <th scope="col">tarif</th>
                          <th scope="col">tanggal</th>
                          <th scope="col">konsumen</th>
                          <th scope="col">print</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($transaction as $item)
                          <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->berat }}</td>
                            <td>{{ indo_currency($item->tarif) }}</td>
                            <td>{{ tanggal_indo($item->tanggal) }}</td>
                            <td>{{ $item->konsumen }}</td>
                            <td>
                              <form action="{{ url('riwayat/'  .$item->id) }}" method="GET">
                                @csrf
                                <button class="btn btn-danger">
                                  print
                                </button>
                                <!-- TAMBAHKAN BARIS CODE INI -->
                                {{-- <a href="{{ route('invoice.print', $row->id) }}" class="btn btn-secondary btn-sm">Print</a> --}}
                            </form>
                            </td>
                          </tr>    
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> 
            <div class="section-body">
          </div>
        </section>
    </div>

    {{-- <script>
      $('#table1').dataTable( {
      "order": [[ 0, 'desc' ]]
      } );
    </script> --}}

    <script>
      $(document).ready(function() {
      $('#table1').DataTable( {
        "order": [[ 0, "desc" ]]
          } );
      } );
    </script>
@endsection





