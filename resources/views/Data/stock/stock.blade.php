@extends('template')
@section('title')
    stock
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>stock</h1>
        </div>
        <div class="row">
            <div class="col">
              <div class="card">
                <div class="row">
                    <div class="card-header">
                        <div class="col">
                            <h4>Data table</h4>
                        </div>
                        <div class="col text-right">
                            <a href="{{ url('stock/create') }}" class="btn btn-info">
                              <li class="fa fa-plus"></li> Tambah
                            </a>
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
                    <table class="table table-striped text-center" id="table1">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">nama</th>
                          <th scope="col">stock</th>
                          <th scope="col">tg_update</th>
                          <th scope="col">supplier</th>
                          <th scope="col">harga</th>
                          <th scope="col">action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($stock as $item)
                          <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>{{ tanggal_indo($item->tgl_update) }}</td>
                            <td>{{ $item->supplier }}</td>
                            <td>{{ indo_currency($item->harga) }}</td>
                            <td>
                              <div class="row">
                                <a href="{{ url('stock/'.$item->id.'/edit' ) }}" class="btn btn-primary">
                                  update
                                </a>
                                <a href="{{ url('stock/'.$item->id.'/pakai' ) }}" class="btn btn-warning">
                                  pakai
                                </a>
                                <form action="{{ url('stock/'.$item->id) }}" method="post" onsubmit="return confirm('yakin hapus data')">
                                  @method('DELETE')
                                  @csrf
                                  <button class="btn btn-danger">
                                      hapus
                                  </button>
                                </form>
                              </div>
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
@endsection