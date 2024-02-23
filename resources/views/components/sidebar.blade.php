<aside class="h-full bg-[#F6F8FA] w-44 rounded-2xl flex flex-col items-center py-8 justify-between">
    <section class="flex flex-col items-center gap-20">

        <header>
            <img src="{{asset('images/intersect.png')}}" alt="" class="w-16 h-16 rounded-full"/>
        </header>
        <main>
            <ul class="space-y-4">
                <x-list name="My tasks">
                    <div class="w-8">
                        <x-icons.my-tasks-icon />
                    </div>
                </x-list>

                <x-list link="/overdue-tasks" name="Due tasks">
                    <div class="w-8">
                        <x-icons.due-tasks-icon />
                    </div>
                </x-list>

                <x-list name="Profile">
                    <div class="w-8">

                        <x-icons.profile-icon/>
                    </div>
                </x-list>
            </ul>
        </main>
    </section>
    
    <footer>
        <form method="POST" action="/logout">
            @csrf

            <button type="submit" class="flex items-center gap-3 hover:underline"> <x-icons.logout-icon class="w-5"/>Log out</button>
        </form>
    </footer>
</aside>    