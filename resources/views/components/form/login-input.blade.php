<div x-data="{isFocused: false, showPassword:false}" class="relative">
    <input 
        class="peer bg-main-grey  text-[#586069] w-full px-6 py-7 rounded-2xl outline-none focus:ring  focus:ring-main-blue placeholder:text-[#586069]
        @error('password')
            ring ring-main-red
        @enderror"  
        name="email" 
        id="email" 
        value="{{old('email')}}"
        required
        placeholder=""
        x-on:focus="isFocused = true"
        x-on:blur="isFocused = false"
        x-bind:placeholder="isFocused ? '{{__('auth.login.email_placeholder')}}' : ''" 
        />    
    <label 
    for="email" 
    class="absolute top-1 left-6 text-[#2F363D] text-xs peer-placeholder-shown:text-sm peer-placeholder-shown:top-2 peer-placeholder-shown:peer-focus:top-1 duration-200 peer-placeholder-shown:peer-focus:text-xs"
    >
        {{__('auth.login.email')}}
    </label>
</div>

@error('email')
    <p class="text-main-red mt-2 text-xs">
        {{$message}}
    </p>   
@enderror