<x-layout>
    <a href="{{url()->previous()}}" class="absolute top-24 left-1/4 uppercase font-semibold text-2xl  flex items-center "><x-icons.go-back-icon/> {{__('tasks.back_link')}}</a>
    <section class="w-1/3 mx-auto space-y-4 h-full py-20">
        <h1 class="font-bold uppercase text-3xl text-center mb-4">
            {{((__('tasks.edit')))}}
        </h1>
        <form method="post" class="space-y-4" action="{{route('tasks.update', ['task' => $task])}}" novalidate>
            @csrf
            @method('PATCH')

            <div class="h-26">
                <x-form.input dotNotation="name.en" name="name[en]" type="text" :text="__('tasks.name_label_en')" :value="old('name.en',$task->getTranslation('name','en'))" required/>
            </div>
            <div class="h-26">
                <x-form.input dotNotation="name.ka" name="name[ka]" type="text" :text=" __('tasks.name_label_ka')" :value="old('name.ka',$task->getTranslation('name','ka'))" required/>
            </div>

            <div class="h-48">
                <x-form.textarea dotNotation="description.en" name="description[en]" :text="__('tasks.description_label_en')">{{old('description.en',$task->getTranslation('description','en'))}}</x-form.textarea>
            </div>
            <div class="h-48">
                <x-form.textarea dotNotation="description.ka" name="description[ka]" :text="__('tasks.description_label_ka')">{{old('description.ka',$task->getTranslation('description','ka'))}}</x-form.textarea>
            </div>

            <div class="h-26">
                <x-form.input dotNotation="due_date" name="due_date" type="date" :text="__('tasks.due_date')" :value="old('due_date',$task->due_date)" required/>
            </div>

            <button class="w-full bg-main-blue text-white font-bold uppercase rounded-[14px] p-5 hover:bg-main-blue/95 duration-100 outline-none">{{__('tasks.edit')}}</button>
    </form>
        
    </section>
</x-layout>