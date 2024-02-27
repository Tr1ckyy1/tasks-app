<x-layout>
    <section class="w-1/3 mx-auto space-y-4 h-full flex flex-col">
        <h1 class="font-bold uppercase text-3xl text-center">
            {{((__('profile.profile')))}}
        </h1>
        
        <form method="post" action="{{route('sessions.update',['user' => auth()->id()])}}" enctype="multipart/form-data" class="space-y-10 h-full">
            @csrf
            @method('PATCH')

            <x-form.static-email />


            <div>

                <h1 class="text-center uppercase text-lg mt-14">{{__('profile.change_password')}}</h1>
            </div>


            <div class="space-y-4">
                <x-form.input :text="__('profile.current')" dotNotation="password_current" name="password_current" type="password"/>
                <x-form.input :text="__('profile.new')" dotNotation="password_new" name="password_new" type="password"/>
                <x-form.input :text="__('profile.confirm')" dotNotation="password_confirm" name="password_new_confirmation" type="password"/>
            </div>

            <div class="space-y-8">
                <h1 class="text-center uppercase text-lg mt-14">{{__('profile.change_photos')}}</h1>
                <div class="flex items-center gap-4">
                    <div class="h-32 w-32">
                        <img src="{{file_exists(public_path('storage/images/profile_image-' .auth()->id() .'.png')) ? asset('storage/images/profile_image-' .auth()->id() .'.png') : asset('storage/images/basic-avatar.png')}}" class="w-full h-full rounded-full"/>
                    </div>
                    <x-form.upload-input name="profile_image" :text="__('profile.upload_profile')"/>
                    <button class="uppercase font-semibold tracking-wide hover:underline duration-100">delete</button>
                </div>
                <div class="flex items-center gap-4">
                    <div class="h-32 w-32">
                        <img src="{{file_exists(public_path('storage/images/cover_image.png')) ? asset('storage/images/cover_image.png') : asset('storage/images/intersect.png')}}" class="w-full h-full rounded-xl"/>
                    </div>
                    <x-form.upload-input name="cover_image" :text="__('profile.upload_cover')"/>
                    <button class="uppercase font-semibold tracking-wide hover:underline duration-100">delete</button>
                </div>
            </div>
    
            <button class="w-full bg-main-blue text-white font-bold uppercase rounded-[14px] p-5 hover:bg-main-blue/95 duration-100 outline-none">{{__('profile.change_button')}}</button>
    </form>
        
    </section>
</x-layout>