<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [App\Http\Controllers\frontend\FrontendController::class, 'aboutus']);


Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('ticket-all', [App\Http\Controllers\admin\TicketController::class, 'all_ticket']);
    Route::get('ticket-open', [App\Http\Controllers\admin\TicketController::class, 'open_ticket']);
    Route::get('ticket-pending', [App\Http\Controllers\admin\TicketController::class, 'pending_ticket']);
    Route::get('ticket-closed', [App\Http\Controllers\admin\TicketController::class, 'closed_ticket']);
    Route::get('approvalRequest', [App\Http\Controllers\admin\ApprovalRequest::class, 'index']);
    Route::get('journalistapprovalRequest', [App\Http\Controllers\admin\ApprovalRequest::class, 'UserApproval']);
    Route::put('update-ticket/{ticket_id}', [App\Http\Controllers\admin\TicketController::class, 'update']);
   Route::get('ticket/{post_id}', [App\Http\Controllers\admin\TicketController::class, 'edit']);
    Route::get('approval/{post_id}', [App\Http\Controllers\admin\PostController::class, 'process']);
   Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('users/{user_id}', [App\Http\Controllers\admin\UserController::class, 'edit']);
    Route::put('update-user/{user_id}', [App\Http\Controllers\admin\UserController::class, 'update']);
});
Route::prefix('customer')->middleware('auth','isJournalist')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Customer\DashboardController::class, 'index']);
    Route::get('/profile', [App\Http\Controllers\Customer\ProfileController::class, 'index']);
    Route::put('/update-profile', [App\Http\Controllers\Customer\ProfileController::class, 'update']);
    Route::get('ticket', [App\Http\Controllers\Customer\TicketController::class, 'index']);
    Route::get('add-ticket', [App\Http\Controllers\Customer\TicketController::class, 'create']);
    Route::post('add-ticket', [App\Http\Controllers\Customer\TicketController::class, 'store']);
    Route::get('ticket/{post_id}', [App\Http\Controllers\Customer\TicketController::class, 'edit']);
    Route::put('update-ticket/{post_id}', [App\Http\Controllers\Customer\TicketController::class, 'update']);
   });

