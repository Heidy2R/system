<!-- resources/views/empleadoactividades/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Empleado Actividad</h1>
        <form action="{{ route('empleadoactividades.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="idempleado">ID Empleado</label>
                <input type="number" name="idempleado" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nombreEmpleado">Nombre Empleado</label>
                <input type="text" name="nombreEmpleado" class="form-control" maxlength="40" required>
            </div>
            <div class="form-group">
                <label for="actividad">Actividad</label>
                <input type="text" name="actividad" class="form-control" maxlength="80" required>
            </div>
            <div class="form-group">
                <label for="fechaInicio">Fecha de Inicio</label>
                <input type="date" name="fechaInicio" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fechafin">Fecha de Fin</label>
                <input type="date" name="fechafin" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="number" name="estado" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
@endsection
