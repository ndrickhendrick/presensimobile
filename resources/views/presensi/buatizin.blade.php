@extends('layouts.presensi')

@section('header')
<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="javascript:;"class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle"> Form Izin</div>
    <div class="right"></div>
</div>
<!-- End App Header -->
@endsection

@section('content')
<div class="row" style="margin-top:70px">
    <form method="POST" action="#">
        <div class="col">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Tanggal">
            </div>
        </div>
    </form>
    </div>
</div>
@endsection