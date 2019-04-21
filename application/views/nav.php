<div class="row sticky-top">
    <div class="col">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">ITMaipu V2.9.3</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url();?>index.php/portada/index/">Portada <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/portada/datosalumno/">Datos x Alumno</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/portada/correosasignatura/">Correos x Asignatura</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="#">Salas 2018-2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/portada/docentes20182/">Docentes 2019-1</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Programación 2019-1</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/portada/programacion/">Asignar Ramo</a>
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/portada/cargadocente/">Docentes 2019-1</a>
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/portada/cargasala/">Salas 2019-1</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Histórico</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/portada/programacion20181/">2018-1</a>
        </div>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/user_authentication/logout">Cerrar Sesión <?php //echo $nombreusuario;?></a>
            </li>          
          </ul>
        </div>
      </nav>
    </div><!-- end col-->
  </div><!-- end row -->