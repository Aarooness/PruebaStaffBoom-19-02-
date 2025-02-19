@extends('layouts.app')

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>Detalles de la tarea...</p>
    <a href="{{ route('tasks.index') }}">Volver</a>
@endsection