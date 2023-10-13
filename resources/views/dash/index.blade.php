@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><center>RESGUARDO INGA DE MOCOA</center></h1>
@stop

@section('content')
<div class="container">

    <div class="container-fluid mt-4">
        <h1>Lista de empleados</h1>
        <a class="btn btn-success" href="{{url('empleados/create')}}">crear empleado </a>
        <table class="table table-striped">
            <thead class='thead-dark'>
                    <tr>
                    <th>#</th>
                        <th>Primer Nombre</th>
                        <th>Segundo Nombre</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Edad</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                    <tr>
                    <td>{{ $empleado->id }}</td>
                    <td>{{ $empleado->primer_nombre }}</td>
                    <td>{{ $empleado->segundo_nombre }}</td>
                    <td>{{ $empleado->primer_apellido }}</td>
                    <td>{{ $empleado->segundo_apellido }}</td>
                    <td>{{ $empleado->edad }}</td>
                    <td>{{ $empleado->correo }}</td>
                    <td>{{ $empleado->telefono }}</td>
                    <td>
                    <img src="{{asset('storage').'/'.$empleado->foto}}" width="100px" height="100px">
                    </td>
                    
                    <td>  
                     <a class="btn btn-warning" href="{{ url('/empleados/'.$empleado->id.'/edit') }}" > editar </a> |
    
                    <form action="{{ url('/empleados/'.$empleado->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit" value="Borrar" onclick="return confirm('Quieres borrar este registro?')">
                    </form>
                    
                    </td>
    
                    </tr>
        
                </tbody>
            </table>
        </div>
        </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
