<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MembersController;
use App\Resources\views\welcome1;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Site;

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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/welcome1', function () {
    return view('welcome1');
});

Route::get('/', function () {
    return view('hello');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::view("users","users");
Route::get('/users', function () {
    return view('users');
});

Route::get('/home', function () {
    return view('home');
});

Route::view('upload','upload');

Route::post('upload',[UploadController::class, 'index']);

Route::view('add','addmember');

Route::post('add',[MembersController::class,'addData']);

Route::get("users1",[UserController::class,'index']);

Route::get('/home1/{name?}', function ($name = "RAM"){
    // $data = compact($name);
    $data = "Rajat";
    return view('home1')->with($data);
});

Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);

// Route::get("/first","Site@first");
Route::get("/first",[Site::class, "first"]);