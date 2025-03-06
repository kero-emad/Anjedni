@extends('master')

@section('title', 'Offer Details')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">📅 Choose a Time for Your Appointment</h2>

    <div class="card shadow-lg mb-4">
        <div class="card-body">
            <h3>Offer Details</h3>

            <form action="{{ route ('appointments.store') }}" method="POST">
                @csrf
                <input type="hidden" name="offer_id" value="{{ $offer->id }}">
                <div class="mb-3">
                    <label for="message" class="form-label">Offer Message</label>
                    <textarea id="message" name="message" class="form-control" rows="3" readonly>{{ $offer->message }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" id="price" name="price" class="form-control" value="${{ $offer->price }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="offered_by" class="form-label">Offered by</label>
                    <input type="text" id="offered_by" name="offered_by" class="form-control" value="{{ $offer->users->name }}" readonly>
                    <input type="hidden" name="provider" value={{ $offer->users->id }}>
                </div>

                <div class="mt-4">
                    <h4>Select a Date & Time</h4>
                    <div class="input-group">
                        <label for="appointment" class="form-label">Select your preferred date and time:</label>
                        <select id="appointment" name="appointment" class="form-control" required>
                            <option value="" disabled selected>Select available time</option>
                            @foreach($offer->users->times->whereNull('appointment_id') as $time)
                                <option value="{{ $time->datetime }}">
                                    {{ \Carbon\Carbon::parse($time->datetime)->format('d-m-Y h:i A') }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Confirm Appointment</button>
            </form>
        </div>
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
