<x-layout>
    <section class="w-1/3 mx-auto space-y-4 h-full">
        <h1 class="font-bold uppercase text-3xl text-center">
            {{((__('profile.profile')))}}
        </h1>
        
        <form method="post" class="space-y-4">
            @csrf
            @method('PATCH')

            <x-form.static-email />



            <x-form.input text="Current password" dotNotation="password_current" name="password_current" type="password" :create="true" required/>
            <x-form.input text="New password" dotNotation="password_new" name="password_new" type="password" :create="true" required/>
            <x-form.input text="Retype password" dotNotation="password_confirm" name="password_confirm" type="password" :create="true" required/>
    
            <button class="w-full bg-main-blue text-white font-bold uppercase rounded-[14px] p-5 hover:bg-main-blue/95 duration-100 outline-none">{{__('tasks.edit')}}</button>
    </form>
        
    </section>
</x-layout>