<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

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

Route::get('/', function () {
    return view('jobs', [
        'heading' => 'Latest Jobs',
        'jobs'=> Job::all() 
    ]);
});

Route::get('/search',function (Request $request){
    dd($request->name);
});

Route::get('/jobs/{id}/',function ($id){
    
   return view('job',[
        'job'=> Job::find($id)
    ]);
});