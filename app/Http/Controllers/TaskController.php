<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $task = Task::latest()->paginate(8);
        if($task->isEmpty() && $task->lastPage() > 1){
            return redirect("/?page=" . $task->lastPage());
        }
        return view("tasks.index", ['tasks' =>  $task]);
    }

    public function show(Task $task){
        return view("tasks.show",["task" => $task]);
    }

    public function destroy(Task $task){
        $task->delete();

        return back();
    }

}
