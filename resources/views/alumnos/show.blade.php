@extends('layouts.app')

@section('content')
    <h1>Detalle del Alumno</h1>
    <p><strong>Nombre:</strong> {{ $alumno->nombre }}</p>
    <p><strong>Correo:</strong> {{ $alumno->correo }}</p>
    <p><strong>Fecha de Nacimiento:</strong> {{ $alumno->fecha_nacimiento }}</p>
    <p><strong>Ciudad:</strong> {{ $alumno->ciudad }}</p>
    <a href="{{ route('alumnos.index') }}">Volver a la lista</a>
@endsection