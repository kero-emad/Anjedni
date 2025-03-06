@extends('master')

@section('title', 'Create Service Request')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-5 py-3 border-bottom">
        <h1 class="display-6 fw-bold text-primary">Service Requests</h1>
    </div>                    
    <div class="row">
        @foreach ($requests as $request)
        <div class="col-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                        @if ($request->image)
                        <div class="col-md-3">
                            <img src="{{ asset('uploads/images/' . $request->image) }}" class="img-fluid rounded" alt="Request Image">
                        </div>
                        @endif
                        <div class="col">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-primary">{{ $request->type }}</span>
                                <small class="text-muted">{{ $request->created_at->diffForHumans() }}</small>
                            </div>
                            <p class="mb-3">{{ $request->description }}</p>
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