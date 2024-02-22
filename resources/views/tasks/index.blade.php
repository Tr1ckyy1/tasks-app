@auth
<x-layout>
   
    <form method="POST" action="/logout">
        @csrf

        <button type="submit">Log out</button>
    </form>
     
</x-layout>
@endauth