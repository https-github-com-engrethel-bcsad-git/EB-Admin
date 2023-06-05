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

Route::post('/user_account/store', [UserController::class, 'store'])->name('user_account.store');
Route::put('/user_account/{user}', [UserController::class, 'update'])->name('user_account.update');
Route::delete('/user_account/{user}', [UserController::class, 'destroy'])->name('user_account.destroy');

//Announcement Route
Route::get('/announcement', function () {
  $announcements = announcement::all();
  return view('announcement', compact('announcements'));
})->name('announcement');

Route::post('/announcement/store', [AnnouncementController::class, 'store'])->name('announcement.store');
Route::put('/announcement/{announcement}', [AnnouncementController::class, 'update'])->name('announcement.update');
Route::delete('/announcement/{announcement}', [AnnouncementController::class, 'destroy'])->name('announcement.destroy');

//Docuument Request Route
//Pending
Route::get('/docu_pending', function () {
  $docu_pending = DocuRequest::all();
  return view('docu_pending', compact('docu_pending'));
})->name('docu_pending');
Route::post('/docu_pending/{docuRequest}/accept', [DocuRequestController::class, 'accept'])->name('docu_pending.accept');
Route::post('/docu_pending/{docuRequest}/destroy', [DocuRequestController::class, 'destroy'])->name('docu_pending.destroy');

//Approved
Route::get('/docu_approved', function () {
$docu_approved = DocuRequest::all();
return view('docu_approved', compact('docu_approved'));
})->name('docu_approved');
Route::get('/pdf/{docuRequest}/docu_request_view', function ($docuRequestId) {
$docuRequest = DocuRequest::findOrFail($docuRequestId);
return view('pdf.docu_request_view', ['docuRequest' => $docuRequest]);
});
Route::get('/pdf/{docuRequest}/docu_request_pdf', [DocuRequestController::class, 'print']);
Route::post('/docu_approved/{docuRequest}/cancel', [DocuRequestController::class, 'cancel'])->name('docu_approved.cancel');

//For Pickup
Route::get('/docu_receiving', function () {
$docu_receiving  = DocuRequest::all();
return view('docu_receiving', compact('docu_receiving'));
})->name('docu_receiving');
Route::post('/docu_receiving/{docuRequest}/receive', [DocuRequestController::class, 'receive'])->name('docu_receiving.receive');
Route::post('/docu_receiving/{docuRequest}/cancel', [DocuRequestController::class, 'cancel'])->name('docu_receiving.cancel');

//History
Route::get('/docu_printed', function () {
$docu_printed  = DocuRequest::all();
return view('docu_printed', compact('docu_printed'));
})->name('docu_printed');
Route::post('/docu_printed/{docuRequest}/destroy', [DocuRequestController::class, 'destroy'])->name('docu_printed.destroy');

// Route::post('/docurequests/{id}/update-status', function($id) {
//     $docuRequest = DocuRequest::findOrFail($id);
//     $docuRequest->status = request('status');
//     $docuRequest->save();

//     return response()->json([
//       'message' => 'Status updated successfully'
//     ]);
//   });

// Route::view('/documentapproval', 'documentapproval')->name('documentapproval');
// Route::view('/docu_history', 'docu_history')->name('docu_history');

//Complain Route
Route::view('/comp_pending', 'comp_pending')->name('comp_pending');
Route::view('/comp_ongoing', 'comp_ongoing')->name('comp_ongoing');
Route::view('/comp_settled', 'comp_settled')->name ('comp_settled');