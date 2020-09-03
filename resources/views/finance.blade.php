@extends('template')
@section('title')
    finance
@endsection

@section('content')
      <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>finance</h1>
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
                          <th scope="col">keterangan</th>
                          <th scope="col">jumlah</th>
                          <th scope="col">t_masuk</th>
                          <th scope="col">t_keluar</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($finance as $item)
                          <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ tanggal_indo($item->tgl) }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>{{ indo_currency($item->t_masuk) }}</td>
                            <td>{{ indo_currency($item->t_keluar) }}</td>
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





