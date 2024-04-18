@extends('layouts.app')

@section('template_title')
    {{ $estudiante->name ?? __('Show') . " " . __('Estudiante') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('estudiantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $estudiante->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta1:</strong>
                            {{ $estudiante->pregunta1 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta2:</strong>
                            {{ $estudiante->pregunta2 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta3:</strong>
                            {{ $estudiante->pregunta3 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta4:</strong>
                            {{ $estudiante->pregunta4 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta5:</strong>
                            {{ $estudiante->pregunta5 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta6:</strong>
                            {{ $estudiante->pregunta6 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta7:</strong>
                            {{ $estudiante->pregunta7 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta8:</strong>
                            {{ $estudiante->pregunta8 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta9:</strong>
                            {{ $estudiante->pregunta9 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta10:</strong>
                            {{ $estudiante->pregunta10 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
