<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view('users/register');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:8'],
            // 'password_confirmation' =>[ 'required','min:8'],
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);
        auth()->login($user);

        return redirect('/')->with('message', 'Account created successfully!');
    }
    public function logout(Request $request)
    {
        auth()->logout();

        //Invalidate the user session && regenarate the csrf token

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', "Logged Out Successfully!");
    }
    public function login()
    {
        return view('users/login');
    }
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([

            'email' => ['required', 'email'
        ],
            'password' => ['required'],
            // 'password_confirmation' =>[ 'required','min:8'],
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message',"Logged in successfully!");
        }

        return back()->withErrors(['email'=>"Invalid Credentials"])->onlyInput('email');
    }
}
