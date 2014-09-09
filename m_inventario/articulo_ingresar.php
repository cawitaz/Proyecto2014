<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container show-top-margin separate-rows tall-rows">
		<div class="panel panel-primary col-md-6 col-md-offset-3" >
			<div class="panel-heading "><h4>Ingresar nuevo art&#237culo</h4></div>
			<div class="panel-body" align="center">
				<!-- Inicio del formulario -->
				<form class="form-horizontal form-inline" role="form">

				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="row">
				  <div class="col-md-5"><label for="idconductor"  class="controllabel hidden-xs">Id  art&#237culo</label>
				  </div>
				  <div class="col-md-3"><input id="idconductor" type="text" readonly="readonly" class="form-control form-text" 
				  	size="25" placeholder="Id_conductor"></div>
				</div>


				<div class="row">
					<div class="col-md-5"><label for="tipo" class="controllabel hidden-xs">Tipo de art&#237culo</label>
					</div>
					<div class="col-md-3"><input id="tipo" type="text" class="form-control form-text" 
				  	 size="25" placeholder="Ingrese Tipo de art&#237culo"></div>
				</div> <!--Fin del nombre conductor -->


				<div class="row">
					<div class="col-md-5"><label for="Marca" class="controllabel hidden-xs">Ingrese Marca del art&#237culo</label>
					</div>
					<div class="col-md-3"><input id="Marca" type="text" class="form-control form-text" 
				  	 size="25" placeholder="Ingrese marca del art&#237culo"></div>
				</div> <!--Fin del telefono -->

				<div class="row">
					<div class="col-md-5"><label for="cantidad" class="controllabel hidden-xs">Cantidad del art&#237culo</label>
					</div>
					<div class="col-md-3"><input id="numLic" type="text" class="form-control form-text" 
				  	 size="25" placeholder="Ingrese cantidad del art&#237culo"></div>
				</div> <!--Fin del numero de licencia -->

				
				<div class="row">
					<div class="col-md-5"><label for="fecha" class="controllabel hidden-xs">Cantidad del art&#237culo</label>
					</div>
					<div class="col-md-3"><input id="fecha" type="text" readonly="readonly" class="form-control form-text" 
				  	 size="25" placeholder="fecha_ingreso"></div>
				</div> <!--Fin del numero de licencia -->

				
								<div class="row">
					<div class="col-md-5"><label for="costo" class="controllabel hidden-xs">Costo de la compra</label>
					</div>
					<div class="col-md-3"><input id="costo" type="text" class="form-control form-text" 
				  	 size="25" placeholder="Ingrese el costo de la compra"></div>
				</div> <!--Fin del numero de licencia -->

				
				<!-- Botones -->
				<div class="row center-text">
					<br>
					
					<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" value="Cancelar" 
						onclick="limpiar('#panel1');" ></div>
					<div class="col-xs-1 col-md-1"> <input type="button" value="Guardar">
					</div>
					<br>
				</div>
					
				</form>
			</div>
		</div>
	</div>

</body>
</html>
