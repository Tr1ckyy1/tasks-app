@props(['name','text','dotNotation'])    

    <div class="relative">
        <input 
        class="peer bg-main-grey  text-input-grey-secondary w-full px-6 py-7 rounded-2xl outline-none focus:ring  focus:ring-main-blue placeholder:text-input-grey-secondary
        @error($dotNotation) 
        ring ring-main-red
        @enderror" 
        name="{{$name}}" 
        id="{{$name}}" 
        {{$attributes(['value' => old($dotNotation), 'placeholder' => ''])}} 
        />    
        <label 
        for="{{$name}}" 
        class="absolute left-6 duration-200 leading-5 {{'text-input-grey text-sm top-4 -translate-y-1/2 peer-placeholder-shown:peer-focus:text-sm peer-placeholder-shown:peer-focus:text-input-grey peer-placeholder-shown:peer-focus:top-4 peer-placeholder-shown:text-input-grey-secondary peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base'}}"
        >{{$text}}</label>
    </div>

    @error($dotNotation)
        <p class="text-main-red mt-2 text-xs">
            {{$message}}
        </p>   
    @enderror
