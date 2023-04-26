<div class="container">
    <form method="POST" action="/user/{{ $user->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" class="form-control" name="firstname" value="{{ $user->firstname }}">
        </div>

        <div class="form-group">
            <label for="middlename">Middlename</label>
            <input type="text" class="form-control" name="middlename" value="{{ $user->middlename }}">
        </div>

        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" name="lastname" value="{{ $user->lastname }}">
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>

