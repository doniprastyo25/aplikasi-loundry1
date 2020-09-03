@extends('template')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="far fa-money-bill-alt"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Pemasukan</h4>
              </div>
              <div class="card-body">
                {{ indo_currency($finance) }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
              <i class="fas fa-cart-arrow-down"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Pengeluaran</h4>
              </div>
              <div class="card-body">
                {{ indo_currency($boncos) }}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 offset-md-3">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Karyawan</h4>
              </div>
              <div class="card-body">
                {{ $employee }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
              <i class="fas fa-circle"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Member</h4>
              </div>
              <div class="card-body">
                {{ $konsumen }}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-body">
      </div>
    </section>
  </div>
@endsection