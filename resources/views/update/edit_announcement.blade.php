@extends('layout')
<h1 style="text-align: center;">Announcement</h1>
<div class="container">
    <form method="POST" action="/update/{{ $announcement->id }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="customFile">Image</label>
            <input type="file" class="form-control" id="customFile" name="image">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $announcement->title }}">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body">{{ $announcement->body }}</textarea>
        </div><br>
        <button type="submit" class="btn btn-primary">Update Announcement</button>
    </form>
</div>
