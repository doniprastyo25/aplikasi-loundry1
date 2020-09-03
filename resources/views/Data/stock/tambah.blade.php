@extends('template')
@section('title')
    Tambah karyawan
@endsection

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
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <form action="{{ url('stock') }}" method="post">
                          @csrf
                          <div class="form-group">
                            <label>Nama</label>
                            <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                            @error('nama')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>stock</label>
                            <input name="stock" type="number" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock') }}">
                            @error('stock')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>tgl update</label>
                            <input name="tgl_update" type="date" class="form-control @error('tgl_update') is-invalid @enderror" value="<?php echo date("Y-m-d");?>" readonly>
                            @error('tgl_update')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>supplier</label>
                            <select name="supplier" class="form-control @error('supplier') is-invalid @enderror">
                              <option > </option>
                              @foreach ($supplier as $item)
                              <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                              @endforeach
                            </select>
                            @error('supplier')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>harga</label>
                            <input name="harga" type="number" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}">
                            @error('harga')
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