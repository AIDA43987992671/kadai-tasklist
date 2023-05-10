@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2>id = {{ $task->id }} details </h2>
    </div>

    <table class="table w-full my-4">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>

        <tr>
            <th> TO DO </th>
            <td>{{ $task->content }}</td>
        </tr>
     </table>
     
     <a class="btn btn-outline" href="{{ route('tasks.edit', $task->id) }}"> EDIT </a>
    
     <form method="POST" action="{{ route('tasks.destroy', $task->id) }}" class="my-2">
        @csrf
        @method('DELETE')
        
        <button type="submit" class="btn btn-error btn-outline" 
            onclick="return confirm('id = {{ $task->id }} will be delated. Are you sure?')">Delete</button>
    </form>
@endsection 