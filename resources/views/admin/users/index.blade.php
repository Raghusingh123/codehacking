@extends('layouts.admin')

@section('content')
<h1>Its working now </h1>
<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Active</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
    @if($users)
        @foreach($users as $user)

      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>       
        <td>{{$user->email}}</td>
        <td>{{$user->role_id}}</td>
        <td>{{$user->is_active == 1 ? 'Active' : 'No Active'}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at}}</td>
      </tr>
        @endforeach
    @endif  
    </tbody>
  </table>
@stop
