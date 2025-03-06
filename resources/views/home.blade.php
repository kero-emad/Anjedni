@extends('app')

@section('title', content: 'Library Dashboard')
@section('page-title', 'Library Dashboard Overview')
@section('content')
<div class="welcome-container">
    <h1>Welcome to the Anjedny Dashboard!</h1>
    <p>Your go-to place for all things Sercives .</p>
</div>
<style>
    .welcome-container {
        background-color: #10CAB7; 
        color: black;
        padding: 50px 20px;
        text-align: center;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); 
        position: absolute;
        bottom: 50%; 
        transform: translateY(50%); 
        width: 80%; 
        max-width: 600px; 
        animation: slideUp 1s ease-out; 
        margin-left: 25%; 
    }

  
    @keyframes slideUp {
        0% {
            transform: translateY(100%); 
            opacity: 0;
        }
        100% {
            transform: translateY(50%); 
            opacity: 1;
        }
    }
</style>
@endsection