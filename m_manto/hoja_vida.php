
	<div class="panel panel-default panel-primary" >
		<div class="panel-heading "><h4>Hoja de vida</h4>
		</div>
		<div class="panel-body" align="center">
			<!-- Inicio de los objetos del formulario mediante filas -->
			<br>
			<div class="row">
				<ul class="nav nav-tabs nav-justified">
					<li class="active"><a href="#opcion1" data-toggle="tab">Vehículos</a></li>
					<li><a href="#opcion2" data-toggle="tab">Materiales</a></li>
					<li><a href="#opcion3" data-toggle="tab">Mantenimientos</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="opcion1">
						<h3>Vehículos con Hoja de vida</h3>
						<?php include("hoja_1.php"); ?>
					</div>
						
					<div class="tab-pane" id="opcion2">
						<h3>Registro de Materiales utilizados</h3>
						<?php include("hoja_2.php"); ?>
					</div>
						
					<div class="tab-pane" id="opcion3">
						<h3>Registro de Mantenimientos</h3>
						<?php include("hoja_3.php"); ?>
					</div>
				</div>
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
			
		</div> <!-- Fin del panel-body -->
	</div>

	<!-- Bloque modal -->
	<div id="miModal" class="modal fade">
		<?php include("registro_trabajo_modal.php"); ?>
	</div><!-- /.modal -->
