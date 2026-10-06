<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'AdminSENA Cliente')</title>
    <style>
        body { font-family: Arial, Helvetica, sans-serif; margin: 0; background: #fdfdfd; color: #1b1b18; }
        header { background: #1b1b18; color: #fff; padding: 14px 20px; }
        nav { margin-top: 10px; }
        nav a { color: #fff; text-decoration: none; margin-right: 16px; font-size: 14px; }
        nav a:hover { text-decoration: underline; }
        main { padding: 20px; max-width: 1100px; margin: 0 auto; }
        h1 { font-size: 22px; margin-top: 0; }
        h2 { font-size: 16px; }
        table { border-collapse: collapse; width: 100%; background: #fff; }
        th, td { border: 1px solid #ddd; padding: 8px 10px; text-align: left; font-size: 14px; }
        th { background: #f2f2f2; }
        .empty { color: #777; font-style: italic; }
        .back { display: inline-block; margin-bottom: 14px; color: #1b1b18; }
        .menu { list-style: none; padding: 0; }
        .menu li { margin-bottom: 8px; }
    </style>
</head>
<body>
    <header>
        <strong>AdminSENA</strong> &mdash; Aplicativo cliente
        <nav>
            <a href="{{ route('home') }}">Inicio</a>
            <a href="{{ route('areas.index') }}">Áreas</a>
            <a href="{{ route('trainingCenters.index') }}">Centros de formación</a>
            <a href="{{ route('teachers.index') }}">Docentes</a>
            <a href="{{ route('courses.index') }}">Cursos</a>
            <a href="{{ route('computers.index') }}">Computadores</a>
            <a href="{{ route('apprentices.index') }}">Aprendices</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
