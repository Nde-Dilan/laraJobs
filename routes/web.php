<?php

use App\Http\Controllers\Job as JobController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web " middleware group. Make something great!
|
*/
/*Route::get('/search',function (Request $request){
    dd($request->name);
}); */

Route::get('/', [JobController::class, 'index']);


//Show create form 

Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');

//Store jobs data
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

//Show edit form 

Route::get('/jobs/edit/{job}', [JobController::class, 'edit'])->middleware('auth');

//Store edited data

Route::put('/jobs/{job}', [JobController::class, 'update']);

//Delete data

Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->middleware('auth');



/*Route Model binding, automaticaly generate a 404 page if the item is not found */
//Get an show a single job
Route::get('/jobs/{job}', [JobController::class, 'show']);



//Show register form

Route::get('/users/register', [UserController::class, 'create'])->middleware('guest');

//Create new user

Route::post('/users/register', [UserController::class, 'store'])->middleware('guest');

//Show login form

Route::get('/users/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log the new user in

Route::post('/users/login', [UserController::class, 'authenticate'])->middleware('guest');

//Log the user out
Route::post('/users/logout', [UserController::class, 'logout'])->middleware('auth');


//TODO: How to change the 404 page of laravel ?