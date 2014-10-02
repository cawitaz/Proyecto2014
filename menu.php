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
		<div class="row hidden-xs col-sm-3 col-md-3 ">
			<?php include("template/gestor_notificaciones.php");?>
		</div>

        <div class="row">
        	<div class="main">
        		<ul class="nav nav-sidebar ">

        			<div class="container show-top-margin separate-rows tall-rows">
						<div class="col-sm-9 col-md-6 col-md-offset-1" >
			        		<div class="panel-body " id="panel1">
							<!-- Este menú se cambia con jQuery-->
								<?php include("template/inicio.php");?>
							</div>
							
						</div>
					</div>

				</ul>
        	</div>

		</div>
	</div>
	

</body>
</html>