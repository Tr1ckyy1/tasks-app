<x-layout class="items-center gap-10">
    <section class="w-full">
        <x-tasks-header/>
        <main class="mt-10">
            <table class="min-w-full rounded-lg overflow-hidden ">
                <thead class="border-b">
                    <tr>
                        <th class="py-3 pb-6 font-normal text-left">Task Name</th>
                        <th class="py-3 pb-6 font-normal text-left pl-4">Description</th>
                        <th class="py-3 pb-6 font-normal text-left pl-4">Created at</th>
                        <th class="py-3 pb-6 font-normal text-left">Due Date</th>
                        <th class="py-3 pb-6 font-normal text-left">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @for ($i =0 ; $i < 8 ; $i++)
                        <x-table-row/>
                    @endfor
                </tbody>
                
            </table>
        </main>
        <footer></footer>
    </section>
</x-layout>
