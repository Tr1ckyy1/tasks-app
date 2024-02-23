@props(['task'])
<tr>
    <td class="text-[#6A737D]  py-4 whitespace-nowrap max-w-[250px] overflow-x-hidden">{{ $task->name}}</td>
    <td class="text-[#6A737D]  pl-10 whitespace-nowrap py-4 max-w-[250px] overflow-hidden">{{ $task->description }}</td>
    <td 
    class="text-[#6A737D] pl-10 py-4">{{ date("j/m/Y",strtotime($task->created_at)) }}</td>
    <td 
    class="{{ strtotime($task->due_date) < strtotime('today') ? 'text-red-500' : 'text-[#6A737D]' }} 
    py-4">{{ date("d/m/Y",strtotime($task->due_date)) }}</td>
    <td class="flex gap-6 text-[#6A737D] py-4">
        <form method="POST" action="/tasks/delete/{{$task->id}}">
            @csrf
            @method('DELETE')
            
            <button class="hover:underline">Delete</button>
        </form>
        <a  href="#" class="hover:underline">Edit</a>
        <a  href="/tasks/{{$task->id}}}" class="hover:underline">Show</a>
    </td>
</tr>

