@props(['name','text'])

<div>
    <input onchange="changeImage(event,name)" id="{{$name}}" name="{{$name}}" type="file" accept="image/*" hidden />
    <label for="{{$name}}" class="cursor-pointer whitespace-nowrap flex items-center gap-10 rounded-xl py-5 px-12 border border-main-blue leading-4 font-bold text-main-blue uppercase focus:outline-none hover:bg-main-blue/10 duration-100 
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

@once 
    <script>
    function changeImage(event,name){
            if(event.target.files && event.target.files[0]){
                const reader = new FileReader();
                reader.onload = function(e){
                    document.querySelector(`#delete-${name}`).style.display = 'block';
                    if(event.target.files[0].type.startsWith('image'))
                    document.querySelector(`#img-${name}`).src = e.target.result;
                }
                reader.readAsDataURL(event.target.files[0]);
            }
    }

    function removeImage(name){
        if(name === 'profile_image'){
            document.querySelector(`#img-${name}`).src = "{{auth()->user()->profile_image ?  asset('storage/images/' . auth()->user()->profile_image) : asset('basic-images/basic-avatar.png')}}"
        }else if(name === "cover_image"){
            document.querySelector(`#img-${name}`).src = "{{file_exists(public_path('storage/images/cover_image.png')) ? asset('storage/images/cover_image.png') : asset('basic-images/intersect.png')}}"
        }
            const fileInput = document.querySelector(`#${name}`).value = "";
            document.querySelector(`#delete-${name}`).style.display = 'none';

    }
    </script>
@endonce