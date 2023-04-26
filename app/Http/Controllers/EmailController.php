<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\UserAccepted;
use App\Mail\UserDenied;

class EmailController extends Controller
{
    public function accept($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['error' => 'User not found.'], 404);
        }

        // Update user status to accepted
        // $user->account_status = 1;
        $user->save();

        // Send email to user
        Mail::to($user->email)->send(new UserAccepted($user));

        return redirect()->back()->with('success', 'User accepted.');
    }

    public function deny($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['error' => 'User not found.'], 404);
        }

        // Update user status to accepted
        // $user->account_status = 1;
        $user->save();

        // Send email to user
        Mail::to($user->email)->send(new UserDenied($user));

        return redirect()->back()->with('success', 'User deny.');
    }
}
