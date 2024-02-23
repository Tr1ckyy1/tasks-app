<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request){
        $tasksQuery = Task::query();
        
         if (request('overdue')) {
            $tasksQuery->where('due_date', '<', now()->format("Y-m-d"));
        }

        $tasks = $tasksQuery->paginate(8)->withQueryString();

        if ($tasks->isEmpty() && $tasks->currentPage() > 1) {
            return redirect($tasks->previousPageUrl());
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
