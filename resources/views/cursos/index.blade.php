<!DOCTYPE html>
<html>
<head>
    <title>Cursos</title>
</head>
<body>
    <h1>Lista de Cursos</h1>
    <ul>
        @foreach($cursos as $curso)
            <li>{{ $curso->nombre }} - Kit: {{ $curso->kit_robotica }}</li>
        @endforeach
    </ul>
</body>
</html>
