@extends('layouts.master')
@section('title', 'Home')

@section('content')
<div class="col-5"> 
    @if (Session::has('success'))
                  <div class="alert alert-success" role="alert" style="text-align:center">
                    {{ Session::get('success') }}
                  </div>
                @endif
              </div>
<div class="row">
    <div class="">
        <h4 class="card-title">Home</h4>
        <hr>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="text-left pt-1">
            <i data-feather="book" style="color: black"></i>
            <h4 class="mb-0" style="color: #0f6fc5">Dashboard</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Go to </span><a href="/profile" class="text-dark text-gradient font-weight-bold" style="text-decoration: underline">Dashboard</a></p>
        </div>
      </div>
    </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
            <i data-feather="archive" style="color: black"></i>
          <div class="text-left pt-1">
            <h4 class="mb-0" style="color: #0f6fc5">Catatan Perjalanan</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Go to </span><a href="/dashboard" class="text-dark text-gradient font-weight-bold" style="text-decoration: underline">Data</a></p>
        </div>
      </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
            <i data-feather="file" style="color: black"></i>
          <div class="text-left pt-1">
            <h4 class="mb-0" style="color: #0f6fc5">Input Data Perjalanan</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Go to </span><a href="/formPerjalanan" class="text-dark text-gradient font-weight-bold" style="text-decoration: underline">Input Data</a></p>
        </div>
      </div>
      </div>


  </div>
@endsection
