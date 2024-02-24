<aside class="h-full bg-[#F6F8FA] min-w-44 rounded-2xl flex flex-col items-center py-8 justify-between px-8">
    <section class="flex flex-col items-center gap-20">

        <header>
            <img src="{{asset('images/intersect.png')}}" alt="" class="w-16 h-16 rounded-full"/>
        </header>
        <main>
            <ul class="space-y-4">
                <x-list :link="route('tasks.index')" name="{{ __('sidebar.tasks') }}">
                    <div class="w-8">
                        <x-icons.my-tasks-icon />
                    </div>
                </x-list>

                <x-list :link="route('tasks.index', ['overdue' => 'show'])" name="{{ __('sidebar.overdue') }}">
                    <div class="w-8">
                        <x-icons.due-tasks-icon />
                    </div>
                </x-list>

                <x-list name="{{ __('sidebar.profile') }}">
                    <div class="w-8">

                        <x-icons.profile-icon/>
                    </div>
                </x-list>
            </ul>
        </main>
    </section>
    
    <footer class="w-full">
        <form method="POST" action="{{route('sessions.logout')}}">
            @csrf

            <button type="submit" class="flex items-center gap-3 hover:underline"> <x-icons.logout-icon class="w-5"/>{{ __('sidebar.logout') }}</button>
        </form>
    </footer>
</aside>    


{{-- 'my_tasks' => 'ჩემი დავალებები',
    'overdue' => 'გადაცილებული დავალებები',
    'profile' => 'პროფილი',
    'logout' => 'გასვლა' --}}