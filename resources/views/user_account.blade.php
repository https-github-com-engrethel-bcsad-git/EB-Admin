@extends('layout')
<div class="container">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>  
        <th>ID</th>
        <th>Fullname</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
      @if ($user->account_status == 1)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->firstname }} {{ $user->middlename }} {{ $user->lastname }}</td>
        <td>{{ $user->house_number }} {{ $user->street }} , {{ $user->brgy }} {{ $user->zip }} , {{ $user->city }}</td>
        <td>{{ $user->phone }}</td>
        <td>
        @if ($user->active_status == 0) 
            <button type="button" class="btn btn-danger">Offline</button>
        @else 
            <button type="button" class="btn btn-success">Online</button>
        @endif
        </td>
        <td>
            <button type="button" class="btn btn-success">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
</div>