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


/* Profile routes */
Route::get("profile", [HomeController::class, 'profile'])->name('profile');
Route::get("{userName}/profile", [HomeController::class, 'profileDetails'])->name('profile.details');
Route::get("{userName}/timeline", [HomeController::class, 'timelineDetails'])->name('profile.timeline');
Route::get("edit-profile", [HomeController::class, 'editProfile'])->name('edit.profile');
Route::put("update-profile", [HomeController::class, 'editProfile'])->name('update.profile');

// Friend Request

Route::get("add-friend/{userName}", [HomeController::class, 'addFriend'])->name('add.friend');
Route::get("remove-friend/{userName}", [HomeController::class, 'removeFriend'])->name('remove.friend');
