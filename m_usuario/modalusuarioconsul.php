<!DOCTYPE html>
<html>
<head>
	

	<script type="text/javascript">

	function cambiopass () {
		var url_encabezado = "./m_usuario/generador.php";
		obtener(url_encabezado, '#passUsuario', new Array());
	}

	// proceso para operaciones intermedias
	function obtener (url_encabezado, divs, arreglo) {
		var jqxhr = $.post( url_encabezado, arreglo, function(data) {
			$(divs).val(data);
		})
		.done(function() {
			//done es una subfuncion que se ejecuta despues del metodo de exito
		})
		.fail(function() {
			//fail es una subfuncion que se ejecuta cuando falla el proceso
		})
		.always(function() {
			//always es una subfuncion que se ejecuta cuando termina el proceso,
			//independientemente de si se ejecuto con exito o fracaso
		});
	}

	function asignar (nombre, estado ) {
		$('#passUsuario').val(cambiopass ());
	}

	</script>
</head>
<body>

	<div class="modal-dialog">
		<div class="modal-content">
			<?php 
			/*Linea de busqueda de error
			error_reporting(E_ALL);
			ini_set('display_errors', '1');
			//*/

			//Inicio de operaciones
			$idUsuario='';
			if(isset($_POST['idUsuario'])){
				$idUsuario= $_POST['idUsuario'];
				//Realizar get

				include("sql_select_usuario_modal.php");
				//Accediendo a las variables
				
			}
			
			?>

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title"><label>Datos del Usuario </label> <label id="idUsuarioModal"><?php echo $idUsuario; ?></label></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-5 col-sm-5">
						<label for="nomUsuarioModal" class="controllabel hidden-xs">Nombre del usuario</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<input type="text" class="form-control" size="25" id="nomUsuarioModal" class="btn btn-default" 
						placeholder="Ingrese nombre de usuario" value="<?php echo getAM_nombreUsuario(); ?>" >
					</div>
				</div>

				

				<div class="row">
					<div class="col-sm-5 col-md-5">
						<label for="tipoUsuarioModal" class="controllabel">Tipo de usuario</label>
					</div>
					<div class="row col-sm-5 col-md-5">
						<div class="checkbox" id="tipoUsuarioModal">
						  	<label class="checkbox" ><input type="checkbox" id="chek[0]" value="1" <?php if (getAM_idPerfil(0)=='1') {echo 'checked';} ?>> Administrador</label>
						  	<label class="checkbox" ><input type="checkbox" id="chek[1]" value="2" <?php if (getAM_idPerfil(1)=='1') {echo 'checked';} ?>> Gerente Administrativo</label>
							<label class="checkbox" ><input type="checkbox" id="chek[2]" value="3" <?php if (getAM_idPerfil(2)=='1') {echo 'checked';} ?>> Gerente de Servicio</label>
							<label class="checkbox" ><input type="checkbox" id="chek[3]" value="4" <?php if (getAM_idPerfil(3)=='1') {echo 'checked';} ?>> Encargado de taller</label>
							<label class="checkbox" ><input type="checkbox" id="chek[4]" value="5" <?php if (getAM_idPerfil(4)=='1') {echo 'checked';} ?>> Activo Fijo</label>
							<label class="checkbox" ><input type="checkbox" id="chek[5]" value="6" <?php if (getAM_idPerfil(5)=='1') {echo 'checked';} ?>> Encargado de Almacén</label>
							<label class="checkbox" ><input type="checkbox" id="chek[6]" value="7" <?php if (getAM_idPerfil(6)=='1') {echo 'checked';} ?>> Supervisor de conductores</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5 col-sm-5 ">
						<label for="tipoModal" class="controllabel">Estado del usuario</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<select id="tipoModal" class="form-control">
							<option value="1" <?php if (getAM_estadoUsuario()=='1' || getAM_estadoUsuario()=='2') {echo 'selected';} ?> >Habilitado</option>
					        <option value="0" <?php if (getAM_estadoUsuario()=='0') {echo 'selected';} ?> >Deshabilitado</option>

					    </select>
					</div>

				</div>
				<br>
				<div class="row">
					<div class="col-md-5 col-sm-5 ">
						<label for="tipoModal" class="controllabel">¿Cambiar contraseña?</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="checkbox" id="tipoUsuario">
							<label class="checkbox"><input type="checkbox" id="password" value="1" > Cambiar</label>
						</div>
					</div>

				</div>
				<br>
				
				<div class="row">
					<div class="col-md-5 col-sm-5 ">
						<label for="generaUsuario" class="controllabel">Contraseña</label>
					</div>
					<div class="col-md-3 col-sm-3"><input id="passUsuario" type="text" class="form-control form-text" 
						readonly="readonly" size="20" value="<?php include "generador.php";?>">
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
	</div><!-- /.modal-dialog -->
</body>
</html>