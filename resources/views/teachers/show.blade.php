@extends('layouts.app')

@section('title', 'Detalle del docente')

@section('content')
    <a class="back" href="{{ route('teachers.index') }}">&larr; Volver al listado</a>

    @if (empty($teacher))
        <p class="empty">No se encontró el docente.</p>
    @else
        <h1>{{ $teacher['name'] }}</h1>

        <p><strong>Correo:</strong> {{ $teacher['email'] }}</p>
        <p><strong>Área:</strong> {{ $teacher['area']['name'] ?? '-' }}</p>
        <p><strong>Centro de formación:</strong> {{ $teacher['trainingCenter']['name'] ?? '-' }}</p>
    @endif
@endsection
