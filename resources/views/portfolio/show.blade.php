@extends('master')

@section('title', 'portfolio')

@section('content')

<h1>{{ $user->name }} Portfolio Images</h1>
<div class="portfolio-images" style="display: flex; flex-wrap: wrap;">
    @if($user->images->isNotEmpty()) 
    @foreach($user->images as $image)
    <div class="image-container" style="margin: 10px; text-align: center;">
        <img src="{{ asset('uploads/images/' . $image->image) }}" 
             alt="Portfolio Image" 
             width="150" 
             height="150" 
             style="border-radius: 10px; object-fit: cover;">

        <h5 style="margin-top: 10px;">{{ $image->title ?? 'No Title' }}</h5>
        <p>{{ $image->description ?? 'No Description' }}</p>

        @if(Auth::id() == $image->provider_id)
            <form action="/portfolio/delete/{{ $image->id }}" method="POST" style="margin-top: 5px;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        @endif
    </div>
@endforeach

    @else
        <p>No portfolio images uploaded</p>
    @endif
</div>


@endsection