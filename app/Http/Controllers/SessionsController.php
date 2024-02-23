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
    
    public function store(StoreLoginRequest $request){

        $attributes = $request->validated();

        if(!auth()->attempt($attributes)){
            throw ValidationException::withMessages(['email' => "Your credentials don't match"]);
        }

        session()->regenerate();

        return redirect('/tasks');
    }

    public function destroy(){
        auth()->logout();
        return redirect('/');
    }
}
