@extends('layouts.app')

@section('title', 'Detalle de área')

@section('content')
    <a class="back" href="{{ route('areas.index') }}">&larr; Volver al listado</a>

    @if (empty($area))
        <p class="empty">No se encontró el área.</p>
    @else
        <h1>Área: {{ $area['name'] }}</h1>

        <h2>Cursos</h2>
        @if (count($area['courses'] ?? []) === 0)
            <p class="empty">No tiene cursos.</p>
        @else
            <table>
                <thead>
                    <tr><th>Número de curso</th><th>Día</th></tr>
                </thead>
                <tbody>
                    @foreach ($area['courses'] as $course)
                        <tr>
                            <td>{{ $course['course number'] }}</td>
                            <td>{{ $course['day'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <h2>Docentes</h2>
        @if (count($area['teachers'] ?? []) === 0)
            <p class="empty">No tiene docentes.</p>
        @else
            <table>
                <thead>
                    <tr><th>Nombre</th><th>Correo</th></tr>
                </thead>
                <tbody>
                    @foreach ($area['teachers'] as $teacher)
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
