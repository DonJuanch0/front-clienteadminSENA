@extends('layouts.app')

@section('title', 'Detalle del aprendiz')

@section('content')
    <a class="back" href="{{ route('apprentices.index') }}">&larr; Volver al listado</a>

    @if (empty($apprentice))
        <p class="empty">No se encontró el aprendiz.</p>
    @else
        <h1>{{ $apprentice['name'] }}</h1>

        <p><strong>Correo:</strong> {{ $apprentice['email'] }}</p>
        <p><strong>Celular:</strong> {{ $apprentice['cell number'] }}</p>
        <p><strong>Curso:</strong> {{ $apprentice['course']['course number'] ?? '-' }}</p>
        <p><strong>Computador:</strong> {{ $apprentice['computer']['number'] ?? '-' }}</p>
    @endif
@endsection
