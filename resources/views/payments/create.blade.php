@extends('master')

@section('title', 'Offer Details')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">💰 Payment Details</h2>

    <div class="card shadow-lg mb-4">
        <div class="card-body">
            <h3>Offer Details</h3>

            <form action="{{ route ('payments.store') }}" method="POST">
                @csrf
                <input type="hidden" name="offer_id" value="{{ $offer->id }}">
                <input type="hidden" name="service_request_id" value="{{ $offer->ServiceRequests->id }}">                 
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" id="price" name="price" class="form-control" value="{{ $offer->price }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="visanumber" class="form-label">visanumber</label>
                    <input type="text" id="visanumber" name="visanumber" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="CVV" class="form-label">CVV</label>
                    <input type="text" id="CVV" name="CVV" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Confirm Appointment</button>
            </form>
        </div>
        <x-error/>
    </div>
</div>

<style>
    body {
        background-color: #f8f9fa;
    }
    .card {
        border-radius: 10px;
        border: none;
        transition: transform 0.3s;
    }
    .card:hover {
        transform: scale(1.02);
    }
    .btn-primary {
        font-size: 16px;
    }
    .form-label {
        font-weight: bold;
    }
</style>
@endsection
