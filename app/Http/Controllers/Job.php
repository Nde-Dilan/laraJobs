<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Job as ModelsJob;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Js;

class Job extends Controller
{

    //Get and Show all jobs
    public function index(Request $request)
    {
        // // dd($this);
        // // Récupérez la requête de l'appareil mobile
        // $query = $this->window->matchMedia('(max-width: 768px)');

        // // Définissez le nombre d'éléments à afficher par page
        // $perPage = $query.matches ? 6 : 15;

        // // Retournez la pagination
        // return $this->paginate($data, $perPage);

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

        //Storing the logo

        if ($request->hasFile('logo')) {
            // dd($request->file('logo')->store('logos','public'));
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        } else {
            $formFields['logo'] = "images/no-image.png";
        }

        // dd($formFields);

        ModelsJob::create($formFields);


        return redirect('/')->with('message', 'Job created successfully!');
    }
    public function edit(ModelsJob $job)
    {
        return view('jobs/edit', [
            'job' => $job
        ]);
    }
    public function update(Request $request, ModelsJob $job)

    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'email' => ['required', 'email'],
        ]);

        //Storing the logo

        if ($request->hasFile('logo')) {
            // dd($request->file('logo')->store('logos','public'));
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // dd($formFields);

        $job->update($formFields);


        return back()->with('message', 'Job updated successfully!');
    }
    public function destroy(ModelsJob $job)
    {
        $job->delete();

        return redirect('/')->with('message', 'Job deleted successfully!');
    }
}
