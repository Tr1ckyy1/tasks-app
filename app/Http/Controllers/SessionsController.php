<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create(){
        return view('sessions.create');
    }
    
    public function login(StoreLoginRequest $request){

        $attributes = $request->validated();

        if(!auth()->attempt($attributes)){
            throw ValidationException::withMessages(['email' => __('validation.credentials_dont_match')]);
        }

        session()->regenerate();

        return redirect('/tasks');
    }

    public function logout(){
        auth()->logout();
        return redirect('/login');
    }
}
