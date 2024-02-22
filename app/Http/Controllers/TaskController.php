<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view("tasks.index");
    }

   
// $attributes['user_id'] = auth()->id(); 
// request()->user()->id
// request()->user()->posts()->create();
}
