@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Aprendiz
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                
                    <div class="card-header">
                        <img src= {{ asset('images/puzzle.jpg') }} width="50px" height="50px">
                        <h1 class="card-title"> <strong>  Encuesta de habilidades blandas</strong></h1>
                        <p>Se trata de aquellas competencias personales y sociales que facilitan las relaciones humanas y permiten desenvolverse con éxito en cualquier ámbito de la
                            vida, incluido el laboral. Estas incluyen habilidades relacionadas con la inteligencia emocional, el pensamiento crítico, el liderazgo, la resiliencia o la gestión
                            
                            del cambio y demás.</p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('aprendiz.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('aprendiz.form')

                        </form>
                    </div>
               
            </div>
        </div>
    </section>
@endsection
