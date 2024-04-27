
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class="fond">
    <div class="col-md-12">
        
        <div class="card-circle">
            <label for="nombre_completo" class="form-label"><strong> Nombre Completo </strong></label>
            <input type="text" name="nombre_completo" class="form-control @error('nombre_completo') is-invalid @enderror" value="{{ old('nombre_completo', $aprendiz?->nombre_completo) }}" id="nombre_completo" placeholder="Nombre Completo">
            {!! $errors->first('nombre_completo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div><br>


        <div class="card-circle">
            <label for="pregunta1" class="form-label"><strong>
                <img src="{{ asset('/images/reloj_arena.png') }}" width="40px" height="50px">
                Gestion Del Tiempo</strong></label>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde atque odio sint enim ab voluptatem officia exercitationem? Fugiat veritatis perferendis numquam earum ipsum doloremque doloribus architecto sapiente molestiae, 
                velit ab?</p>
                <p>A continuación califica de menor a mayor tu percepción de esta competencia en ti:</p>
            <input type="text" name="pregunta1" class="form-control @error('pregunta1') is-invalid @enderror" value="{{ old('pregunta1', $aprendiz?->pregunta1) }}" id="pregunta1" placeholder="Pregunta1">
            {!! $errors->first('pregunta1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div><br>


        <div class="card-circle">
            <label for="pregunta2" class="form-label">
                <img src="{{ asset('images/flag-fill.png') }}" width="40px" height="50px">
                <strong> Liderazgo </strong></label>
            <p>Saber manejar un equipo de trabajo, sacar su mayor rendimiento, haciéndoles creer en un proyecto y manteniéndolos motivados en fundamental para
                una persona que aspira al éxito.</p>
                <p>A continuación califica de menor a mayor tu percepción de esta competencia en ti:</p>

            <input type="text" name="pregunta2" class="form-control @error('pregunta2') is-invalid @enderror" value="{{ old('pregunta2', $aprendiz?->pregunta2) }}" id="pregunta2" placeholder="Pregunta2">
            {!! $errors->first('pregunta2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div><br>


        <div class="card-circle">
            <label for="pregunta3" class="form-label">
                <img src="{{ asset('images/balance.png') }}" height="60px" width="60px">
                <strong>Toma de decisiones</strong></label>
            <p>Saber tomar decisiones bajo presión y evitar el uso emocional en momento de presión representan una personalidad fuerte y profesional, un candidato
                digno a convertirse en líder.</p>
                <p>A continuación califica de menor a mayor tu percepción de esta competencia en ti:</p>

            <input type="text" name="pregunta3" class="form-control @error('pregunta3') is-invalid @enderror" value="{{ old('pregunta3', $aprendiz?->pregunta3) }}" id="pregunta3" placeholder="Pregunta3">
            {!! $errors->first('pregunta3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div><br>


        <div class="card-circle">
            <label for="pregunta4" class="form-label"> 
                <img src="{{ asset('images/equipo.png') }}" width="60px" height="60px">
                <strong>Trabajo en equipo</strong></label>
            <p>Aunque no es poca la cantidad de individuos a los que les desagrada la idea de realizar una tarea con otros individuos, es fundamental tener buenas
                relaciones con los equipos de trabajo, ayuda al desarrollo de tareas de manera efectiva y crea un ambiente comunicativo más tranquilo.</p>
                <p>A continuación califica de menor a mayor tu percepción de esta competencia en ti:</p>

            <input type="text" name="pregunta4" class="form-control @error('pregunta4') is-invalid @enderror" value="{{ old('pregunta4', $aprendiz?->pregunta4) }}" id="pregunta4" placeholder="Pregunta4">
            {!! $errors->first('pregunta4', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div><br>


        <div class="card-circle">
            <label for="pregunta5" class="form-label">
                <img src="{{ asset('images/ADSO-9.gif') }}" width="80px" height="80px">
                <strong>Habilidades de comunicación</strong></label>
            <p> La comunicación verbal, la no verbal y la escrita son vitales, más aún en entornos donde conviven diferentes culturas y generaciones, un trabajador con
                buena comunicación tiene mayor probabilidad de evitar conflictos o malentendidos.</p>
                <p>A continuación califica de menor a mayor tu percepción de esta competencia en ti:</p>

            <input type="text" name="pregunta5" class="form-control @error('pregunta5') is-invalid @enderror" value="{{ old('pregunta5', $aprendiz?->pregunta5) }}" id="pregunta5" placeholder="Pregunta5">
            {!! $errors->first('pregunta5', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div><br>


        <div class="card-circle">
            <label for="pregunta6" class="form-label">
                <img src="{{ asset('images/brazo.png') }}" width="60px" height="60px">
                <strong>Resiliencia</strong></label>
            <p>La capacidad para afrontar las adversidades y salir fortalecido de ellas, haciendo gala de una gran perseverancia, es clave para sacar adelante aquellos
                proyectos que tienden a complicarse.</p>
                <p>A continuación califica de menor a mayor tu percepción de esta competencia en ti:</p>

            <input type="text" name="pregunta6" class="form-control @error('pregunta6') is-invalid @enderror" value="{{ old('pregunta6', $aprendiz?->pregunta6) }}" id="pregunta6" placeholder="Pregunta6">
            {!! $errors->first('pregunta6', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div><br>


        <div class="card-circle">
            <label for="pregunta7" class="form-label">
                <img src="{{ asset('images/cerebro.png') }}" width="80px" height="80px">

                <strong>Innovación y creatividad</strong></label>
            <p>Las personas creativas poseen mayor probabilidad de obtener un cargo importante, no hay nada más emocionante que la aparición de ideas frescas y
                novedosas, es una de las habilidades blandas más solicitadas por el mercado.</p>
                <p>A continuación califica de menor a mayor tu percepción de esta competencia en ti:</p>

            <input type="text" name="pregunta7" class="form-control @error('pregunta7') is-invalid @enderror" value="{{ old('pregunta7', $aprendiz?->pregunta7) }}" id="pregunta7" placeholder="Pregunta7">
            {!! $errors->first('pregunta7', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div><br>



    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-outline-dark">{{ __('Submit') }}</button>
        
    </div>
</div>
