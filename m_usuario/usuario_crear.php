<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="panel panel-primary" >
			<div class="panel-heading "><h4>Nuevo Usuario</h4></div>
			<div class="panel-body" align="center">
				<!-- Inicio del formulario -->
				<form class="form-horizontal form-inline" role="form">

				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="row">
				  <div class="col-md-5"><label for="idUsuario"  class="controllabel hidden-xs">Nuevo ID</label>
				  </div>
				  <div class="col-md-3"><input id="idUsuario" type="text" class="form-control form-text" 
				  	readonly="readonly" size="25" value="Id del Usuario"></div>
				</div>

				<div class="row">
				  <div class="col-md-5"><label for="nomUsuario" class="controllabel hidden-xs">Nombre del usuario</label>
				  </div>
				  <div class="col-md-3"><input type="text" class="form-control" size="25" id="nomUsuario"
								placeholder="Ingrese nombre de usuario"></div>
				</div>

				<div class="row">
					<div class="col-md-5"><label for="passUsuario" class="controllabel hidden-xs">Nueva Contraseña</label>
					</div>
					<div class="col-md-3"><input id="generaUsuario" type="text" class="form-control form-text" 
				  	readonly="readonly" size="25" value="password generado"></div>
				</div>


				<div class="row">
				  <div class="col-md-5"><label for="emailUsuario" class="controllabel hidden-xs">Ingrese Email</label> </div>
				  <div class="col-md-3"><input type="email" class="form-control" size="25" id="emailUsuario"
								placeholder="Ingrese su Email"></div>
				</div><!--Fin del email -->

				<br>

				<div class="row">
					<div ><label for="tipoUsuario" class="controllabel">Tipo de usuario</label>
						</div>
					
						<div class="checkbox">
						  	<label class="checkbox"><input type="checkbox" id="chek1" value="1"> Administrador</label>
						  	<label class="checkbox" ><input type="checkbox" id="chek2" value="2"> Gerente Administrativo</label>
						  	<label class="checkbox" ><input type="checkbox" id="chek3" value="3"> Gerente de Servicio</label>
						  	<label class="checkbox" ><input type="checkbox" id="chek4" value="4"> Encargado de taller</label>
						  	<label class="checkbox" ><input type="checkbox" id="chek5" value="5"> Activo Fijo</label>
						  	<label class="checkbox" ><input type="checkbox" id="chek6" value="6"> Encargado de Almacén</label>
						  	<label class="checkbox" ><input type="checkbox" id="chek7" value="7"> Supervisor de conductores</label>
						</div>
				</div>

					
				<div class="row center-text">
					<br>
					
					<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" value="Cancelar" 
						onclick="limpiar('#panel1');" ></div>
					<div class="col-xs-1 col-md-1"> <input type="button" value="Guardar">
					</div>
					<br>
				</div>

					
				</form>
			</div>
		</div>

</body>
</html>
