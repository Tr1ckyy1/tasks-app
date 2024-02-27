@props(['name','text'])

<div>
    <input id="{{$name}}" name="{{$name}}" type="file" accept="image/*" hidden />
    <label for="{{$name}}" class="whitespace-nowrap flex items-center gap-10 rounded-xl py-5 px-12 border border-main-blue leading-4 font-bold text-main-blue uppercase focus:outline-none hover:bg-main-blue/10 duration-100 
    @error($name) 
    border-main-red
    @enderror" >
        <x-icons.upload-icon/> {{$text}}
    </label>
</div>

@error($name)
        <p class="text-main-red mt-2 text-xs">
            {{$message}}
        </p>   
@enderror
