@extends('layouts.app')

@section('title', 'Detalle del centro de formación')

@section('content')
    <a class="back" href="{{ route('trainingCenters.index') }}">&larr; Volver al listado</a>

    @if (empty($trainingCenter))
        <p class="empty">No se encontró el centro de formación.</p>
    @else
        <h1>{{ $trainingCenter['name'] }}</h1>
        <p><strong>Ubicación:</strong> {{ $trainingCenter['location'] }}</p>

        <h2>Cursos</h2>
        @if (count($trainingCenter['courses'] ?? []) === 0)
            <p class="empty">No tiene cursos.</p>
        @else
            <table>
                <thead>
                    <tr><th>Número de curso</th><th>Día</th></tr>
                </thead>
                <tbody>
                    @foreach ($trainingCenter['courses'] as $course)
                        <tr>
                            <td>{{ $course['course number'] }}</td>
                            <td>{{ $course['day'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <h2>Docentes</h2>
        @if (count($trainingCenter['teachers'] ?? []) === 0)
            <p class="empty">No tiene docentes.</p>
        @else
            <table>
                <thead>
                    <tr><th>Nombre</th><th>Correo</th></tr>
                </thead>
                <tbody>
                    @foreach ($trainingCenter['teachers'] as $teacher)
                        <tr>
                            <td>{{ $teacher['name'] }}</td>
                            <td>{{ $teacher['email'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endif
@endsection
