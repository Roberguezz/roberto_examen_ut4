@extends('adminlte::page')

@section('title', 'Crear Alumno')

@section('content_header')
<h1>Agregar Alumno</h1>
@endsection

@section('content')
<p>Bienvenido al panel de administración.</p>
<p>Apartado para agregar un alumno</p>

<!--  Vista extendida de plantilla de AdminLTE -->

{{-- Mostramos mensaje de éxito si existe --}}
@if (session('status'))
<div style="color: green;">
    {{ session('status') }}
</div>
@endif

<p>{{ $bienvenida }}</p>

{{-- Formulario --}}
<form action="{{ route('admin.alumno.store') }}" method="POST">
    @csrf

    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"><br><br>

    <label for="modulo">Módulo:</label><br>
    <input type="text" id="modulo" name="modulo" value="{{ old('modulo') }}"><br><br>

    <label for="calificacion">Calificación:</label><br>
    <input type="int" id="calificacion" name="calificacion" value="{{ old('calificacion') }}" </input><br><br>

    <button type="submit">Enviar</button>
</form>

@endsection


