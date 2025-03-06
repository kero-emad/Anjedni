@extends('master')

@section('title', 'Create Service Request')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-5 py-3 border-bottom">
        <h1 class="display-6 fw-bold text-primary">Service Requests</h1>
        <button type="button" class="mb-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#createRequestModal">
            <i class="fas fa-plus-circle me-2"></i> New Request
        </button>
    </div>

    <div class="modal fade" id="createRequestModal" tabindex="-1" aria-labelledby="createRequestModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Create New Request</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('requests.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Request Type</label>
                            <select name="type" class="form-select" required>
                                <option value="" disabled selected>Select service type</option>
                                <option value="Electricity">Electrical</option>
                                <option value="Carpentry">Carpentry</option>
                                <option value="Plumbing">Plumbing</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3" name="description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Upload Image</label>
                            <input type="file" class="form-control" name="image" accept="image/*">
                        </div>
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane me-2"></i> Submit Request
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($requests as $request)
        <div class="col-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                        @if ($request->image)
                        <div class="col-md-3">
                            <a href="/requests/show/{{ $request->id }}">
                            <img src="{{ asset('uploads/images/' . $request->image) }}" class="img-fluid rounded" alt="Request Image">
                            </a>
                        </div>
                        @endif
                        <div class="col">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-primary">{{ $request->type }}</span>
                                <small class="text-muted">{{ $request->created_at->diffForHumans() }}</small>
                            </div>
                            <p class="mb-3">{{ $request->description }}</p>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteRequestModal{{ $request->id }}">
                                <i class="fas fa-trash me-1"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
        <div class="modal fade" id="deleteRequestModal{{ $request->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this request?</p>
                        <form action="/requests/delete/{{ $request->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="d-flex gap-2 justify-content-end">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</div>
@endsection