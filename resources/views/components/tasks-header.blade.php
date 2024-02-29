@props(['task'])
<header class="flex justify-between w-full">
    <h1 class="font-bold uppercase text-3xl max-w-[80%]">
        {{$task->name ?? __('tasks.your_tasks_text')}}
    </h1>
    
    @if($task ?? null)
        <a href="{{route('tasks.edit', ['task' => $task])}}" class="max-h-[50px] uppercase border border-main-blue py-3 px-6 rounded-xl text-main-blue font-bold duration-100 flex gap-4 items-center hover:bg-[#f6faff]">
           <x-icons.edit-icon color="#499AF9" class=""/> {{__('tasks.edit_link')}}
        </a>
    @else
        <div class="flex gap-4">
            <form method="post" action="{{route('tasks.destroy_all')}}" novalidate>
                @csrf
                @method("DELETE")

                <button type="submit" 
                class="uppercase border border-main-blue py-3 px-6 rounded-xl text-main-blue font-bold duration-100 hover:bg-[#f6faff]">
                     {{__('tasks.delete_old_tasks')}}
                </button>
            </form>
            <x-add-tasks-link/>
     </div>
    @endif
</header>