<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\UserController;
use App\Models\DocuRequest;
use App\Models\User;

Route::get('/', function () {
  return view('home');
})->name('home');

Route::get('/welcome', function () {
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


//User Approval Route
Route::get('/user_approval', function () {
  $users = user::all();
  return view('user_approval', compact('users'));
})->name('user_approval');

Route::post('/user_approval/{user}/accept', [EmailController::class, 'accept'])->name('user_approval.accept');
Route::post('/user_approval/{user}/deny', [EmailController::class, 'deny'])->name('user_approval.deny');

//User Account Route
Route::get('/user_account', function () {
  $users = user::all();
  return view('user_account', compact('users'));
})->name('user_account');

Route::get('/user/{user}/edit', [UserController::class, 'edit']);
Route::put('/user/{user}', [UserController::class, 'update']);
Route::delete('/user_account/{id}', [UserController::class, 'delete'])->name('user_account.delete');



  

