@props(['task'])
<header class="flex justify-between w-full">
    <h1 class="font-bold uppercase text-3xl max-w-[80%]">
        {{$task->name ?? "your tasks"}}
    </h1>
    
    @if($task ?? null)
        <a href="" class="max-h-[50px] uppercase border border-[#499AF9] py-3 px-6 rounded-xl text-[#499AF9] font-bold duration-100 flex gap-4 items-center hover:bg-[#f6faff]">
           <x-icons.edit-icon color="#499AF9" class=""/> edit task
        </a>
    @else
        <div class="flex gap-4">
            <form method="post" action="/tasks/delete-overdue">
                @csrf
                @method("DELETE")

                <button type="submit" 
                class="uppercase border border-[#499AF9] py-3 px-6 rounded-xl text-[#499AF9] font-bold duration-100 hover:bg-[#f6faff]">
                     delete old tasks
                </button>
            </form>
            <x-add-tasks-link/>
     </div>
    @endif
</header>