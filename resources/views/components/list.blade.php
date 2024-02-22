@props(['name','link'])
<li class="flex items-center gap-1 hover:underline cursor-pointer">
    {{$slot}}
    <a href="{{$link ?? '/'}}">
        {{$name}}
    </a>
</li>