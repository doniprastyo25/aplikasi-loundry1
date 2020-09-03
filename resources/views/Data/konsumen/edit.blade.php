@extends('template')
@section('title')
    Edit Konsumen
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
            <h1>Edit konsumen</h1>
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
                        <form action="{{ url('konsumen/'.$konsuman->id) }}" method="post">
                          @method('PUT')
                          @csrf
                          <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $konsuman->name }}{{ old('name') }}">
                            @error('name')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="address" class="form-control @error('address') is-invalid @enderror">{{ $konsuman->address }}{{ old('address') }}</textarea>
                            @error('address')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>Telp</label>
                            <input name="telp" type="number" class="form-control @error('telp') is-invalid @enderror" value="{{ $konsuman->telp }}{{ old('telp') }}">
                            @error('telp')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>Level</label>
                            <select name="kategori" class="form-control @error('kategori') is-invalid @enderror">
                              <option value="{{ $konsuman->kategori }}" >{{ $konsuman->kategori == 5000 ? "member" : "reguler" }}</option>
                              {{-- <option value="5000" >member</option> --}}
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