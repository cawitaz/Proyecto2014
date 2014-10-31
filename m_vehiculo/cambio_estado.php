
	<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">	
	var idSelecc='';
	function seleccionado (id) {
		idSelecc=id;
		$('#idVehiculo').val(id);
		$("#miModal").load( "m_vehiculo/estado_modal.php", { "idVehiculo": id } );
		
		//window.location.href = '#miModal';
	}
	
	</script>
</head>
<body>

	<div class="panel panel-default panel-primary" >
		<div class="panel-heading "><h4>Cambio de estado de vehículos</h4>
		</div>
		<div class="panel-body" align="center">
			<!-- Inicio del formulario -->
			<form class="form-horizontal form-inline" role="form">
				<div class="row center-text">
					<br>
					<input type="text" id="idBuscar" placeholder="Busqueda">
					<div class="btn-group">
						<span class="glyphicon glyphicon-search"></span>
							</span> <input type="button" value="Buscar"> 
						
					</div>
					

				</div>
				<br>
				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="table-responsive">
					<table id="tabla" class="table table-hover">						
						<tr>
							<th>Número de placas</th>
							<th>Marca</th>
							<th>Estado</th>
						</tr>
										
		<?php

include "sql_cambiarEstado.php";

?>			
			
					</table>
				</div>

				<!-- Botones -->
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
	<input type="hidden" id="idVehiculo">

	<!-- Bloque modal -->
	<div id="miModal" class="modal fade">
			
	</div><!-- /.modal -->
</body>
	</html>
