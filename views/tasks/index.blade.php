@extends('layouts.app')

@section('content')
    <h1>Lista de Clientes</h1>
    <a href="{{ route('tasks.create') }}">Crear nuevo registro</a>

    @if($tasks->isEmpty())
        <p>No hay clientes registrados.</p>
    @else
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task->title }} - 
                    <a href="{{ route('tasks.edit', $task->id) }}">Editar</a> | 
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
