@extends('layout')
<style>
    
    .container {
        max-width: 400px;
        width:7500px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    
    form {
        display: flex;
        flex-direction: column;
        margin-right:80px;
        margin-left:80px;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    label {
        display: block;
        margin-bottom: 5px;
    }
    
    input[type="text"], textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    
    button[type="submit"] {
        background-color:#092F5E;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-right:40%;
        margin-left:40%;
    }
    
    button[type="submit"]:hover {
        background-color: #0069d9;
    }
</style>
<h1 style="text-align: center;">EDIT ANNOUNCMENT</h1>
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
        </div>
        <button type="submit">Update Announcement</button>
    </form>
</div>
