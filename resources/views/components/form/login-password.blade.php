<div x-data="{isFocused: false, showPassword:false}" class="relative">
    <input 
        class="peer bg-main-grey  text-[#586069] w-full px-6 py-7 rounded-2xl outline-none focus:ring  focus:ring-main-blue placeholder:text-[#586069]
        @error('password')
            ring ring-main-red
        @enderror"  
        name="password" 
        id="password" 
        :type= "showPassword ? 'text' : 'password'"
        required
        x-on:focus="isFocused = true"
        x-on:blur="isFocused = false"
        x-bind:placeholder="isFocused ? '{{__('auth.login.password_placeholder')}}' : ''" 
        />    
    <label 
    for="password" 
    class="absolute top-2 text-sm left-6 text-[#2F363D] peer-focus:text-xs peer-focus:top-1 duration-200 leading-5"
    >
        {{__('auth.login.password')}}
    </label>

    <x-icons.eye-icon 
        x-show="!showPassword" 
        x-on:click="showPassword = !showPassword" 
        class="absolute right-6 top-1/2 -translate-y-1/2"/>
    <x-icons.eye-covered-icon 
        x-show="showPassword" 
        x-on:click="showPassword = !showPassword" 
        class="absolute right-6 top-1/2 -translate-y-1/2"/>
</div>

@error('password')
    <p class="text-main-red mt-2 text-xs">
        {{$message}}
    </p>   
@enderror

