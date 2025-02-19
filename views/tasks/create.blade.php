@extends('layouts.app')

@section('content')
    <h2>Cliente</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">id:</label>
        <input type="integer" name="id" required>
        <br>

        <label for="title">nombre:</label>
        <input type="varchar" name="nombre" required>
        <br>
        <label for="title">correo:</label>
        <input type="varchar" name="correo" required>
        <br>
        <label for="title">telefono:</label>
        <input type="varchar" name="telefono" required>
        <br>
        <button type="submit">Guardar Cliente</button>
    </form>
    <br>

    <h2>Factura</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="customer_id">id:</label>
        <select name="customer_id" required>
            @foreach ($customers as $customer )
                >option value="{{ $customer ->id }}" {{ $customer ->name }} </option>
            
            @endforeach


        </select>
        <label for="productos">productos:</label>
        <textarea name="products" rquired></textarea>

        <label for="total">Total:</label>
        <input type="number" name="total" required>
        <br>

        <button type="submit">Guardar Factura</button>
    </form>
    <br>

    <a href="{{ route('tasks.index') }}">Volver</a>
@endsection