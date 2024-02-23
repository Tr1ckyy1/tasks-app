<x-layout>
    <section class="w-full h-[650px] space-y-10">
        <x-tasks-header :task="$task"/>
        <div class="max-w-[80%] space-y-2">
            <h1 class="text-[#6A737D]">
                Description
            </h1>
            <p>{{ $task->description }}</p>
        </div>
        <div class="flex gap-20">
            <div>
                <h1 class="text-[#6A737D]">
                    Created date
                </h1>
                <p>{{ date("j/m/y",strtotime($task->created_at)) }}</p>

            </div>
            <div>
                <h1 class="text-[#6A737D]">
                    Due date
                </h1>
                <p class="{{ strtotime($task->due_date) < strtotime('today') ? 'text-red-500' : '' }}">{{ date("j/m/y",strtotime($task->due_date)) }}</p>
            </div>
        </div>
    </section>
</x-layout>