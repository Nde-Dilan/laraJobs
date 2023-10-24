<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Job as ModelsJob;
use Illuminate\Support\Facades\Session;

class Job extends Controller
{
    
    //Get and Show all jobs
    public function index(Request $request)
    {
    //    dd(ModelsJob::latest()->filter(["$request->tag", "$request->search"])->paginate(2));
        return view('jobs/jobs', [
            // 'jobs'=> ModelsJob::all() 
            'jobs' => ModelsJob::latest()->filter(["$request->tag", "$request->search"])->simplePaginate(5)
        ]);
    }


    public function show(ModelsJob $job)
    {
        return view('jobs/job', [
            'job' => $job
        ]);
    }
    public function create()
    {
        return view('jobs/create');
    }
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('jobs', 'company')],
            'location' => 'required',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'email' => ['required', 'email'],
        ]);

        ModelsJob::create($formFields);


        return redirect('/')->with('message','testing message');
    }
    public function edit(ModelsJob $job)
    {
        return view('jobs/job', [
            'job' => $job
        ]);
    }
    public function update(ModelsJob $job)
    {
        return view('jobs/job', [
            'job' => $job
        ]);
    }
    public function destroy(ModelsJob $job)
    {
        return view('jobs/job', [
            'job' => $job
        ]);
    }
}
