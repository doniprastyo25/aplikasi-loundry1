@extends('template')
@section('title')
    konsumen
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>konsumen</h1>
        </div>
        <div class="row">
            <div class="col">
              <div class="card">
                <div class="row">
                    <div class="card-header">
                        <div class="col">
                            <h4>Data table</h4> <i>(*khusus untuk member)</i>
                        </div>
                        <div class="col text-right">
                            <a href="{{ url('konsumen/create') }}" class="btn btn-info">
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
                    <table class="table table-striped" id="table1">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">name</th>
                          <th scope="col">address</th>
                          <th scope="col">telp</th>
                          <th scope="col">kategori</th>
                          <th scope="col">action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($konsumen as $item)
                          <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->telp }}</td>
                            <td>{{ $item->kategori == 5000 ? "member" : "reguler" }}</td>
                            <td class="text-center">
                              <div class="row">
                                <a href="{{ url('konsumen/' .$item->id) }}" class="btn btn-warning">
                                  <i class="fa fa-eye"></i>detail
                                </a>
                                <a href="{{ url('konsumen/'.$item->id.'/edit' ) }}" class="btn btn-primary">
                                  edit
                                </a>
                                <form action="{{ url('konsumen/'.$item->id) }}" method="post" onsubmit="return confirm('yakin hapus data')">
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