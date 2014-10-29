<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">Opciones</h4>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-5 col-sm-5">
					<label for="nomUsuario" class="controllabel hidden-xs">Nombre del usuario</label>
				</div>
				<div class="col-sm-4 col-md-4">
					<input type="text" class="form-control" size="25" id="nomUsuario" class="btn btn-default" 
									placeholder="Ingrese nombre de usuario">
				</div>
			</div>

			<div class="row">
				<div class="col-sm-5 col-md-5">
					<label for="tipoUsuario" class="controllabel">Tipo de usuario</label>
				</div>
				<div class="row col-sm-4 col-md-4">
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
			</div>

			<div class="row">
				<div class="col-md-5 col-sm-5 ">
					<label for="tipo" class="controllabel">Estado del usuario</label>
				</div>
				<div class="col-sm-4 col-md-4">
					<select id="tipo" class="form-control">
						<option value="1">Habilitar</option>
				        <option value="0">Deshabilitar</option>
				    </select>
				</div>

			</div>
			<br>
			<div class="row">
				<div class="col-md-5 col-sm-5 ">
					<label for="generaUsuario" class="controllabel">Contraseña</label>
				</div>
				<div class="col-md-3 col-sm-3"><input id="passUsuario" type="text" class="form-control form-text" 
					readonly="readonly" size="20" onchange="cambiopass();" value="<?php include "generador.php";?>">
				</div>

				<div class="col-md-1 col-sm-1">
					<button type="button" class="btn btn-default" onclick="cambiopass();">
						<span class="glyphicon glyphicon-repeat"></span> 
					</button>
				</div>
			</div>

		</div>
		
		<div class="modal-footer">
			<div class="row">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Eliminar</button>
				<button type="button" class="btn btn-primary">Guardar cambios</button>
			</div>
		</div>
	</div><!-- /.modal-content -->