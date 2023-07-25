<!-- resources/views/empleadoactividades/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Empleado Actividades</h1>
        <a href="{{ route('empleadoactividades.create') }}" class="btn btn-primary">Agregar Empleado Actividad</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Empleado</th>
                    <th>Actividad</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Fin</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleadoactividades as $empleadoactividad)
                    <tr>
                        <td>{{ $empleadoactividad['idEmpActivid'] }}</td>
                        <td>{{ $empleadoactividad['nombreEmpleado'] }}</td>
                        <td>{{ $empleadoactividad['actividad'] }}</td>
                        <td>{{ $empleadoactividad['fechaInicio'] }}</td>
                        <td>{{ $empleadoactividad['fechafin'] }}</td>
                        <td>{{ $empleadoactividad['estado'] }}</td>
                        <td>
                            <a href="{{ route('empleadoactividades.edit', $empleadoactividad['idEmpActivid']) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('empleadoactividades.destroy', $empleadoactividad['idEmpActivid']) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este registro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
