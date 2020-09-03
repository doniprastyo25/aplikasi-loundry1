@extends('template')
@section('title')
    karyawan
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Karyawan</h1>
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
                            <a href="{{ url('karyawan/create') }}" class="btn btn-info">
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
                          <th scope="col">username</th>
                          <th scope="col">name</th>
                          <th scope="col">alamat</th>
                          <th scope="col">level</th>
                          <th scope="col">action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($user as $item)
                          <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->level }}</td>
                            <td class="text-center">
                              <div class="row">
                                <a href="{{ url('karyawan/' .$item->id) }}" class="btn btn-warning">
                                  <i class="fa fa-eye"></i>detail
                                </a>
                                <a href="{{ url('karyawan/'.$item->id.'/edit' ) }}" class="btn btn-primary">
                                  edit
                                </a>
                                <form action="{{ url('karyawan/'.$item->id) }}" method="post" onsubmit="return confirm('yakin hapus data')">
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