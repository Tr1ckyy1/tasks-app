<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreProfileRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    
    public function login(StoreLoginRequest $request):RedirectResponse
    {

        $attributes = $request->validated();

        if(!auth()->attempt($attributes)){
            throw ValidationException::withMessages(['email' => __('validation.credentials_dont_match')]);
        }

        session()->regenerate();

        return redirect(route('tasks.index'));
    }


    public function update(StoreProfileRequest $request, User $user): RedirectResponse
    {
        $attributes = $request->validated();

        if (
            !isset($attributes['password_new']) &&
            !isset($attributes['profile_image']) &&
            !isset($attributes['cover_image'])
        ) {
            return back()->with('error',__('profile.error'));
        }

        if($attributes['password_current'] && !Hash::check($attributes['password_current'],$user->password)){
            return back()->withErrors(['password_current' => __('validation.confirmed')]);
        }

        if(isset($attributes['password_new'])){
            $user->password = bcrypt($attributes['password_new']);
            $user->save();
        }
        if(isset($attributes['profile_image'])){
            $filename = 'profile-image-'.$user->id . '.' . $request->profile_image->getClientOriginalExtension();
            $request->profile_image->storeAs('images',$filename,'public');
            $user->update(['profile_image' => $filename]);
        }

        if(isset($attributes['cover_image'])){
            $request->cover_image->storeAs('images','cover_image.png','public');
        }
        
        return back()->with('success',__('profile.change_success'));
    }
    

    public function logout(): RedirectResponse
    {
        auth()->logout();
        return redirect(route('sessions.create'));
    }
    
}
