@extends('template')
@section('title')
    pembelian
@endsection

@section('content')
      <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>pembelian</h1>
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
                          <th scope="col">tgl</th>
                          <th scope="col">totali</th>
                          <th scope="col">supplier</th>
                          <th scope="col">barang</th>
                          <th scope="col">totalh</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pembelian as $item)
                          <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ tanggal_indo($item->tgl) }}</td>
                            <td>{{ $item->totali }}</td>
                            <td>{{ $item->supplier }}</td>
                            <td>{{ $item->barang }}</td>
                            <td>{{ indo_currency($item->totalh) }}</td>
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





