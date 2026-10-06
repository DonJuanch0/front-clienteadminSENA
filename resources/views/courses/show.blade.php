@extends('layouts.app')

@section('title', 'Detalle del curso')

@section('content')
    <a class="back" href="{{ route('courses.index') }}">&larr; Volver al listado</a>

    @if (empty($course))
        <p class="empty">No se encontró el curso.</p>
    @else
        <h1>Curso {{ $course['course number'] }}</h1>

        <p><strong>Día:</strong> {{ $course['day'] }}</p>
        <p><strong>Área:</strong> {{ $course['area']['name'] ?? '-' }}</p>
        <p><strong>Centro de formación:</strong> {{ $course['trainingCenter']['name'] ?? '-' }}</p>

        <h2>Aprendices</h2>
        @if (count($course['apprentices'] ?? []) === 0)
            <p class="empty">No tiene aprendices.</p>
        @else
            <table>
                <thead>
                    <tr><th>Nombre</th><th>Correo</th><th>Celular</th></tr>
                </thead>
                <tbody>
                    @foreach ($course['apprentices'] as $apprentice)
                        <tr>
                            <td>{{ $apprentice['name'] }}</td>
                            <td>{{ $apprentice['email'] }}</td>
                            <td>{{ $apprentice['cell number'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endif
@endsection
