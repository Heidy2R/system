@extends('layouts.app')

@section('template_title')
    {{ $empleadoscarrera->name ?? "{{ __('Show') Empleadoscarrera" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empleados & Carreras</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleadoscarreras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Empleado Id:</strong>
                            {{ $empleadoscarrera->empleado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera Id:</strong>
                            {{ $empleadoscarrera->carrera_id }}
                        </div>
                        <div class="form-group">
                            <strong>Periodo Id:</strong>
                            {{ $empleadoscarrera->periodo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $empleadoscarrera->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $empleadoscarrera->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Usuariomodifica:</strong>
                            {{ $empleadoscarrera->usuariomodifica }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
