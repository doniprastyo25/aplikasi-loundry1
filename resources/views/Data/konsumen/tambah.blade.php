@extends('template')
@section('title')
    Tambah konsumen
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
            <h1>Tambah konsumen</h1>
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
                                <a href="{{ url('konsumen') }}" class="btn btn-info">
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
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <form action="{{ url('konsumen') }}" method="post">
                          @csrf
                          <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="address" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                            @error('address')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>telp</label>
                            <input name="telp" type="number" class="form-control @error('telp') is-invalid @enderror" value="{{ old('telp') }}">
                            @error('telp')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>Kategori</label>
                            <select name="kategori" class="form-control @error('level') is-invalid @enderror" readonly>
                              <option value="5000" >member</option>
                              {{-- <option value="10000" >reguler</option> --}}
                            </select>
                            @error('kategori')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            <button class="btn btn-secondary" type="reset">Reset</button>
                          </div>
                        </form>
                      </div>
                  </div>
                </div>
                <div class="section-body">
              </div>    
        </section>
    </div>
@endsection