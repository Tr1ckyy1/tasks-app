@props(['name','text','create' => false])    
    <div class="relative">
        <input 
        class="peer bg-main-grey  text-[#586069] w-full px-6 py-7 rounded-2xl outline-none focus:ring  focus:ring-main-blue placeholder:text-[#586069]
        @error($name)
        ring ring-main-red
        @enderror" 
        name="{{$name}}" 
        id="{{$name}}" 
        placeholder=""
        {{$attributes(['value' => old($name)])}} 
        />    
        <label 
        for="{{$name}}" 
        class="absolute left-6 duration-200 leading-5 {{ $create ? 'text-[#959DA5] text-sm top-4 -translate-y-1/2 peer-placeholder-shown:peer-focus:text-sm peer-placeholder-shown:peer-focus:text-[#959DA5] peer-placeholder-shown:peer-focus:top-4 peer-placeholder-shown:text-[#586069] peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base' : 'text-[#2F363D] top-2 text-sm peer-focus:text-xs peer-focus:top-1'}}"
        >{{$text}}</label>
    </div>

    @error($name)
        <p class="text-main-red mt-2 text-xs">
            {{$message}}
        </p>   
    @enderror
