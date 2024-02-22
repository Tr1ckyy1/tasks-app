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
                <p class="{{ strtotime($task->created_at) < strtotime('today') ? 'text-red-500' : '' }}">{{ date("j/m/y",strtotime($task->created_at)) }}</p>

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


{{-- date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm --}}

{{-- today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01 --}}

{{-- $timestamp = strtotime($received_date);

// Format the timestamp to display in d/m/Y format
$formatted_date = date("d/m/Y", $timestamp); --}}