
	<div class="panel panel-default panel-primary" >
		<div class="panel-heading "><h4>Busqueda personalizada</h4>
		</div>
		<div class="panel-body" align="center">
			<!-- Inicio del formulario -->
			<form class="form-horizontal form-inline" role="form">
				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="table-responsive">
					<table id="tabla" class="table table-hover">						
						<tr>
							<th>Reporte</th>
							<th>Vista previa</th>
							<th>Generar</th>
						</tr>
						<tr>
							<td>Reporte 1</td>
							<td>
								<a href="#" class="btn btn-default btn-xs">Ver</a>
							</td>
							<td>
								<a href="#" class="btn btn-default btn-xs">Generar</a>
							</td>
						</tr>
						<tr>
							<td>Reporte 1</td>
							<td>
								<a href="#" class="btn btn-default btn-xs">Ver</a>
							</td>
							<td>
								<a href="#" class="btn btn-default btn-xs">Generar</a>
							</td>
						</tr>
						
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

