@extends('template')
@section('title')
    supplier
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>supplier</h1>
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
                    <table class="table table-striped text-center" id="table1">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">nama</th>
                          <th scope="col">alamat</th>
                          <th scope="col">telp</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($supplier as $item)
                          <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->telp }}</td>
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