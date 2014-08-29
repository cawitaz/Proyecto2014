
  <!-- BARRA DE NAVEGACION  -->
<nav  class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  
  <div class="navbar-header " >

    <span class="navbar-brand  text-right" ><strong>Control de Flota</strong></span> 
    <button type="button" class="navbar-toggle text-left" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only"> </span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex6-collapse navbar-inverse">
    <ul class="nav navbar-nav">
      <!--  Iniciamos con el menú-->
      <li class="active"><a href="menu.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
              
      <!--Inicio de Modulo Gestión de Usuarios-->
      <li class="dropdown " id="menu_usuario">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-user"></span>
          Usuarios <b class="caret"></b>
        </a>
        <ul class="dropdown-menu" >
          <li><a href="#" onclick="cargar('#panel1', 'm_usuario/usuario_crear.php');">Agregar usuario</a></li>
          <li><a href="#" onclick="cargar('#panel1', 'm_usuario/usuario_modificar.php');">Modificar usuario</a></li>
          <li><a href="#" onclick="cargar('#panel1', 'm_usuario/usuario_eliminar.php');">Eliminar datos</a></li>
          <li><a href="#" onclick="cargar('#panel1', 'm_usuario/usuario_consultar.php');">Consultar datos</a></li>
        </ul>
      </li> <!--Fin de Modulo-->



      <!--Inicio de Modulo Vehículo-->
      <li class="dropdown" id="menu_vehiculo" role="menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-road"></span>
          Vehículo<span class="caret"></span></a>
        <ul class="dropdown-menu">

          <!-- Creando un submenu Gestion de vehiculo-->

          <li class="dropdown-submenu"> <a href="#">Gesti&#243n de Vehículo</a>
            <ul class="dropdown-menu">
              <li><a href="#" onclick="cargar('#panel1','m_vehiculo/vehi_ingresar.php')">Agregar vehículo</a></li>
              <li><a href="#" onclick="cargar('#panel1','m_vehiculo/vehi_eliminar.php')">Eliminar vehículo</a></li>
              <li><a href="#" onclick="cargar('#panel1','m_vehiculo/vehi_modificar.php')">Modificar vehículo</a></li>
            </ul>
          </li>

          <!-- Submenu peticion de vehiculo -->
          <li class="dropdown-submenu"> <a href="#">Ver peticion de vehículo</a>
            <ul class="dropdown-menu">
            
              <li><a href="#" onclick="cargar('#panel1','m_vehiculo/peticion_asignar.php')">Asignar vehículo</a></li>
              <li><a href="#" onclick="cargar('#panel1','m_vehiculo/peticion_redactar.php')">Redactar Permiso</a></li>
              <li><a href="#" onclick="cargar('#panel1','m_vehiculo/peticion_estado.php')">Desplegar estado</a></li>
            </ul>
          </li>

          <!-- Submenu Gestionar poliza -->
          <li class="dropdown-submenu"> <a href="#">Gestionar Poliza</a>
            <ul class="dropdown-menu">
            
            <li><a href="#" onclick="cargar('#panel1','m_vehiculo/poliza_ingresar.php')">Ingresar p&#243liza</a></li>
            <li><a href="#" onclick="cargar('#panel1','m_vehiculo/poliza_modificar.php')">Modificar p&#243liza</a></li>
            <li><a href="#" onclick="cargar('#panel1','m_vehiculo/poliza_eliminar.php')">Eliminar p&#243liza</a></li>
           </ul>
          </li>

          <!-- Submenu Gestionar bitacora -->
          <li class="dropdown-submenu"> <a href="#">Gestionar Bitacora</a>
            <ul class="dropdown-menu">
            <li><a href="#" onclick="cargar('#panel1','m_vehiculo/bitacora_ver.php')">Ver bitacora</a></li>
            <li><a href="#" onclick="cargar('#panel1','m_vehiculo/bitacora_ingresar.php')">Ingresar registro</a></li>
            <li><a href="#" onclick="cargar('#panel1','m_vehiculo/bitacora_modificar.php')">Modificar registro</a></li>
            </ul>
          </li>


          <!-- Submenu Gestionar esquela -->
          <li class="dropdown-submenu"> <a href="#">Gestionar Esquelas</a>
            <ul class="dropdown-menu">
              <li><a href="#" onclick="cargar('#panel1','m_vehiculo/esquela_ingresar.php')">Ingresar esquelas</a></li>
              <li><a href="#" onclick="cargar('#panel1','m_vehiculo/esquela_modificar.php')">Modificar datos de esquela</a></li>
            </ul>
          </li>

          <li class="divider"></li>
          
          <li><a href="#" onclick="cargar('#panel1','m_vehiculo/cambio_estado.php')">Cambio de estado</a></li>
          
        </ul>
      </li><!--Fin de Modulo-->



      <!--Inicio de Modulo conductores-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-hand-right"></span>
          Conductores<b class="caret"></b></a>

        <ul class="dropdown-menu">

          <!-- Submenu Gestionar conductor -->
          <li class="dropdown-submenu"> <a href="#">Gestionar Conductor</a>
            <ul class="dropdown-menu">
              <li><a href="#" onclick="cargar('#panel1','m_conductor/conductor_ingresar.php')">Ingresar Conductor</a></li>
              <li><a href="#" onclick="cargar('#panel1','m_conductor/conductor_eliminar.php')">Eliminar Conductor</a></li>
              <li><a href="#" onclick="cargar('#panel1','m_conductor/conductor_modificar.php')">Modificar Conductor</a></li>
              <li><a href="#" onclick="cargar('#panel1','m_conductor/conductor_consultar.php')">Consultar Conductor</a></li>
            </ul>
          </li>

          <li class="divider"></li>

          <li><a href="#" onclick="cargar('#panel1','m_conductor/desplegar.php')">Desplegar Conductor</a></li>
          <li><a href="#" onclick="cargar('#panel1','m_conductor/autorizar.php')">Autorizar o Rechazar</a></li>
          
          
        </ul>
      </li><!--Fin de Modulo conductor-->


      <!--Inicio de Modulo Inventario-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-barcode"></span>
          Inventario<b class="caret"></b></a>

        <ul class="dropdown-menu">
          <li><a href="#" onclick="cargar('#panel1','m_inventario/taller_ver.php')">Ver inventario taller</a></li>
          <li><a href="#" onclick="cargar('#panel1','m_inventario/taller_actualizar.php')">Actualizar inventario</a></li>

          <li class="divider"></li>
          <li><a href="#" onclick="cargar('#panel1','m_inventario/compra_estado.php')">Ver estado de compra</a></li>
          <li><a href="#" onclick="cargar('#panel1','m_inventario/compra_peticion.php')">Elaborar petici&#243n de compra</a></li>
          
          <li class="divider"></li>
          <li><a href="#" onclick="cargar('#panel1','m_inventario/articulo_ingresar.php')">Ingresar Artículo</a></li>
          <li><a href="#" onclick="cargar('#panel1','m_inventario/articulo_modificar.php')">Modificar Artículo</a></li>
          
        </ul>
      </li><!--Fin de Modulo-->


      <!--Inicio de Mantenimiento-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-wrench"></span>
          Mantenimiento <b class="caret"></b></a>

        <ul class="dropdown-menu">
          <li><a href="#" onclick="cargar('#panel1','m_manto/hoja_vida.php')">Gestionar hoja de vida</a></li>
          <li class="divider"></li>
          <!-- Submenu Mantenimiento y reparacion -->
          <li class="dropdown-submenu"> <a href="#">Reparaci&#243n/Mantenimiento</a>
            <ul class="dropdown-menu">
              <li><a href="#" onclick="cargar('#panel1','m_manto/registro_materiales.php')">Registro materiales utilizados</a></li>
              <li><a href="#" onclick="cargar('#panel1','m_manto/registro_trabajo.php')">Registro trabajo realizado</a></li>
            </ul>
          </li><!--Fin de Modulo-->


          <li class="divider"></li>
          <li><a href="#" onclick="cargar('#panel1','m_manto/manto_solicitud.php')">Desplegar solicitud de reparación</a></li>
          <li><a href="#" onclick="cargar('#panel1','m_manto/manto_autoriza.php')">Autorizar y Rechazar</a></li>
          
        </ul>
      </li><!--Fin de Modulo manto-->



      <!--Inicio de Modulo Reportes-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-folder-open"></span>
          Reportes <b class="caret"></b></a>

        <ul class="dropdown-menu">
          <li><a href="#" onclick="cargar('#panel1','m_reportes/generar.php')">Generar reporte</a></li>
          <li><a href="#" onclick="cargar('#panel1','m_reportes/busqueda.php')">Busqueda Personalizada</a></li>
        </ul>
      </li><!--Fin de Modulo-->

    </ul>
  </div>
    <!-- /.navbar-collapse -->



    <div class="panel-body text-right">
        
        <a  class="dropdown-toggle " data-toggle="dropdown">
          <span class="glyphicon glyphicon-user"></span>
          Usuario <b class="caret"></b>
        </a>

        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="#">
            <span class="glyphicon glyphicon-cog"> Perfil</span>
          </a></li>
          <li class="divider"></li>          
          <li>
            <a href="index.php" ><span class="glyphicon glyphicon-off"> Salir</span></a>
          </li>
        </ul>
      </li>
    </div>




</nav>  <!--FIN BARRA DE NAVEGACION  -->
