<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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


    public function update(StoreProfileRequest $request, User $user)
    {
        $attributes = $request->validated();
        if($attributes['password_current'] && !Hash::check($attributes['password_current'],$user->password)){
            return back()->withErrors(['password_current' => __('validation.confirmed')]);
        }

        if(isset($attributes['password_new'])){
            $user->password = bcrypt($attributes['password_new']);
            $user->save();
        }
        if(isset($attributes['profile_image'])){
            $filename = $request->profile_image->getClientOriginalName();
            $request->profile_image->storeAs('images','profile_image-'.$user->id  .'.png','public');
            $user->update(['profile_image' => $filename]);
        }

        if(isset($attributes['cover_image'])){
            $filename = $request->cover_image->getClientOriginalName();
            $request->cover_image->storeAs('images','cover_image.png','public');
        }
        
        return back()->with('success',__('profile.change_success'));
        
    }

    public function logout()
    {
        auth()->logout();
        return redirect(route('sessions.create'));
    }
    
}
