
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
            <p>Manejar el tiempo de manera efectiva, entregar pendientes durante los plazos requeridos y cumplir con horarios impulsa la productividad personal, <br>
                colectiva, y ayuda a la persona a destacar entre los demás individuos.</p>
                <p>A continuación califica de menor a mayor tu percepción de esta competencia en ti:</p>

                 <input type="radio" id="pregunta1_a" name="pregunta1" value="A" required>
                 <label for="pregunta1_a">A</label>
                 <input type="radio" id="pregunta1_b" name="pregunta1" value="B" required>
                 <label for="pregunta1_b">B</label>
                 <input type="radio" id="pregunta1_c" name="pregunta1" value="C" required>
                 <label for="pregunta1_c">C</label>
                 <input type="radio" id="pregunta1_d" name="pregunta1" value="D" required>
                 <label for="pregunta1_d">D</label>
                 <input type="radio" id="pregunta1_e" name="pregunta1" value="E" required>
                 <label for="pregunta1_e">E</label>
            {!! $errors->first('pregunta1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!} 
        </div><br>


        <div class="card-circle">
            <label for="pregunta2" class="form-label">
                <img src="{{ asset('images/flag-fill.png') }}" width="40px" height="50px">
                <strong> Liderazgo </strong></label>
            <p>Saber manejar un equipo de trabajo, sacar su mayor rendimiento, haciéndoles creer en un proyecto y manteniéndolos motivados en fundamental para <br>
                una persona que aspira al éxito.</p>
                <p>A continuación califica de menor a mayor tu percepción de esta competencia en ti:</p>

                 <input type="radio" id="pregunta2_a" name="pregunta2" value="A" required>
                 <label for="pregunta2_a">A</label>
                 <input type="radio" id="pregunta2_b" name="pregunta2" value="B" required>
                 <label for="pregunta2_b">B</label>
                 <input type="radio" id="pregunta2_c" name="pregunta2" value="C" required>
                 <label for="pregunta2_c">C</label>
                 <input type="radio" id="pregunta2_d" name="pregunta2" value="D" required>
                 <label for="pregunta2_d">D</label>
                 <input type="radio" id="pregunta2_e" name="pregunta2" value="E" required>
                 <label for="pregunta2_e">E</label>
            {!! $errors->first('pregunta2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div><br>


        <div class="card-circle">
            <label for="pregunta3" class="form-label">
                <img src="{{ asset('images/balance.png') }}" height="60px" width="60px">
                <strong>Toma de decisiones</strong></label>
            <p>Saber tomar decisiones bajo presión y evitar el uso emocional en momento de presión representan una personalidad fuerte y profesional, un candidato <br>
                digno a convertirse en líder.</p>
                <p>A continuación califica de menor a mayor tu percepción de esta competencia en ti:</p>

                <input type="radio" id="pregunta3_a" name="pregunta3" value="A" required>
                <label for="pregunta3_a">A</label>
                <input type="radio" id="pregunta3_b" name="pregunta3" value="B" required>
                <label for="pregunta3_b">B</label>
                <input type="radio" id="pregunta3_c" name="pregunta3" value="C" required>
                <label for="pregunta3_c">C</label>
                <input type="radio" id="pregunta3_d" name="pregunta3" value="D" required>
                <label for="pregunta3_d">D</label>
                <input type="radio" id="pregunta3_e" name="pregunta3" value="E" required>
                <label for="pregunta3_e">E</label>
                {!! $errors->first('pregunta3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div><br>


        <div class="card-circle">
            <label for="pregunta4" class="form-label"> 
                <img src="{{ asset('images/equipo.png') }}" width="60px" height="60px">
                <strong>Trabajo en equipo</strong></label>
            <p>Aunque no es poca la cantidad de individuos a los que les desagrada la idea de realizar una tarea con otros individuos, es fundamental tener buenas <br>
                relaciones con los equipos de trabajo, ayuda al desarrollo de tareas de manera efectiva y crea un ambiente comunicativo más tranquilo.</p>
                <p>A continuación califica de menor a mayor tu percepción de esta competencia en ti:</p>

                <input type="radio" id="pregunta4_a" name="pregunta4" value="A" required>
                <label for="pregunta4_a">A</label>
                <input type="radio" id="pregunta4_b" name="pregunta4" value="B" required>
                <label for="pregunta4_b">B</label>
                <input type="radio" id="pregunta4_c" name="pregunta4" value="C" required>
                <label for="pregunta4_c">C</label>
                <input type="radio" id="pregunta4_d" name="pregunta4" value="D" required>
                <label for="pregunta4_d">D</label>
                <input type="radio" id="pregunta4_e" name="pregunta4" value="E" required>
                <label for="pregunta4_e">E</label>            
                {!! $errors->first('pregunta4', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div><br>


        <div class="card-circle">
            <label for="pregunta5" class="form-label">
                <img src="{{ asset('images/ADSO-9.gif') }}" width="80px" height="80px">
                <strong>Habilidades de comunicación</strong></label>
            <p> La comunicación verbal, la no verbal y la escrita son vitales, más aún en entornos donde conviven diferentes culturas y generaciones, un trabajador con <br>
                buena comunicación tiene mayor probabilidad de evitar conflictos o malentendidos.</p>
                <p>A continuación califica de menor a mayor tu percepción de esta competencia en ti:</p>
                
                <input type="radio" id="pregunta5_a" name="pregunta5" value="A" required>
                <label for="pregunta5_a">A</label>
                <input type="radio" id="pregunta5_b" name="pregunta5" value="B" required>
                <label for="pregunta5_b">B</label>
                <input type="radio" id="pregunta5_c" name="pregunta5" value="C" required>
                <label for="pregunta5_c">C</label>
                <input type="radio" id="pregunta5_d" name="pregunta5" value="D" required>
                <label for="pregunta5_d">D</label>
                <input type="radio" id="pregunta5_e" name="pregunta5" value="E" required>
                <label for="pregunta5_e">E</label>
                {!! $errors->first('pregunta5', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div><br>


        <div class="card-circle">
            <label for="pregunta6" class="form-label">
                <img src="{{ asset('images/brazo.png') }}" width="60px" height="60px">
                <strong>Resiliencia</strong></label>
            <p>La capacidad para afrontar las adversidades y salir fortalecido de ellas, haciendo gala de una gran perseverancia, es clave para sacar adelante aquellos <br>
                proyectos que tienden a complicarse.</p>
                <p>A continuación califica de menor a mayor tu percepción de esta competencia en ti:</p>
                
                <input type="radio" id="pregunta6_a" name="pregunta6" value="A" required>
                <label for="pregunta6_a">A</label>
                <input type="radio" id="pregunta6_b" name="pregunta6" value="B" required>
                <label for="pregunta6_b">B</label>
                <input type="radio" id="pregunta6_c" name="pregunta6" value="C" required>
                <label for="pregunta6_c">C</label>
                <input type="radio" id="pregunta6_d" name="pregunta6" value="D" required>
                <label for="pregunta6_d">D</label>
                <input type="radio" id="pregunta6_e" name="pregunta6" value="E" required>
                <label for="pregunta6_e">E</label>
            {!! $errors->first('pregunta6', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div><br>


        <div class="card-circle">
            <label for="pregunta7" class="form-label">
                <img src="{{ asset('images/cerebro.png') }}" width="80px" height="80px">

                <strong>Innovación y creatividad</strong></label>
            <p>Las personas creativas poseen mayor probabilidad de obtener un cargo importante, no hay nada más emocionante que la aparición de ideas frescas y <br>
                novedosas, es una de las habilidades blandas más solicitadas por el mercado.</p>
                <p>A continuación califica de menor a mayor tu percepción de esta competencia en ti:</p>

                <input type="radio" id="pregunta7_a" name="pregunta7" value="A" required>
                <label for="pregunta7_a">A</label>
                <input type="radio" id="pregunta7_b" name="pregunta7" value="B" required>
                <label for="pregunta7_b">B</label>
                <input type="radio" id="pregunta7_c" name="pregunta7" value="C" required>
                <label for="pregunta7_c">C</label>
                <input type="radio" id="pregunta7_d" name="pregunta7" value="D" required>
                <label for="pregunta7_d">D</label>
                <input type="radio" id="pregunta7_e" name="pregunta7" value="E" required>
                <label for="pregunta7_e">E</label>           
                 {!! $errors->first('pregunta7', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div><br>


    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-outline-dark">{{ __('Submit') }}</button>
        
    </div>
</div>
