<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view("tasks.index", ['tasks' =>  Task::latest()->paginate(8)]);
    }

    public function show(Task $task){
        return view("tasks.show",["task" => $task]);
    }

    public function destroy(Task $task){
        $task->delete();

        return back();
    }

}
