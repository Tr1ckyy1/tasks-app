<x-layout>
    <section class="w-full h-[650px]">
        <x-tasks-header :task="$task"/>
        <div class="flex flex-col justify-between gap-10 max-h-full">
            <div class="max-w-[80%] space-y-2 h-full overflow-y-auto">
                <h1 class="text-[#6A737D]">
                {{__('tasks.description')}}
            </h1>
            <p>{{ $task->description }}</p>
        </div>
            <div class="flex gap-20">
                <div class="space-y-1">
                    <h1 class="text-[#6A737D]">
                        {{__('tasks.created_at')}}
                    </h1>
                    <p>{{ date("d/m/y",strtotime($task->created_at)) }}</p>
                    
                </div>
                <div class="space-y-1">
                    <h1 class="text-[#6A737D]">
                        {{__('tasks.due_date')}}
                    </h1>
                    <p class="{{ strtotime($task->due_date) < strtotime('today') ? 'text-red-500' : '' }}">{{ date("d/m/y",strtotime($task->due_date)) }}</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>