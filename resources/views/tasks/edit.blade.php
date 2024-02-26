<x-layout>
    <a href="{{url()->previous()}}" class="absolute top-6 left-1/4 uppercase font-semibold text-2xl  flex items-center "><x-icons.go-back-icon/> {{__('tasks.back_link')}}</a>
    <section class="w-1/3 mx-auto space-y-4 h-full">
        <h1 class="font-bold uppercase text-3xl text-center">
            {{((__('tasks.edit')))}}
        </h1>
        <form method="post" class="space-y-4" action="{{route('tasks.update', ['task' => $task])}}">
            @csrf
            @method('PATCH')

            <x-form.input name="name_en" type="text" :text="__('tasks.name_label_en')" :create="true" :value="$task->getTranslation('name','en')" required/>
            <x-form.input name="name_ka" type="text" :text=" __('tasks.name_label_ka')" :create="true" :value="$task->getTranslation('name','ka')" required/>

            <x-form.textarea name="description_en" :text="__('tasks.description_label_en')" required>{{$task->getTranslation('description','en')}}</x-form.textarea>
            <x-form.textarea name="description_ka" :text="__('tasks.description_label_ka')" required>{{$task->getTranslation('description','ka')}}</x-form.textarea>

            <x-form.input name="date" type="date" :text="__('tasks.due_date')" :value="$task->due_date" required/>

            <button class="w-full bg-main-blue text-white font-bold uppercase rounded-[14px] p-5 hover:bg-main-blue/95 duration-100">{{__('tasks.create')}}</button>
    </form>
        
    </section>
</x-layout>