﻿	<div class="panel panel-primary" >
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
				<div class="table-responsive">
					<table id="tabla" class="table table-hover" >
						<tr>
							<th>Nombre</th>
							<th>Estado</th>
							<th>Otro</th>
						</tr>
						<?php
						include "../m_usuario/sql_select_usuario_consultar.php"
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

	<!-- Bloque modal -->
	<div id="miModal" class="modal fade">
		<?php include("modalusuarioconsul.php"); ?>
	</div><!-- /.modal -->