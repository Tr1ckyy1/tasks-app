@props(['name','link'])
<li class="whitespace-nowrap flex items-center gap-1 hover:underline cursor-pointer">
    {{$slot}}
    <a href="{{$link ?? '/tasks'}}">
        {{$name}}
    </a>
</li>