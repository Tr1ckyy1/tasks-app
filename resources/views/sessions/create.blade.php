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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <section class="h-screen max-w-[1140px] mx-auto space-y-2">
        <div class="flex h-full items-center gap-20 px-10 py-5">

            <div class="flex-1 h-full">
                <img src="{{file_exists(public_path('storage/images/cover_image.png')) ? asset('storage/images/cover_image.png') : asset('storage/images/intersect.png')}}" class="rounded-xl h-full"/>
            </div>
            
            <div class="gap-10 relative flex-1 h-full flex flex-col justify-center">
                <div class="flex gap-20  items-center justify-between">
                    <div>
                        <h1 class="tracking-wide font-bold text-2xl uppercase">{{ __('auth.login.title') }}</h1>
                        <p class="text-secondary-grey text-sm]">{{ __('auth.login.details') }}</p>
                    </div>
                    <img src="{{asset('storage/images/smile.png')}}" class="rounded-xl h-full"/>
                </div>
                
                
                <form class="space-y-10" method="POST" action="{{ route('sessions.login') }}">
                    @csrf
                    
                    <x-form.login-input/>
                    <x-form.login-password/>

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