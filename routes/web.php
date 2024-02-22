<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/adminhome',[AdminController::class,'adminindex']);
Route::get('/',[UserController::class,'userindex']);





Route::get('/addhomeinfo',[AdminController::class,'addhomeinfo']);
Route::get('/viewhomeinfo',[AdminController::class,'showhomeinfo']);
Route::get('/edithomeinfo',[AdminController::class,'edithomeinfo']);
Route::POST('/addhomeinfostore',[AdminController::class,'addhomeinfostore']);



Route::get('/addaboutinfo',[AdminController::class,'addaboutinfo']);
Route::get('/viewaboutinfo',[AdminController::class,'showaboutinfo']);
Route::get('/editaboutinfo',[AdminController::class,'editaboutinfo']);
Route::POST('/addaboutinfostore',[AdminController::class,'addaboutinfostore']);








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
