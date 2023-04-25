<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Models\DocuRequest;
use App\Models\user;

Route::get('/', function () {
    $docuRequests = DocuRequest::all();
    return view('welcome', compact('docuRequests'));
});

Route::post('/docurequests/{id}/update-status', function($id) {
    $docuRequest = DocuRequest::findOrFail($id);
    $docuRequest->status = request('status');
    $docuRequest->save();
  
    return response()->json([
      'message' => 'Status updated successfully'
    ]);
  });

  Route::get('/user_approval', function () {
    $users = user::all();
    return view('user_approval', compact('users'));
});


  

