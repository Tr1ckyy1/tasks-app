<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::latest()->paginate(8);
        if($tasks->isEmpty() && $tasks->currentPage() > 1){
            return redirect("/?page=" . $tasks->lastPage());
        }
        return view("tasks.index", ['tasks' =>  $tasks]);
    }

    public function show(Task $task){
        return view("tasks.show",["task" => $task]);
    }

    public function destroy(Task $task){
        $task->delete();

        return back();
    }

}
