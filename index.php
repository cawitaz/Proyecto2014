<!DOCTYPE html><html lang="es">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Sistema de Control de Flota Vehicular de la Alcaldía Municipal de Mejicanos</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./css/styles.css">

    <script src="./js/jquery-2.1.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script> 

</head>

<body>

<div id="marco" align="center">
    <form id="form1" name="form1" method="post" action="">
        <div>
          <img src="image/escudo_alcaldiamejicanos_es.png"  class="img-responsive" alt="Alcaldia" />
          <h3>Acceder</h3>
        </div>
        
        <div id = "entrada">
  		<label class = "lead" for="user">Usuario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  		<input class="input-lg" type="text" id="user" maxlength="10" />
  		<br>
  		<label class = "lead" for="pass2">Contraseña:&nbsp;</label>
  		<input class="input-lg" name="pass" type="password" id="pass" />
  		<br>
  		<input class="btn-primary" name="Enviar" type="submit" id="Enviar" value="Entrar"  />
  		<br>

  		    
  	  <div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">
		  <p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em; font-family: "Arial", "Helvetica";">
			</span>Las 'Cookies' deben estar habilitadas en su navegador
		  </p>
	  </div>
  </div>
  <button type="button" onClick="location.href='menu.php'">Entrar a menú</button>


</div>  
</form>

</body>
</html>