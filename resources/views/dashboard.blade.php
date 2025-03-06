@extends('master')

@section('title', 'Library Dashboard')

@section('page-title', 'Library Dashboard Overview')

@section('content')
<style>
 .body {
    font-family: 'Arial', sans-serif;
    background-color: #616669;
    margin: 10;
    padding: 0;
}

.dashboard {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
    margin: 50px auto;
    padding: 20px;
    max-width: 800px;
}

.card {
    background-color: #c7def1;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    flex: 1;
    min-width: 200px;
    max-width: 250px;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-3px);
}

.card h3 {
    margin: 10;
    font-size: 3em;
    color: #343a40;
}

.card p {
    margin: 10px 0 0;
    font-size: 1.2em;
    color: #007bff;
}

</style>
   
@endsection