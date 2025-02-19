@extends('layouts.app')

@section('content')
    <h1>Editar Tarea</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Título:</label>
        <input type="text" name="title" value="{{ $task->title }}" required>
        <button type="submit">Actualizar</button>
    </form>
@endsection