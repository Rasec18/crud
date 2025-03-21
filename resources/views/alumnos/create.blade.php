@extends('layouts.app')

@section('content')
    <h1>Crear Alumno</h1>

    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required>

        <label for="correo">Correo</label>
        <input type="email" name="correo" required>

        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
        <input type="date" name="fecha_nacimiento" required>

        <label for="ciudad">Ciudad</label>
        <input type="text" name="ciudad" required>

        <button type="submit">Guardar</button>
    </form>
@endsection