
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
							<th>Fecha</th>
							<th>Usuario</th>
							<th>Operación</th>
						</tr>
						<tr>
							<td>12/12/2013</td>
							<td>USER-0001</td>
							<td>INSERT INTO TABLA (COL1) VALUES(INFO1)</td>
						</tr>
						<tr>
							<td>03/02/2014</td>
							<td>USER-0002</td>
							<td>INSERT INTO TABLA (COL1) VALUES(INFO1)</td>
						</tr>
						
					</table>
				</div>

				<!-- Botones -->
				<div class="row center-text">
					<br>
					
					<div class="col-xs-4 col-sm-4 col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-4 "> <input type="button" id="cancelar" class="btn btn-default" value="Cancelar" 
						onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" ></div>
					<br>
				</div>
			</form>
		</div> <!-- Fin del panel-body -->
	</div>
