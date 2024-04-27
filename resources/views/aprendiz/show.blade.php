@extends('layouts.app')

@section('template_title')
    {{ $aprendiz->name ?? __('Show') . " " . __('Aprendiz') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Aprendiz</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-outline-primary btn-sm" href="{{ route('aprendiz.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre Completo:</strong>
                            {{ $aprendiz->nombre_completo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta1:</strong>
                            {{ $aprendiz->pregunta1 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta2:</strong>
                            {{ $aprendiz->pregunta2 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta3:</strong>
                            {{ $aprendiz->pregunta3 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta4:</strong>
                            {{ $aprendiz->pregunta4 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta5:</strong>
                            {{ $aprendiz->pregunta5 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta6:</strong>
                            {{ $aprendiz->pregunta6 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pregunta7:</strong>
                            {{ $aprendiz->pregunta7 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
