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
Route::get('/docu_pending', function () {
    $docu_pending = DocuRequest::all();
    return view('docu_pending', compact('docu_pending'));
})->name('docu_pending');


Route::post('/docurequests/{id}/update-status', function($id) {
    $docuRequest = DocuRequest::findOrFail($id);
    $docuRequest->status = request('status');
    $docuRequest->save();
  
    return response()->json([
      'message' => 'Status updated successfully'
    ]);
  });

Route::view('/documentapproval', 'documentapproval')->name('documentapproval');

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

Route::post('/user_account/store', [UserController::class, 'store'])->name('user_account.store');
Route::put('/user_account/{user}', [UserController::class, 'update'])->name('user_account.update');
Route::delete('/user_account/{user}', [UserController::class, 'destroy'])->name('user_account.destroy');

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

Route::view('/docu_approved', 'docu_approved')->name('docu_approved');
Route::view('/docu_printed', 'docu_printed')->name('docu_printed');
Route::view('/docu_recieving', 'docu_recieving')->name('docu_recieving');
Route::view('/docu_history', 'docu_history')->name('docu_history');

Route::view('/comp_pending', 'comp_pending')->name('comp_pending');
Route::view('/comp_ongoing', 'comp_ongoing')->name('comp_ongoing');
Route::view('/comp_settled', 'comp_settled')->name ('comp_settled');
Route::view('/admin_acc', 'admin_acc')->name ('admin_acc');