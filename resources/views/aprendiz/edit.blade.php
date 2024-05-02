@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Aprendiz
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="card-headers">
                <span class="card-title">{{ __('Edit') }}</span>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('aprendiz.update', $aprendiz->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('aprendiz.form')

                        </form>
                    </div>
                <div></div>
            </div>
        </div>
    </section>
@endsection
