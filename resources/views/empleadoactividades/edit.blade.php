<!-- resources/views/empleadoactividades/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Empleado Actividad</h1>
        <form action="{{ route('empleadoactividades.update', $empleadoactividad['idEmpActivid']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="idEmpActivid">ID Empleado Actividad</label>
                <input type="number" readonly name="idEmpActivid" class="form-control" value="{{ $empleadoactividad['idEmpActivid'] }}" required>
            </div>
            <div class="form-group">
                <label for="idempleado">ID Empleado</label>
                <input type="number" name="idempleado" class="form-control" value="{{ $empleadoactividad['idempleado'] }}" required>
            </div>
            <div class="form-group">
                <label for="nombreEmpleado">Nombre Empleado</label>
                <input type="text" name="nombreEmpleado" class="form-control" value="{{ $empleadoactividad['nombreEmpleado'] }}" maxlength="40" required>
            </div>
            <div class="form-group">
                <label for="actividad">Actividad</label>
                <input type="text" name="actividad" class="form-control" value="{{ $empleadoactividad['actividad'] }}" maxlength="80" required>
            </div>
            <div class="form-group">
                <label for="fechaInicio">Fecha de Inicio</label>
                <input type="date" name="fechaInicio" class="form-control" value="{{ $empleadoactividad['fechaInicio'] }}" required>
            </div>
            <div class="form-group">
                <label for="fechafin">Fecha de Fin</label>
                <input type="date" name="fechafin" class="form-control" value="{{ $empleadoactividad['fechafin'] }}" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="number" name="estado" class="form-control" value="{{ $empleadoactividad['estado'] }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
