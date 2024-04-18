<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $estudiante?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pregunta1" class="form-label">{{ __('Pregunta1') }}</label>
            <input type="text" name="pregunta1" class="form-control @error('pregunta1') is-invalid @enderror" value="{{ old('pregunta1', $estudiante?->pregunta1) }}" id="pregunta1" placeholder="Pregunta1">
            {!! $errors->first('pregunta1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pregunta2" class="form-label">{{ __('Pregunta2') }}</label>
            <input type="text" name="pregunta2" class="form-control @error('pregunta2') is-invalid @enderror" value="{{ old('pregunta2', $estudiante?->pregunta2) }}" id="pregunta2" placeholder="Pregunta2">
            {!! $errors->first('pregunta2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pregunta3" class="form-label">{{ __('Pregunta3') }}</label>
            <input type="text" name="pregunta3" class="form-control @error('pregunta3') is-invalid @enderror" value="{{ old('pregunta3', $estudiante?->pregunta3) }}" id="pregunta3" placeholder="Pregunta3">
            {!! $errors->first('pregunta3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pregunta4" class="form-label">{{ __('Pregunta4') }}</label>
            <input type="text" name="pregunta4" class="form-control @error('pregunta4') is-invalid @enderror" value="{{ old('pregunta4', $estudiante?->pregunta4) }}" id="pregunta4" placeholder="Pregunta4">
            {!! $errors->first('pregunta4', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pregunta5" class="form-label">{{ __('Pregunta5') }}</label>
            <input type="text" name="pregunta5" class="form-control @error('pregunta5') is-invalid @enderror" value="{{ old('pregunta5', $estudiante?->pregunta5) }}" id="pregunta5" placeholder="Pregunta5">
            {!! $errors->first('pregunta5', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pregunta6" class="form-label">{{ __('Pregunta6') }}</label>
            <input type="text" name="pregunta6" class="form-control @error('pregunta6') is-invalid @enderror" value="{{ old('pregunta6', $estudiante?->pregunta6) }}" id="pregunta6" placeholder="Pregunta6">
            {!! $errors->first('pregunta6', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pregunta7" class="form-label">{{ __('Pregunta7') }}</label>
            <input type="text" name="pregunta7" class="form-control @error('pregunta7') is-invalid @enderror" value="{{ old('pregunta7', $estudiante?->pregunta7) }}" id="pregunta7" placeholder="Pregunta7">
            {!! $errors->first('pregunta7', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pregunta8" class="form-label">{{ __('Pregunta8') }}</label>
            <input type="text" name="pregunta8" class="form-control @error('pregunta8') is-invalid @enderror" value="{{ old('pregunta8', $estudiante?->pregunta8) }}" id="pregunta8" placeholder="Pregunta8">
            {!! $errors->first('pregunta8', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pregunta9" class="form-label">{{ __('Pregunta9') }}</label>
            <input type="text" name="pregunta9" class="form-control @error('pregunta9') is-invalid @enderror" value="{{ old('pregunta9', $estudiante?->pregunta9) }}" id="pregunta9" placeholder="Pregunta9">
            {!! $errors->first('pregunta9', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pregunta10" class="form-label">{{ __('Pregunta10') }}</label>
            <input type="text" name="pregunta10" class="form-control @error('pregunta10') is-invalid @enderror" value="{{ old('pregunta10', $estudiante?->pregunta10) }}" id="pregunta10" placeholder="Pregunta10">
            {!! $errors->first('pregunta10', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-outline-primary">{{ __('Submit') }}</button>
    </div>
</div>