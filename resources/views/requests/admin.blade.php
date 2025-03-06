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
        <th>description</th>
        <th>Image</th>
        <th>Status</th>
        <th>Type</th>
        <th>Delete</th>
      </tr>
      </thead>
      <tbody>
      @foreach($requests as $request)
        <tr>
            <td>{{ $request->id }}</td>
            <td>{{ $request->description }}</td>
            <td><img src="{{ asset('uploads/images/' . $request->image) }}" width="50" height="50"></td>
            <td>{{ $request->status }}</td>
            <td>{{ $request->type }}</td>
            
            <td>
               <a href="/requests/delete/{{  $request->id  }}"><button>Delete</button></a>
            
    </tr>
      @endforeach
      </tbody>
    </table>
      </div>
@endsection