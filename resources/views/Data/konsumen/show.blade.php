@extends('template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
            <h1>Tambah Karyawan</h1>
            </div>
        <div class="row">
            <div class="col">
              <div class="card">
                    <div class="row">
                        <div class="card-header">
                            <div class="col">
                                <h4>Isi Form</h4>
                            </div>
                            <div class="col text-right">
                                <a href="{{ url('karyawan') }}" class="btn btn-info">
                                    <li class="fa fa-undo"></li> Kembali
                                </a>
                            </div>
                        </div>
                    </div> 
              </div>
              <div class="card">
                <div class="col-md-onset-4 col-md col-md-offset-4">
                  <div class="card-header">
                    <h4>HTML5 Form Basic</h4>
                  </div>
                  <div class="card-body">
                    <table class="table table-stripped">
                        <tbody>    
                            <tr>
                              <th>Name</th>
                              <td>: {{ $konsuman->name }}</td>
                            </tr>    
                            <tr>
                              <th>Alamat</th>
                              <td>: {{ $konsuman->address }}</td>
                            </tr>
                            <tr>
                              <th>telpon</th>
                              <td>: {{ $konsuman->telp }}</td>
                            </tr>    
                            <tr>
                              <th>Kategori</th>
                              <td>: {{ $konsuman->kategori == 5000 ? "member" : "reguler" }} ({{ $konsuman->kategori }})</td>
                            </tr>    
                            <tr>
                              <th>dibuat tanggal</th>
                              <td>: {{ $konsuman->created_at }}</td>
                            </tr>    
                        </tbody>
                      </table>
                  </div>
                </div>
                <div class="section-body">
              </div>    
        </section>
    </div>
@endsection