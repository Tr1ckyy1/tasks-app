<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request){
        $tasksQuery = Task::query();

        if ($request->is('overdue-tasks')) {
            $tasksQuery->where('due_date', '<', Carbon::now()->format("Y-m-d"));
        }

        $tasks = $tasksQuery->latest()->paginate(8);

        if($tasks->isEmpty() && $tasks->currentPage() > 1){
            return redirect($request->is('overdue-tasks') ? "/overdue-tasks?page=" . $tasks->lastPage() : "/?page=" . $tasks->lastPage());
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
