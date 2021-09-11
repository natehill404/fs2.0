<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes(['verify' => true]);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/startup', [HomeController::class, 'startup']);

Route::group(['middleware' => 'auth'], function () {
    Route::post('add-to-friend', [HomeController::class, 'addToFriend'])->name('add.to.friend');
    Route::post('accept-friend-request', [HomeController::class, 'acceptFriendRequest'])->name('accept.friend.request');
    Route::post('deny-friend-request', [HomeController::class, 'denyFriendRequest'])->name('deny.friend.request');
});

/* Profile routes */
Route::get("profile", [HomeController::class, 'profile'])->name('profile');
Route::get("edit-profile", [HomeController::class, 'editProfile'])->name('edit.profile');
Route::put("update-profile", [HomeController::class, 'editProfile'])->name('update.profile');
