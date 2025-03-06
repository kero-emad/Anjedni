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
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Role</th>
        <th>Image</th>
        <th>Address</th>
        <th>Delete</th>
      </tr>
      </thead>
      <tbody>
      @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->role }}</td>
            <td><img src="{{ asset('uploads/images/' . $user->image) }}" width="50" height="50"></td>
            <td>{{ $user->Address }}</td>
            
            <td>
              <form action="/users/delete/{{  $user->id  }}" method="POST">
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