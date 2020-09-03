@extends('template')
@section('title')
    Edit supplier
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
            <h1>Edit supplier</h1>
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
                                <a href="{{ url('supplier') }}" class="btn btn-info">
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
                        <form action="{{ url('supplier/'.$supplier->id) }}" method="post">
                          @method('PUT')
                          @csrf
                          <div class="form-group">
                            <label>Name</label>
                            <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ $supplier->nama }}{{ old('nama') }}">
                            @error('nama')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ $supplier->alamat }}{{ old('alamat') }}</textarea>
                            @error('alamat')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>telepon</label>
                            <input name="telp" type="number" class="form-control @error('telp') is-invalid @enderror" value="{{ $supplier->telp }}{{ old('telp') }}">
                            @error('name')
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
@endEdit 