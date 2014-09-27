<!DOCTYPE html>
<html lang="es-ES">
<head>
	<?php include("template/encabezado.php"); ?>
	<title>Inicio de sesión</title>
</head>
<body>

		<form id="form1" name="form1" method="post" action="">
			<div class="row">
				<div class="col-md-6 col-sm-7 col-md-offset-3 col-sm-offset-3">
					<img src="image/encabezado_es.png"  class="img-responsive" alt="Alcaldia" />
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-sm-6 col-md-offset-5 col-sm-offset-5 ">
					<h3>Acceder</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2 col-sm-3 col-md-offset-4 col-sm-offset-3">
				  	<label for="user"  class="controllabel hidden-xs">Nombre de Usuario</label>
				</div>
				<div class="col-md-2 col-sm-3  col-xs-8">
					<input id="user" type="text" class="form-control form-text" 
				  	size="25" placeholder="Ingrese usuario"></div>
			</div>

			<div class="row">
				<div class="col-md-2 col-sm-3 col-md-offset-4 col-sm-offset-3 ">
				  	<label for="pass"  class="controllabel hidden-xs">Contraseña</label>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-8">
					<input id="pass" type="password" class="form-control form-text" 
				  	size="25" placeholder="Ingrese contraseña"></div>
			</div>
			<br>

			<div class="row">
				<div class="col-md-6 col-sm-3  col-sm-offset-5 col-md-offset-5">
				  	<input class="btn btn-primary" name="Enviar" type="submit" id="Enviar" value="Entrar"  />
				</div>				
			</div>

			<div class="row">
				<div class="col-md-6 col-md-offset-4 ">
				  	<p>Las 'Cookies' deben estar habilitadas en su navegador</p>
				</div>
				
			</div>

			<div class="row">
				<div class="col-md-6 col-md-offset-5 ">
				  	<button type="button" class="btn" onClick="location.href='menu.php'">Entrar a menú</button>
				</div>				
			</div>

			
	    </form>
</body>
</html>