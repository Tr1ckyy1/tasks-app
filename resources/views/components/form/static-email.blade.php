<div class="relative">
    <input 
    class="peer bg-main-grey  text-[#586069] w-full px-6 py-7 rounded-2xl outline-none placeholder:text-[#959DA5]"
    name="email" 
    id="email" 
    placeholder="{{auth()->user()->email}}"
    readonly
    />    
    <label 
    for="email" 
    class="absolute left-6 duration-200 leading-5 text-[#959DA5] text-sm top-4 -translate-y-1/2"
    >{{__('profile.email')}}</label>
</div>

