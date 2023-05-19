<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\DocuRequestController;
use App\Models\DocuRequest;
use App\Models\User;
use App\Models\Announcement;

//Login Route
Route::get('/', function () {
  return view('login');
})->name('login');

//Home Route
Route::get('home', function () {
  return view('home');
})->name('home');

//Docuument Request Route
Route::get('/docu_request', function () {
    $docuRequests = DocuRequest::all();
    return view('docu_request', compact('docuRequests'));
});

Route::post('/docurequests/{id}/update-status', function($id) {
    $docuRequest = DocuRequest::findOrFail($id);
    $docuRequest->status = request('status');
    $docuRequest->save();
  
    return response()->json([
      'message' => 'Status updated successfully'
    ]);
  });

Route::get('/pdf/{docuRequest}/docu_request_pdf.blade', [DocuRequestController::class, 'print']);

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

Route::delete('/user_account/{id}', [UserController::class, 'delete'])->name('user_account.delete');

//Certifacate Route
Route::get('/certificate/bcf', function () {
  return view('certificate/bcf');
})->name('certificate/bcf');

//Announcement Route
Route::get('/announcement', function () {
  $announcements = announcement::all();
  return view('announcement', compact('announcements'));
})->name('announcement');


Route::post('/announcement/store', [AnnouncementController::class, 'store'])->name('announcement.store');
Route::put('/announcement/{announcement}', [AnnouncementController::class, 'update'])->name('announcement.update');
Route::delete('/announcement/{announcement}', [AnnouncementController::class, 'destroy'])->name('announcement.destroy');

Route::view('/documentapproval', 'documentapproval')->name('documentapproval');




  

