@props(['name'])    

    <input type="{{$name}}" name="{{$name}}" class="bg-main-grey text-sm text-[#586069] w-full px-6 py-7 rounded-2xl outline-none focus:ring  focus:ring-main-blue placeholder:text-[#586069]
    @error($name)
        ring ring-main-red
    @enderror" {{$attributes}} value="{{old($name)}}" required/>    
    
    @error($name)
        <p class="text-main-red mt-2 text-xs">
            {{$message}}
        </p>   
    @enderror

