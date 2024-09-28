@extends('layouts.admin')

@section('content')
<div class="row d-flex justify-content-center gap-3 py-5">
    <div class="col-md-2">
        <div class="card custom-card rounded-4 h-100">
            <div class="card-header custom-card-header">
                <h6 class="m-0">Total Cars</h6>
            </div>
            <div class="card-body text-center">
                <h2 class="card-title display-6">{{ $totalCars }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="card custom-card rounded-4 h-100">
            <div class="card-header custom-card-header">
                <h6 class="m-0">Available Cars</h6>
            </div>
            <div class="card-body text-center">
                <h2 class="card-title display-6">{{ $availableCars }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="card custom-card rounded-4 h-100">
            <div class="card-header custom-card-header">
                <h6 class="m-0">Total Rentals</h6>
            </div>
            <div class="card-body text-center">
                <h2 class="card-title display-6">{{ $totalRentals }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="card custom-card rounded-4 h-100">
            <div class="card-header custom-card-header">
                <h6 class="m-0">Total Earnings</h6>
            </div>
            <div class="card-body text-center">
                <h2 class="card-title display-6">${{ $totalEarnings }}</h2>
            </div>
        </div>
    </div>
</div>

@endsection
