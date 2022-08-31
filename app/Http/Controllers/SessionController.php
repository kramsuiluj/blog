<?php

namespace App\Http\Controllers;


use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // validate the request
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:255', Rule::exists('users', 'email')],
            'password' => ['required']
        ]);

        // attempt to authenticate and login the user
        // based on the provided credentials
        if (auth()->attempt($attributes)) {
            session()->regenerate();
            // redirect with a success flash message
            return redirect(route('home'))->with('success', 'Welcome Back!');
        }

        // auth failed
        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect(route('home'))->with('success', 'Goodbye!');
    }
}
