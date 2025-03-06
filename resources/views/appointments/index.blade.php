@extends('app')
@section('content')
<html>
<head>
    <style>
        table{
        border: 1px solid;
        width: 90%;
        /*margin-left: auto;
        margin-right: auto;*/
        text-align:center;
         }   
        
         table, th, td {
          text-align:center;
        border: 1px solid;
        }   
        
        
     button{  
            width: 70px;
            height:50px;
            padding: 10px;
            margin:10px;
            text-align: center;
            border-radius: 5px;
            background:white;
            color:#4E9CAF;
        } 
        button:hover
        {
            color:white;
            background:#4E9CAF;
             cursor:pointer;
        }    
    </style>
</head>
<body>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Date & Time</th>
        <th>Delete</th>
      </tr>
      </thead>
      <tbody>
      @foreach($appointments as $appointment)
        <tr>
            <td>{{ $appointment->id }}</td>
            <td>{{ $appointment->datetime }}</td>
            <td>
              <form action="/appointments/delete/{{  $appointment->id  }}" method="POST">
                @csrf
                @method('DELETE')
               <button>Delete</button>
              </form>
            
    </tr>
      @endforeach
      </tbody>
    </table>
      </div>
@endsection