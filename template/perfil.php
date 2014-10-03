
	<div class="panel panel-default panel-primary" >
		<div class="panel-heading "><h4>Perfil de Usuario</h4>
		</div>
		<div class="panel-body" align="center">
			<!-- Inicio del formulario -->
			<form class="form-horizontal form-inline" role="form">
				<!-- Inicio de los objetos del formulario mediante filas -->
					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="idUsuario"  class="controllabel hidden-xs">ID usuario</label>
					  </div>
					  <div class="col-md-4 col-sm-4"><input id="idUsuario" type="text" class="form-control form-text" 
					  	size="25" readonly="readonly" placeholder="Id del usuario"></div>
					</div>


					<div class="row">
						<div class="col-md-5 col-sm-5"><label for="nombre" class="controllabel hidden-xs">Nombre del usuario</label>
						</div>
						<div class="col-md-4 col-sm-4"><input id="nombre" type="text" class="form-control form-text" 
					  	 size="25" readonly="readonly" placeholder="Nombre del usuario"></div>
					</div>

					<div class="row">
						<div class="table-responsive text-center">
							<table id="tabla" class="table table-hover">
								<th></th><th>Perfiles</th><th></th>
								<tr><td>Perfil 1</td><td>Perfil 2</td><td>Perfil 3</td></tr>
								<tr><td>Perfil 4</td><td>Perfil 5</td><td>Perfil 6</td></tr>
							</table>
						
						</div>						
					</div><!--Fin de Perfiles -->
						
					<div class="row">
					  <div class="text-center"><label class="controllabel">Cambiar contraseña</label> </div>
					  
					</div><!--Cambiar contraseña -->

					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="pass" class="controllabel hidden-xs">Nueva contraseña</label> </div>
					  <div class="col-md-4 col-sm-4"><input type="password" class="form-control" size="25" id="pass"
									placeholder="Ingrese nueva contraseña"></div>
					</div><!--Cambiar contraseña -->

					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="confirma" class="controllabel hidden-xs">Confirme contraseña</label> </div>
					  <div class="col-md-4 col-sm-4"><input type="password" class="form-control" size="25" id="confirma"
									placeholder="Confirme contraseña"></div>
					</div><!--Fin de confirmar contraseña -->

						
					<div class="row center-text">
						<br>
						
						<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" class="btn btn-default" value="Cancelar" 
							onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" ></div>
						<div class="col-xs-1 col-md-1"> <input type="button" class="btn btn-default btn-primary" value="Guardar">
						</div>
						<br>
					</div>
					

			</form>
		</div> <!-- Fin del panel-body -->
	</div>
