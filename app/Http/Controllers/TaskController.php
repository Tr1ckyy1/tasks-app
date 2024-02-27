<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasksQuery = auth()->user()->tasks();

        $sortCreated = request('sortCreated');
        $sortDue = request('sortDue');
        
        if($sortCreated){
            if($sortCreated === 'asc') $tasksQuery->oldest();
            elseif($sortCreated === 'desc') $tasksQuery->latest();
        }

        if($sortDue){
            if($sortDue === 'asc') $tasksQuery->oldest('due_date');
            elseif($sortDue === 'desc') $tasksQuery->latest('due_date');
        }
        
        if (request('overdue')) {
            $tasksQuery->where('due_date', '<', now()->format("Y-m-d"));
        }

        $tasks = $tasksQuery->latest()->paginate(8)->withQueryString();

        if ($tasks->isEmpty() && $tasks->currentPage() > 1) {
            return redirect($tasks->previousPageUrl());
        }

        return view("tasks.index", ['tasks' =>  $tasks]);
    }
    
    public function store(StoreTaskRequest $request)
    {
        Task::create([...$request->validated(),'user_id' => auth()->id()]);
            
        return redirect(route('tasks.index'));
    }

    public function show(Task $task)
    {
        return view("tasks.show",["task" => $task]);
    }  
    
    public function edit(Task $task)
    {
        return view("tasks.edit", ['task' => $task]);
    }

    public function update(StoreTaskRequest $request,Task $task)
    {
        $task->update($request->validated());

        return redirect(route('tasks.index'));
    }
    
    public function destroyAll()
    {
       Task::where('due_date','<', now()->format("Y-m-d"))->delete();
       return back();
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return back();
    }
}
