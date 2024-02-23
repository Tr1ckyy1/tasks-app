<x-layout>
    <section class="w-full h-[650px]">
        @if(request('overdue') && $tasks->isEmpty())
            <header class="flex justify-between w-full">
                <h1 class="font-bold uppercase text-3xl max-w-[70%] text-[#E91818]">
                    No overdue tasks
                </h1>
                <div class="flex gap-4">
                    <a href="/tasks" class="max-h-[50px] inline-flex uppercase border border-[#499AF9] py-3 px-6 rounded-xl text-[#499AF9] font-bold duration-100 hover:bg-[#f6faff]">
                        Back to all tasks
                    </a>             
                    <x-add-tasks-link/>
                </div>
            </header>
        @elseif ($tasks->count())
            <x-tasks-header/>
            <main class="mt-10">
                <table class="w-full overflow-hidden">
                    <thead class="border-b">
                        <tr>
                            <th class="py-3 pb-6 font-normal text-left">Task Name</th>
                            <th class="py-3 pb-6 font-normal text-left pl-10">Description</th>
                            
                            <th class="py-3 pb-6 font-normal text-left pl-10">
                                <div class="flex items-center gap-2">
                                    <span>Created at</span>
                                    <x-icons.up-down-arrow-icon/>
                                </div>
                            </th>
                            <th class="py-3 pb-6 font-normal text-left">
                                <div class="flex items-center gap-2">
                                    <span>Due Date</span>
                                    <x-icons.up-down-arrow-icon/>
                                </div>
                            </th>
                            
                            <th class="py-3 pb-6 font-normal text-left">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                            
                        @foreach ($tasks as $task)
                        <x-table-row :task="$task"/>
                        @endforeach
                    </tbody>
                    
                </table>
                
            </main>
            <footer class="mt-10">
                {{$tasks->links ()}}
            </footer>

        @else
    
            <header class="flex justify-between w-full">
                <h1 class="font-bold uppercase text-3xl max-w-[80%]">
                    you have no tasks 
                </h1>
                    <x-add-tasks-link/>
                </div>
            </header>

        @endif
    </section>
</x-layout>
