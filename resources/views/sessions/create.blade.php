@guest
    
<x-layout>
    <section class="h-1/3 max-w-screen-lg mx-auto py-10 space-y-2">
        <h1 class="text-gray-400">Log in</h1>
        <form class="flex h-full items-center gap-20 px-10 py-5" method="POST" action="/login">
            @csrf
            
            <div class="h-[700px] flex-1">
                <img src="{{asset('images/intersect.png')}}" alt="" class="rounded-xl h-full"/>
            </div>
            

            <div class="space-y-10 flex-1" x-data="{show: false}">
                <div class="flex gap-20 h-full items-center justify-between">
                    <div>
                        <h1 class="tracking-wide font-bold text-2xl">{{strtoupper('welcome back!')}}</h1>
                        <p class="text-[#6A737D] text-sm]">Please enter your details!</p>
                    </div>
                    <img src="{{asset('images/smile.png')}}" alt="" class="rounded-xl h-full"/>
                </div>
                
                <x-form.input name="email" placeholder="E-mail" />
                
                <div class="relative">
                    
                    {{-- TAKE CARE LATER --}}
                    
                    {{-- <label for="password" class="absolute top-2.5 text-sm left-6 text-[#2F363D]">Password</label> --}}
                    
                    
                    {{-- <x-eye class="absolute right-6 top-1/2 -translate-y-1/2"/> --}}
                    {{-- <x-eye-cover class="absolute right-6 top-1/2 -translate-y-1/2"/> --}}
                    
                    
                    {{-- <input id="password" name="password" type="password" class="bg-[#F6F8FA] text-sm text-[#586069] w-full px-6 py-7 rounded-2xl outline-none focus:ring focus:ring-[#499AF9] placeholder:text-[#959DA5]" type="text" placeholder="Write your password" required/> --}}
                    <x-form.input name='password' placeholder="Write your password"     />
                </div>

                <button class="outline-none bg-[#499AF9] w-full rounded-2xl p-5 text-white font-bold text-lg hover:bg-[#3386E7] duration-100">
                    {{strtoupper("log in")}}
                </button>
                
            </div>

            
        </form>
    </section>
</x-layout>
@endguest