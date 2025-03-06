@extends('master')

@section('title', 'Service Requests')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">🛠️ All Service Requests</h2>

    @foreach($requests as $request)
        <div class="card shadow-lg mb-4">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        @if($request->image)
                            <img src="{{ asset('uploads/images/' . $request->image) }}" class="rounded img-thumbnail" width="100" height="50" alt="Request Image">
                        @else
                            <img src="https://via.placeholder.com/100" class="rounded img-thumbnail" alt="No Image">
                        @endif
                    </div>
                    <div>
                        <p class="fw-bold text-primary">{{ $request->description }}</p>
                        <button class="btn btn-sm btn-success offer-btn" data-id="{{ $request->id }}">💬 Offer Service</button>
                    </div>
                </div>

                <div class="mt-3">
                    <strong>Average prices of offers: <p class="fw-bold text-primary">{{ $request->average_price ?? 'No offers' }}</p></strong>
                    <strong>Offers:</strong>
                    <ul class="list-group offers-list-{{ $request->id }}">
                        @foreach($request->offers as $offer)
                            <li class="list-group-item">{{ $offer->message }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="offer-form mt-2" style="display: none;" id="offer-form-{{ $request->id }}">
                    <form action="{{ route('offers.store', $request->id) }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input name="requestID" type="hidden" value="{{ $request->id }}">
                            <input type="text" name="message" class="form-control" placeholder="Write your offer..." required>
                            <br>
                            <input type="number" name="price" class="form-control" placeholder="write place offer" required>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.offer-btn').forEach(button => {
            button.addEventListener('click', function () {
                let id = this.getAttribute('data-id');
                document.getElementById('offer-form-' + id).style.display = 'block';
            });
        });
    });
</script>

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
    .btn-success {
        font-size: 14px;
    }
    .list-group-item {
        font-size: 14px;
        background: #f1f1f1;
        border: none;
    }
</style>
@endsection