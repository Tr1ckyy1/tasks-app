@props(['name','text'])
<div class="relative">
    <textarea 
    class="peer resize-none bg-main-grey min-h-[160px] text-[#586069] w-full px-6 py-7 rounded-2xl outline-none focus:ring  focus:ring-main-blue placeholder:text-[#586069]
    @error($name)
    ring ring-main-red
    @enderror" 
    placeholder=""
    name="{{$name}}" 
    id="{{$name}}" 
    {{$attributes}} 
    >{{old($name) ?? $slot}}</textarea>
    <label 
    for="{{$name}}" 
    class="absolute left-6 duration-200 leading-5 text-[#959DA5] text-sm top-2 peer-placeholder-shown:peer-focus:text-sm peer-placeholder-shown:peer-focus:text-[#959DA5] peer-placeholder-shown:peer-focus:top-2 peer-placeholder-shown:text-[#586069] peer-placeholder-shown:top-7 peer-placeholder-shown:text-base"
    >{{$text}}</label>
</div>

@error($name)
    <p class="text-main-red mt-2 text-xs">
        {{$message}}
    </p>   
@enderror


{{-- <textarea class="border border-gray-200 p-2 w-full rounded" type="text" name="{{ $name }}" id="{{ $name }}" required >
    {{$slot ?? old($name)}}
</textarea> --}}
{{-- <x-form.textarea name="excerpt">{{old('excerpt',$post->excerpt)}}</x-form.textarea> --}}
