<x-layout>
    <section class="w-full h-[650px]">
        @if ($tasks->count())
        <x-tasks-header/>
        <main class="mt-10">
            <table class="w-full overflow-hidden ">
                <thead class="border-b">
                    <tr>
                        <th class="py-3 pb-6 font-normal text-left">Task Name</th>
                        <th class="py-3 pb-6 font-normal text-left pl-10">Description</th>
                        <th class="py-3 pb-6 font-normal text-left pl-10">Created at</th>
                        <th class="py-3 pb-6 font-normal text-left">Due Date</th>
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
        <footer>
        </footer>
        @else
    
            <header class="flex justify-between w-full">
                <h1 class="font-bold uppercase text-3xl max-w-[80%]">
                    you have no tasks
                </h1>
                    <a href="" class="py-3 uppercase bg-[#499AF9] text-white rounded-xl  font-bold flex px-6 items-center justify-center gap-3 hover:brightness-95 duration-100">
                        <span class="w-[26px] h-[26px] rounded-full border-2  border-white flex justify-center items-center text-xl font-bold">+</span> add task
                    </a>
                </div>
            </header>
        @endif
    </section>
</x-layout>
