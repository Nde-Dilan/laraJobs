<?php

use App\Http\Controllers\Job as JobController;
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

Route::get('/',[JobController::class,'index']);


//Show create form 

Route::get('/jobs/create',[JobController::class,'create']);

//Store jobs data
Route::post('/jobs',[JobController::class,'store']);

//Show edit form 

Route::get('/jobs/edit/{job}',[JobController::class,'edit']);

//Store edited data

Route::put('/jobs/{job}',[JobController::class,'update']);

//Delete data

Route::delete('/jobs/{job}',[JobController::class,'destroy']);



/*Route Model binding, automaticaly generate a 404 page if the item is not found */
//Get an show a single job
Route::get('/jobs/{job}',[JobController::class,'show']);



//Show register form

Route::get('/register',[UserController::class,'create']);