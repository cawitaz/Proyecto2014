	<html>
<head>
	<script type="text/javascript">	
	var idSelecc='';
	function seleccionado (id) {
		idSelecc=id;
		$('#idUsuario').val(id);
		$( "#miModal" ).load( "m_usuario/modalusuarioconsul.php", { "idUsuario": id } );
		
		//window.location.href = '#miModal';
	}
	
	</script>
</head>
<body>


	<div class="panel panel-primary" >
		<div class="panel-heading "><h4>Datos de Usuario</h4>
		</div>
		<div class="panel-body" align="center">
			<!-- Inicio del formulario -->
			<form class="form-horizontal form-inline" role="form">
				<div class="row center-text">
					<br>
					<input type="text" id="idBuscar"  placeholder="Buscar">
					<div class="btn-group">
						<div type="button" class="btn btn-default" class="dropdown-toggle boton-buscar"
							data-toggle="dropdown">  <span class="glyphicon glyphicon-search"></span>
							</span>
						</div>
					</div>
				</div>
				<br>
				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="row">



				</div>
				<div class="table-responsive">
					<table id="tabla" class="table table-hover" >
						<tr>
							<th>Nombre</th>
							<th>Estado</th>
							<th>Otro</th>
						</tr>
						<?php
						include "sql_select_usuario_consultar.php";
						?>
					</table>
				</div>


				<!-- Botones -->
				<div class="row center-text">
					<br>
					
					<div class="btn"> <input type="button" id="cancelar" class="btn btn-default" value="Cancelar" 
						onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" ></div>
					<br>
				</div>
			</form>
		</div> <!-- Fin del panel-body -->
	</div>

	<input type="hidden" id="idUsuario">

	<!-- Bloque modal -->
	<div id="miModal" class="modal fade">
		<!-- Se procede a cargar acá la ventana modal y luego a ejecutarla-->
	</div><!-- /.modal -->
</body>
</html>