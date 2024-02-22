@props(['name'])    

    <input type="{{$name}}" name="{{$name}}" class="bg-[#F6F8FA] text-sm text-[#586069] w-full px-6 py-7 rounded-2xl outline-none focus:ring  focus:ring-[#499AF9] placeholder:text-[#586069]
    @error($name)
        ring ring-[#E91818]
    @enderror" {{$attributes}} value="{{old($name)}}" required/>    
    
    @error($name)
        <p class="text-red-500 mt-2 text-xs">
            {{$message}}
        </p>   
    @enderror

