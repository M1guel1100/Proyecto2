<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDEX</title>
</head>

<body>

<h1>ALUMNO</h1>

<form action="/alumno" method="POST">
  @csrf
  
  <label for="nombre">Nombre:</label>
  <input type="text"  name="nombre">
  @error('nombre')
    <i>{{ $message }}</i>
  @enderror
  <label for="correo">Correo:</label>
  <input type="text" name="correo">
  @error('correo')
    <i>{{ $message }}</i>
  @enderror
  <br>IDIOMA:
  <br>
  <input type="radio" name="idioma" value="Ingles">Ingles
<br>
<input type="radio" name="idioma" value="Frances">Frances
<br>
<input type="radio" name="idioma" value="Aleman">Aleman
  <br>
  <br>
  <input type="submit" value="Submit">
</br>
<div class="nav" id="inicio"><a href="/alumno">Inicio</a></div>
</body>
</html>