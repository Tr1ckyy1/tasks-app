<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    
    public function login(StoreLoginRequest $request)
    {

        $attributes = $request->validated();

        if(!auth()->attempt($attributes)){
            throw ValidationException::withMessages(['email' => __('validation.credentials_dont_match')]);
        }

        session()->regenerate();

        return redirect(route('tasks.index'));
    }

    // WORK IN PROGRESS
    // public function updateProfile(StoreProfileRequest $request)
    // {
    //     // $request->validation()
    // }

    public function logout()
    {
        auth()->logout();
        return redirect(route('sessions.create'));
    }
}
