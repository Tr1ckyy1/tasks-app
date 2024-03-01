@props(['name','text','dotNotation'])

<div class="relative">
    <textarea 
    class="peer resize-none bg-main-grey min-h-[160px] text-input-grey-secondary w-full px-6 py-7 rounded-2xl outline-none focus:ring-1  focus:ring-main-blue placeholder:text-input-grey-secondary
    @error($dotNotation)
    ring-1 ring-main-red
    @enderror" 
    placeholder=""
    name="{{$name}}" 
    id="{{$name}}" 
    {{$attributes}} 
    >{{old($dotNotation) ?? $slot}}</textarea>
    <label 
    for="{{$name}}" 
    class="absolute left-6 duration-200 leading-5 text-input-grey text-sm top-2 peer-placeholder-shown:peer-focus:text-sm peer-placeholder-shown:peer-focus:text-input-grey peer-placeholder-shown:peer-focus:top-2 peer-placeholder-shown:text-input-grey-secondary peer-placeholder-shown:top-7 peer-placeholder-shown:text-base"
    >{{$text}}</label>
</div>

@error($dotNotation)
    <p class="text-main-red mt-2 text-xs">
        {{$message}}
    </p>   
@enderror