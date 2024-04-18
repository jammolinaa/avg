@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Estudiante
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="card-title">{{ __('Update') }} Estudiante</span>
                        <div class="float-right">
                            <a class="btn btn-outline-primary" href="{{ route('estudiantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>
                    
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('estudiantes.update', $estudiante->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('estudiante.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection