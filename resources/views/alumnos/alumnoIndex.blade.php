<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDEX</title>
</head>

<body>
    <h1>INDEX</h1>
    <a href="/alumno/create">Nuevo Alumno</a>

    <table border='1'>
    <tr>
    <th>#</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Idioma</th>
    </tr>
    @foreach($alumnos as $alumno)
    <tr>
    <td>
        <a href="alumno/{{$alumno->id}}">
        {{$alumno->id}}
    </td>
    <td>{{$alumno->nombre}}</td>
    <td>{{$alumno->correo}}</td>
    <td>{{$alumno->idioma}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>