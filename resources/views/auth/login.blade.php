<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/a2dd6045c4.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/styles.css')}}">
</head>
<body>
	<header>
		<img src="img/SENA tic.png" alt="">
		<h2 class="Logo">Encuesta De Competencias Blandas</h2>  
		<nav class="navegacion">
			<a href="#">Inicio</a>
			<a href="#">Informacion</a>
			<a href="#">Servicio</a>
			<a href="#">Contactos</a>
			<button class="btn">Iniciar Sesion</button>
		</nav>
	</header>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<span class="icono-cerrar"><i class="fa-solid fa-xmark"></i></span>
			<div class="card-header">
			</div>
			<div class="card-body">
				<h2>Iniciar Sesion</h2>
				<form action="{{route('login')}}" method="POST">
					@csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Ingresa tu correo" name="email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Ingresa tu contraseña" name="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">¿Olvide mi contraseña
					</div>
					<div class="form-group">
						<input type="submit" value="Ingresar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					¿No Tienes cuenta?<a href="{{route('register')}}">Registrarse</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>