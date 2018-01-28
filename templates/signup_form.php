<!DOCTYPE html>
<html lang="es">
	<head>
		<title>No Limits - Registro</title>
        <link rel="shortcut icon" type="image/png"  href="../../img/logo/icono1.png">
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../../css/disenoRegistro.css">

		<!-- Bootstrap core CSS -->
		<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="../../lib/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

		<!-- Custom styles for this template -->
		<link href="../../css/landing-page.min.css" rel="stylesheet">
        <link href="../../css/csslogo.css" rel="stylesheet">

	</head>

	<body>
        <header class="container-fluid" id="encabezado">

				<!-- ENCABEZADO -->
				<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top justify-content-between">
				<a href="../../index.html"><img src="../../img/logo/logo1.png" alt="No Limits" class="logo" ></a>

						<!-- MENU PRINCIPAL -->

						<div class="navbar navbar-expand-sm p-0" id="navbarNav" role="navigation">
								<ul class="navbar-nav d-none d-sm-flex">
										<li class="nav-item">
												<a class="nav-link" href="../post.html">Noticias</a>
										</li>
										<li class="nav-item">
												<a class="nav-link" href="../forum.html">Foro</a>
										</li>
										<li class="nav-item">
												<a class="nav-link" href="../enciclopedia.html">Enciclopedia</a>
										</li>
										<li class="nav-item">
												<a class="nav-link" href="login.html">Ingresar</a>
										</li>
								</ul>
						</div>

						<!-- BARRA DE BÚSQUEDA -->

						<button class="navbar-toggler navbar-toggler-right d-flex d-md-none" type="button" data-toggle="collapse" data-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>

						<div class="collapse navbar-collapse col-12 col-md-4 col-xl-5" id="navbarSearch">
							<form class="form-inline my-0 w-100 justify-content-center justify-content-md-end" role="search">
								<input class="form-control border-top-0 border-left-0 border-right-0 col-9" type="search" placeholder="Buscar enfermedad">
								<button class="btn btn-outline-success my-2 my-sm-0 ml-2 col-2 col-sm-1 col-md-2 col-xl-1" type="submit">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>

				</nav>
		</header>
		<div class="contenedor col-md-10 col-lg-8 col-xl-6 mt-5 mb-5 pt-4 pb-5">
		<h1 class="titulo-1"> Formulario de registro</h1>
			<form>
				<h1 class="titulo">Crea tu cuenta</h1>

				<div class="form-group">
					<label>Nombres:</label>
					<input type="text" name="nombresUsuario" id="registroUsuario" placeholder="Nombre" required>
				</div>
				<div class="form-group">
					<label for="registroApellido">Apellido:</label>
					<input type="text" name="apellidosUsuario" id="registroApellido" placeholder="Apellido" required>
				</div>
				<div class="form-group">
					<label for="registroNacimiento">Fecha de nacimiento:</label>
					<input name="diaNacimiento" id="registroNacimiento" required>
				</div>
				<div class="form-group">
					<label for="registroSexo">Sexo:</label>
					<select class="form-control" name="genero" id="registroSexo" required>
						<option value="">-</option>
						<option value="male">Hombre</option>
						<option value="female">Mujer</option>
					</select>
				</div>
				<div class="form-group">
					<label>Correo:</label>
					<input type="email" name="email" placeholder="usuario@ejemplo.com" required>
				</div>
				<div class="form-group">
					<label>Usuario:</label>
					<input type="text" name="usuario" placeholder="usuario" required>
				</div>
				<div class="form-group">
					<label>Contraseña:</label>
					<input type="password" name="clave" placeholder="**********" required>
				</div>
				<div class="form-group">
					<label>Confirmar contraseña:</label>
					<input type="password" name="confirmarclave" placeholder="**********" required>
				</div>

				<input class="registro" type="submit" value="Registrar">
				<small id="emailHelp" class="form-text text-muted">Si ya tienes una cuenta,
					<a href="login.html">Inicia Sesión</a>.</small>

			</form>
		</div>


		<!-- MENÚ MÓVIL -->
		<nav class="navbar-light bg-light fixed-bottom d-sm-none" id="mobileMenu">
			<ul class="navbar-nav d-flex flex-row text-center">
				<li class="col nav-item">
					<a class="nav-link" href="../index.html">
						<i class="fa fa-home fa-2x m-auto" aria-hidden="true"></i>
					</a>
				</li>
				<li class="col nav-item">
					<a class="nav-link" href="post.html">
						<i class="fa fa-newspaper-o fa-2x m-auto" aria-hidden="true"></i>
					</a>
				</li>
				<li class="col nav-item">
					<a class="nav-link" href="forum.html">
						<i class="fa fa-comments-o fa-2x m-auto" aria-hidden="true"></i>
					</a>
				</li>
				<li class="col nav-item">
					<a class="nav-link" href="enciclopedia.html">
						<i class="fa fa-book fa-2x m-auto" aria-hidden="true"></i>
					</a>
				</li>
				<li class="col nav-item">
					<a class="nav-link" href="login.html">
						<i class="fa fa-user-circle-o fa-2x m-auto" aria-hidden="true"></i>
					</a>
				</li>
			</ul>
		</nav>


		<!-- Bootstrap core JavaScript -->
		<script src="../lib/jquery/jquery.min.js"></script>
		<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
	</body>
</html>