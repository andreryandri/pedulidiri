@extends('layouts.master')
@section('title', 'Input Perjalanan')

@section('content')

@if (Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alertCreatePerjalanan">
        <div>
            <strong> {{ Session::get('message') }}</strong>
        </div>
        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="col-xl-5 col-sm-6 mb-xl-0 mb-4">
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Input Data Perjalanan</h4><hr>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form class="form form-horizontal" method="POST" action="/simpanPerjalanan" >
            {{ csrf_field() }}
            <div class="form-body">
                <div class="row">
                <div class="col-md-4">
                    <label>Lokasi</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="text" id="" class="form-control" name="lokasi" placeholder="Lokasi">
                </div>
                <div class="col-md-4">
                    <label>Suhu</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="number" onkeypress="return event.charCode>=48 && event.charCode<=57" min="34" max="39" id="" class="form-control" name="suhu" placeholder="Suhu">
                </div>
                <div class="col-md-4">
                    <label>Jam</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="time" id="" class="form-control" name="jam" placeholder="Jam">
                </div>
                <div class="col-md-4">
                    <label>Tanggal</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="date" id="datePickerId" class="form-control" name="tanggal" placeholder="">
                </div>
                <div class="col-sm-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-dark me-1 mb-1">Submit</button>
                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<script>
    datePickerId.max = new Date().toISOString().split("T")[0];
</script>
@endsection

