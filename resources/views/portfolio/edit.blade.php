@extends('master')

@section('title', 'portfolio')

@section('content')
<div class="container">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

   <h3>Upload Portfolio Item</h3>
<form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="file" name="image" class="form-control-file" required>
    </div>
    <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="Enter title">
    </div>
    <div class="form-group">
        <textarea name="description" class="form-control" placeholder="Enter description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Upload</button>
</form>
<h3>My Portfolio</h3>
<div class="portfolio-images" style="display: flex; flex-wrap: wrap;">
    @if($user->images->isNotEmpty()) 
        @foreach($user->images as $image)
            <div class="image-container" style="margin: 10px; text-align: center;">
                <img src="{{ asset('uploads/images/' . $image->image) }}" 
                     alt="Portfolio Image" 
                     width="150" 
                     height="150" 
                     style="border-radius: 10px; object-fit: cover;">
                
                {{-- العنوان والوصف بتنسيق بسيط تحت الصورة --}}
                <h5 style="margin: 5px 0; font-weight: bold;">{{ $image->title ?? '' }}</h5>
                <p style="font-size: 14px; color: #666;">{{ $image->description ?? '' }}</p>

                <form action="/portfolio/delete/{{ $image->id }}" method="POST" style="margin-top: 5px;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        @endforeach
    @else
        <p>No portfolio items uploaded</p>
    @endif
</div>

</div>
@endsection
