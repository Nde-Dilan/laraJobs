<?php

namespace App\Http\Controllers;

use App\Models\Job as ModelsJob;
use Illuminate\Http\Request;

class Job extends Controller
{
    //Get and Show all jobs
    public function index(){
        return view('jobs/jobs', [
            'jobs'=> ModelsJob::all() 
        ]);
    }

    //Get an show a single job
    public function show(ModelsJob $job){
        return view('jobs/job',[
            'job'=> $job
        ]);
    }
    public function create(ModelsJob $job){
        return view('jobs/job',[
            'job'=> $job
        ]);
    }
    public function store(ModelsJob $job){
        return view('jobs/job',[
            'job'=> $job
        ]);
    }
    public function edit(ModelsJob $job){
        return view('jobs/job',[
            'job'=> $job
        ]);
    }
    public function update(ModelsJob $job){
        return view('jobs/job',[
            'job'=> $job
        ]);
    }
    public function destroy(ModelsJob $job){
        return view('jobs/job',[
            'job'=> $job
        ]);
    }
}
