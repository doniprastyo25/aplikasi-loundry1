@extends('template')
@section('title')
    Transaksi
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
            <h1>Pembayaran laundry</h1>
            </div>
        <div class="row">
            <div class="col">
              <div class="card">
                <div class="row">
                  <div class="card-header">
                    <div class="col">
                      <h4>Isi Form</h4>(*isi langsung jika konsumen bukan member)
                    </div>
                  </div>
                </div> 
              </div>
              <div class="card">
                <div class="col-md-onset-4 col-md col-md-offset-4">
                  <div class="card-header">
                    <h4>Transaction</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <form action="{{ url('transaksi') }}" method="post">
                          @csrf
                          <label>Nama</label>
                          <div class="input-group mb-3">
                            <input name="nama" id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" >
                            <div class="input-group-append">
                              <button class="btn btn-outline-info" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Pilih</button>
                            </div>
                            @error('nama')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-6">
                                <input name="kategori" id="kategori" type="text" class="form-control" value="Reguler" readonly>
                              </div>
                              <div class="col-md-6">
                                <input name="harga" id="harga" type="number" class="form-control" value="10000" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>berat</label>
                            <input name="berat" type="number" id="berat" class="form-control @error('berat') is-invalid @enderror" value="{{ old('berat') }}">
                            @error('berat')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>total</label>
                            <input name="total" type="number" id="total" class="form-control" value="" readonly>
                            @error('total')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>tanggal</label>
                            <input name="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" value="<?php echo date("Y-m-d");?>" readonly>
                            @error('tanggal')
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

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body table-responsive">
                <table class="table table-striped" id="table1">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">nama</th>
                      <th scope="col">alamat</th>
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
                        <td>
                          <button class="btn btn-primary" id="select"
                            data-name="{{ $item->name }}"
                            data-address="{{ $item->address }}"
                            data-telp="{{ $item->telp }}"
                            data-kategori="{{ $item->kategori }}"
                            data-kategorii="{{ $item->kategori == 5000 ? "member" : "reguler" }}">
                            select
                          </button>
                        </td>
                      </tr>    
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>

    <script>
    $(document).ready(function () {
      $(document).on('click', '#select', function() {
        var name = $(this).data('name');
        var address = $(this).data('address');
        var telp = $(this).data('telp');
        var kategori = $(this).data('kategori');
        var kategorii = $(this).data('kategorii');
        $('#nama').val(name);
        $('#kategori').val(kategorii);
        $('#harga').val(kategori);
        $('.bd-example-modal-lg').modal('hide');
      })
    })
    </script>
    <script>
      $("#harga,#berat").keyup(function() {
        var val1 = $('#harga').val();
        var val2 = $('#berat').val();
        var kali = Number(val1) * Number(val2);
        if( val1!="" && val2!="" ) {
          $('#total').val(kali);
        }
      })
    </script>
@endsection