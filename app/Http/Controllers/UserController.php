<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(User $user)
    {
        return view('/user/edit', compact('user'));
    }
    
    public function update(Request $request, User $user)
    {
        // validate request data here
        $user->update($request->all());
    
        return redirect('/users_account')->with('success', 'User updated successfully');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/user_account')->with('success', 'User deleted successfully!');
    }
}
