<x-layout>
    <section class="w-1/3 mx-auto space-y-4 h-full">
        <h1 class="font-bold uppercase text-3xl text-center">
            {{((__('tasks.create')))}}
        </h1>
        <form method="post" class="space-y-4" action="{{route('tasks.store')}}">
            @csrf
            <x-form.input name="name[en]" type="text" :text="__('tasks.name_label_en')" :create="true"  required/>
            <x-form.input name="name[ka]" type="text" :text="__('tasks.name_label_ka')" :create="true"  required/>

            <x-form.textarea name="description[en]" :text="__('tasks.description_label_en')" required/>
            <x-form.textarea name="description[ka]" :text="__('tasks.description_label_ka')" required/>

            <x-form.input name="due_date" type="date" :text="__('tasks.due_date')" required/>

            <button class="w-full bg-main-blue text-white font-bold uppercase rounded-[14px] p-5 hover:bg-main-blue/95 duration-100">{{__('tasks.create')}}</button>
    </form>
        
    </section>
</x-layout>