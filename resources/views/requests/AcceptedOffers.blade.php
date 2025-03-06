@extends('master')

@section('title', 'Accepted Offers')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-5 py-3 border-bottom">
        <h1 class="display-6 fw-bold text-primary">Accepted Offers</h1>
    </div>                    
    <div class="row">
        @foreach ($offers as $offer)
        <div class="col-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                        @if ($offer->ServiceRequests->image)
                        <div class="col-md-3">
                            <img src="{{ asset('uploads/images/' . $offer->ServiceRequests->image) }}" class="img-fluid rounded" alt="Request Image">
                        </div>
                        @endif
                        <div class="col">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-primary">{{ $offer->ServiceRequests->type }}</span>
                                <small class="text-muted">{{ $offer->ServiceRequests->created_at->diffForHumans() }}</small>
                            </div>
                            <p class="mb-3">{{ $offer->ServiceRequests->description }}</p>
                            <div class="mb-3">
                                <strong>Message:</strong> {{ $offer->message }}
                            </div>
                            <div>
                                <strong>Price:</strong> {{ $offer->price }}                      
                            </div>
                            <br/>  
                            <div >
                                <strong>Appointment Time:</strong> 
                                @if ($offer->appointment)
                                    {{ $offer->appointment->datetime }}
                                @else
                                    <span class="text-danger">No appointment set</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</div>
@endsection


