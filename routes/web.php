<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MembersController;
use App\Resources\views\welcome1;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Site;
use App\Http\Controllers\ServiceController;
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
// Route::get("/first",[Site::class, "first"]);

Route::get("/first", function(){
    return view("first");
});

// Route::get("/services", function(){
//     return view("services");
// });

// Route::get("/services", [ServiceController::class, "index"]);

Route::view("services", "services", [ "name" => "test name", "email" => "test@test.com"]);

// Route::get("/about-us", function(){
//     echo "<h1>This is sample message</h1>";
// });
Route::redirect("/products", "/about-us");

Route::get("/list-view", function(){
    echo "<h1>This is list view page</h1>";
});
Route::get("/add-form", function(){
    // echo "<h1>This is add form page</h1>";
    return redirect("/list-view");
});

Route::get("/about-us", function(){
    $data = ["email" => "rajat.thawal@crestit.in", "name" => "Rajat Thawal"];
    return view("about1",  $data );
});

