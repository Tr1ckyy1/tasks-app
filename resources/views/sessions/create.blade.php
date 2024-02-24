@guest
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task Manager</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

</head>
<body>
    <section class="h-screen max-w-[1140px] mx-auto space-y-2">
        <div class="flex h-full items-center gap-20 px-10 py-5">

            <div class="flex-1 h-full">
                <img src="{{asset('images/intersect.png')}}" class="rounded-xl h-full"/>
            </div>
            
            <div class="gap-10 relative flex-1 h-full flex flex-col justify-center">
                <div class="flex gap-20  items-center justify-between">
                    <div>
                        <h1 class="tracking-wide font-bold text-2xl uppercase">{{ __('auth.login.title') }}</h1>
                        <p class="text-secondary-grey text-sm]">{{ __('auth.login.details') }}</p>
                    </div>
                    <img src="{{asset('images/smile.png')}}" class="rounded-xl h-full"/>
                </div>
                
                
                <form class="relative space-y-10" method="POST" action="{{ route('sessions.login') }}">
                    @csrf
                    <x-form.input name="email" placeholder="{{ __('auth.login.email_placeholder') }}" />
                    
                    {{-- TAKE CARE LATER --}}
                    
                    {{-- <label for="password" class="absolute top-2.5 text-sm left-6 text-[#2F363D]">Password</label> --}}
                    
                    
                    {{-- <x-eye class="absolute right-6 top-1/2 -translate-y-1/2"/> --}}
                    {{-- <x-eye-cover class="absolute right-6 top-1/2 -translate-y-1/2"/> --}}
                    
                    
                    {{-- <input id="password" name="password" type="password" class="bg-main-grey text-sm text-[#586069] w-full px-6 py-7 rounded-2xl outline-none focus:ring focus:ring-main-blue placeholder:text-[#959DA5]" type="text" placeholder="Write your password" required/> --}}
                    <x-form.input name='password' placeholder="{{ __('auth.login.password_placeholder') }}"/>

                    <button class="uppercase outline-none bg-main-blue w-full rounded-2xl p-5 text-white font-bold text-lg hover:bg-[#3386E7] duration-100">
                        {{ __('auth.login.button') }}
                    </button>
                </form>

                <div class="absolute bottom-0 left-1/2 -translate-x-1/2 flex gap-5 justify-center align-bottom">
                    <x-link-en/>
                    <x-link-ka/>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

  

@endguest