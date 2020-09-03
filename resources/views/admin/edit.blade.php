@extends('template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
            <h1>Edit Karyawan</h1>
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
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <form action="{{ url('karyawan/'.$karyawan->id) }}" method="post">
                          @method('PUT')
                          @csrf
                          <div class="form-group">
                            <label>Username</label>
                            <input name="username" type="text" class="form-control  @error('username') is-invalid @enderror" value="{{ $karyawan->username }}{{ old('username') }}">
                            @error('username')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $karyawan->name }}{{ old('name') }}">
                            @error('name')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ $karyawan->name }}{{ old('password') }}">
                            @error('password')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ $karyawan->alamat }}{{ old('alamat') }}</textarea>
                            @error('alamat')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control @error('level') is-invalid @enderror">
                              <option value="{{ $karyawan->level }}" >{{ $karyawan->level }}</option>
                              <option value="admin" >admin</option>
                              <option value="karyawan" >karyawan</option>
                            </select>
                            @error('level')
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