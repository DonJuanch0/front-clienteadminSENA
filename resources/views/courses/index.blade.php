@extends('layouts.app')

@section('title', 'Cursos')

@section('content')
    <h1>Cursos</h1>

    @if (count($courses) === 0)
        <p class="empty">No hay cursos registrados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Número de curso</th>
                    <th>Día</th>
                    <th>Área</th>
                    <th>Centro de formación</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course['id'] }}</td>
                        <td>{{ $course['course number'] }}</td>
                        <td>{{ $course['day'] }}</td>
                        <td>{{ $course['area']['name'] ?? '-' }}</td>
                        <td>{{ $course['trainingCenter']['name'] ?? '-' }}</td>
                        <td><a href="{{ route('courses.show', $course['id']) }}">Ver detalle</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
