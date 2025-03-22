@extends('layouts.app')

@section('content')
    <h1>Editar Alumno</h1>

    <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ $alumno->nombre }}" required>

        <label for="correo">Correo</label>
        <input type="email" name="correo" value="{{ $alumno->correo }}" required>

        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
        <input type="date" name="fecha_nacimiento" value="{{ $alumno->fecha_nacimiento }}" required>

        <label for="ciudad">Ciudad</label>
        <input type="text" name="ciudad" value="{{ $alumno->ciudad }}" required>
@endsection