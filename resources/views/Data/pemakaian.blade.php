@extends('template')
@section('title')
    Pemakaian
@endsection

@section('content')
      <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Pemakaian</h1>
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
                          <th scope="col">tgl_pakai</th>
                          <th scope="col">barang</th>
                          <th scope="col">jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pemakaian as $item)
                          <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $item->tgl_pakai }}</td>
                            <td>{{ $item->barang }}</td>
                            <td>{{ $item->jumlah }}</td>
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





