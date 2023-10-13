@extends('adminlte::page')

@section('title', 'censo')

@section('content_header')
    <h1><center> CENSO POBLACIONAL  </center></h1>
    <h2><center> REGUARDO INGA DE MOCOA </center></h2>
    <h3></h3>
@stop

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="guardar_datos.php" method="POST">
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" required><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br><br>

        <label for="tipo_documento">Tipo de Documento:</label>
        <input type="text" id="tipo_documento" name="tipo_documento" required><br><br>

        <label for="numero_documento">Número de Documento:</label>
        <input type="text" id="numero_documento" name="numero_documento" required><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required><br><br>

        <label for="foto">Foto:</label>
        <input type="text" id="foto" name="foto" required><br><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
