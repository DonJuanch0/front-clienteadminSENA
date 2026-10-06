@extends('layouts.app')

@section('title', 'Aprendices')

@section('content')
    <h1>Aprendices</h1>

    @if (count($apprentices) === 0)
        <p class="empty">No hay aprendices registrados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Celular</th>
                    <th>Curso</th>
                    <th>Computador</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apprentices as $apprentice)
                    <tr>
                        <td>{{ $apprentice['id'] }}</td>
                        <td>{{ $apprentice['name'] }}</td>
                        <td>{{ $apprentice['email'] }}</td>
                        <td>{{ $apprentice['cell number'] }}</td>
                        <td>{{ $apprentice['course']['course number'] ?? '-' }}</td>
                        <td>{{ $apprentice['computer']['number'] ?? '-' }}</td>
                        <td><a href="{{ route('apprentices.show', $apprentice['id']) }}">Ver detalle</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
