@props(['task'])
<tr>
    <td class="text-[#6A737D]  py-4 whitespace-nowrap max-w-[250px] overflow-x-hidden">{{ $task->name}}</td>
    <td class="text-[#6A737D]  pl-10 whitespace-nowrap py-4 max-w-[250px] overflow-hidden">{{ $task->description }}</td>
    <td 
    class="text-[#6A737D] pl-10 py-4">{{ date("d/m/Y",strtotime($task->created_at)) }}</td>
    <td 
    class="{{ strtotime($task->due_date) < strtotime('today') ? 'text-red-500' : 'text-[#6A737D]' }} 
    py-4">{{ date("d/m/Y",strtotime($task->due_date)) }}</td>
    <td class="flex gap-6 text-[#6A737D] py-4">
        <form method="POST" action="{{ route('tasks.destroy',['task' => $task->id]) }}">
            @csrf
            @method('DELETE')
            
            <button class="hover:underline">{{ __("tasks.delete_link") }}</button>
        </form>
        <a  href="#" class="hover:underline">{{ __("tasks.edit_link") }}</a>
        <a  href="{{ route('tasks.show', ['task' => $task->id]) }}" class="hover:underline">{{ __("tasks.show_link") }}</a>
    </td>
</tr>

