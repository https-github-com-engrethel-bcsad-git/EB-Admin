@extends('layout')
<div class="container">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>  
        <th>ID</th>
        <th>Fullname</th>
        <th>Sitio Clearance</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Data Created</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->firstname }} {{ $user->middlename }} {{ $user->lastname }}</td>
        <td><img src={{ $user->image }} class="img-thumbnail" ></td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
        <td>
          <button type="button" class="btn btn-primary">Accept</button>
          <button type="button" class="btn btn-danger">Deny</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

