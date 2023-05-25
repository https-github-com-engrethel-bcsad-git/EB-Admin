<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request, User $user)
    {
        $data['firstname'] = $request->firstname;
        $data['middlename'] = $request->middlename;
        $data['lastname'] = $request->lastname;
        $data['bday'] = $request->bday;
        $data['gender'] = $request->gender;
        $data['house_number'] = $request->house_number;
        $data['street'] = $request->street;
        $data['sitio'] = $request->sitio;
        $data['brgy'] = $request->brgy;
        $data['city'] = $request->city;
        $data['zip'] = $request->zip;
        $data['phone'] = $request->phone;
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->input('password'));
        $data['active_status'] = $request->active_status;
        $data['account_status'] = $request->account_status;

        $user->create($data);
        return redirect()->back();
    }

    public function update(Request $request, User $user)
    {      
        $data['firstname'] = $request->firstname;
        $data['middlename'] = $request->middlename;
        $data['lastname'] = $request->lastname;
        $data['bday'] = $request->bday;
        $data['gender'] = $request->gender;
        $data['house_number'] = $request->house_number;
        $data['street'] = $request->street;
        $data['sitio'] = $request->sitio;
        $data['brgy'] = $request->brgy;
        $data['city'] = $request->city;
        $data['zip'] = $request->zip;
        $data['phone'] = $request->phone;
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->input('password'));
    
        $user->update($data);
        return redirect()->back();
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }
}
