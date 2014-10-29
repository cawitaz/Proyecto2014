<html>
<head>
	<script type="text/javascript">	
	var idSelecc='';
	function seleccionado (id) {
		idSelecc=id;
		$('#idBitacora').val(id);
		$( "#miModal" ).load( "m_vehiculo/bitacora_modal.php", { "idBitacora": id } );
		
		//window.location.href = '#miModal';
	}
	
	</script>
</head>
<body>
	<div class="panel panel-default panel-primary" >
		<div class="panel-heading "><h4>Bitácora de Vehículos</h4>
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
							<center><th>ID</th></center>
							<center><th>Destino</th></center>
							<center><th>Vehiculo</th></center>
						</tr>				
												
	<?php
include "sql_select_bitacora_consultar.php";
      
     ?>
					</table>
				</div>

				<!-- Botones -->
				<div class="row center-text">
					<br>
					
					<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" class="btn btn-default" value="Cancelar" 
						onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" ></div>
										</div>
					<br>
				</div>
			</form>
		</div> <!-- Fin del panel-body -->
	</div>
	<input type="hidden" id="idUsuario">

	<!-- Bloque modal -->
	<div id="miModal" class="modal fade">
		<?php include("bitacora_modal.php"); ?>
	</div><!-- /.modal -->
</body>
	</html>