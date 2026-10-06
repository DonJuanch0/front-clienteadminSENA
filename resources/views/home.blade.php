@extends('layouts.app')

@section('title', 'AdminSENA Cliente')

@section('content')
    <h1>Aplicativo cliente AdminSENA</h1>
    <p>Selecciona un recurso para consultarlo:</p>

    <ul class="menu">
        <li><a href="{{ route('areas.index') }}">Áreas</a></li>
        <li><a href="{{ route('trainingCenters.index') }}">Centros de formación</a></li>
        <li><a href="{{ route('teachers.index') }}">Docentes</a></li>
        <li><a href="{{ route('courses.index') }}">Cursos</a></li>
        <li><a href="{{ route('computers.index') }}">Computadores</a></li>
        <li><a href="{{ route('apprentices.index') }}">Aprendices</a></li>
    </ul>
@endsection
