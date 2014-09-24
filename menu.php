<?php /*
Fecha de modificación: 17/09/2014

*/?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<?php include("template/encabezado.php"); ?>
  	
</head>
<body>

	<?php include("template/barraNav.php"); ?>

	<div class="container-fluid">
		<div class="row hidden-xs col-sm-3 col-md-2 ">
			<div class="header sidebar">
				<br>

				<div class="panel panel-primary" >
					<div class="panel-heading "><h4>Notificaciones</h4></div>
					<div class="panel-body" align="center">


						<ul class="nav nav-sidebar">
							<li></li>
							<!--
							<li class="active"><a href="http://www.mejicanos.gob.sv/"  target="_blank">Alcaldía de Mejicanos</a></li>-->
							<li><a href="#">Solicitud<span class="badge pull-right">0</span></a></li>
							<li><a href="#">Verificación<span class="badge pull-right">1</span></a></li>
							<li><a href="#">Notificación<span class="badge pull-right">1</span></a></li>
							<li></li>
						</ul>
					</div>
				</div>
        	</div>
        </div>
        <div class="row">
        	<div class="main">
        		<ul class="nav nav-sidebar ">

        			<div class="container show-top-margin separate-rows tall-rows">
						<div class="col-sm-9 col-md-6 col-md-offset-2" >
			        		<div class="panel-body " id="panel1">
							<!-- Este menú se cambia con jQuery-->
							</div>
						</div>
					</div>

				</ul>
        	</div>

		</div>
	</div>
	

</body>
</html>