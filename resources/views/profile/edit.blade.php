@extends('master')

@section('title', 'Edit Profile')

@section('content')
<div class="container">
    <h3>Edit Profile</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="text-center">
        <img src="{{ asset('uploads/images/' . Auth::user()->image) }}" id="profileImage" class="user-avatar">
        <h4 id="profileName">{{ Auth::user()->name }}</h4>
    </div>

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" required>
        </div>

        <div class="mb-3">
            <label>Profile Picture:</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection
