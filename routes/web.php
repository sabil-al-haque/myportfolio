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




//for home
Route::get('/addhomeinfo',[AdminController::class,'addhomeinfo']);
Route::get('/viewhomeinfo',[AdminController::class,'showhomeinfo']);
Route::get('/edithomeinfo',[AdminController::class,'edithomeinfo']);
Route::POST('/addhomeinfostore',[AdminController::class,'addhomeinfostore']);


// for about
Route::get('/addaboutinfo',[AdminController::class,'addaboutinfo']);
Route::get('/viewaboutinfo',[AdminController::class,'showaboutinfo']);
Route::get('/editaboutinfo',[AdminController::class,'editaboutinfo']);
Route::POST('/addaboutinfostore',[AdminController::class,'addaboutinfostore']);

// for experience addexperinceinfo
Route::get('/addexperienceinfo',[AdminController::class,'addexperienceinfo']);
Route::get('/showexperienceinfo',[AdminController::class,'showexperienceinfo']);
Route::get('/editexperienceinfo',[AdminController::class,'editexperienceinfo']);
Route::POST('/addexperienceinfostore',[AdminController::class,'addexperienceinfostore']);

// for education
Route::get('/addeducationinfo',[AdminController::class,'addeducationinfo']);
Route::get('/showeducationinfo',[AdminController::class,'showeducationinfo']);
Route::get('/editeducationinfo',[AdminController::class,'editeducationinfo']);
Route::POST('/addeducationinfostore',[AdminController::class,'addeducationinfostore']);


// for skill
Route::get('/addskillinfo',[AdminController::class,'addskillinfo']);
Route::get('/showskillinfo',[AdminController::class,'showskillinfo']);
Route::get('/editskillinfo',[AdminController::class,'editskillinfo']);
Route::POST('/addskillinfostore',[AdminController::class,'addskillinfostore']);


// for service
Route::get('/addserviceinfo',[AdminController::class,'addserviceinfo']);
Route::get('/showserviceinfo',[AdminController::class,'showserviceinfo']);
Route::get('/editserviceinfo',[AdminController::class,'editserviceinfo']);
Route::POST('/addserviceinfostore',[AdminController::class,'addserviceinfostore']);

// for project
Route::get('/addprojectinfo',[AdminController::class,'addprojectinfo']);
Route::get('/showprojectinfo',[AdminController::class,'showprojectinfo']);
Route::get('/editprojectinfo',[AdminController::class,'editprojectinfo']);
Route::POST('/addprojectinfostore',[AdminController::class,'addprojectinfostore']);


// for client
Route::get('/addclientinfo',[AdminController::class,'addclientinfo']);
Route::get('/showclientinfo',[AdminController::class,'showclientinfo']);
Route::get('/editclientinfo',[AdminController::class,'editclientinfo']);
Route::POST('/addclientinfostore',[AdminController::class,'addclientinfostore']);


// for blog
Route::get('/addbloginfo',[AdminController::class,'addbloginfo']);
Route::get('/showbloginfo',[AdminController::class,'showbloginfo']);
Route::get('/editbloginfo',[AdminController::class,'editbloginfo']);
Route::POST('/addbloginfostore',[AdminController::class,'addbloginfostore']);


// for contact
Route::get('/addcontactinfo',[AdminController::class,'addcontactinfo']);
Route::get('/showcontactinfo',[AdminController::class,'showcontactinfo']);
// Route::get('/editcontactinfo',[AdminController::class,'editcontactinfo']);
Route::POST('/addcontactinfostore',[UserController::class,'addcontactinfostore']);








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
