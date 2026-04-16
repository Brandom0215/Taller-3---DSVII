<!doctype html>
<html lang="es">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- titulo de la pagina -->
  <title>ODS - Acciones</title>

  <!-- archivos de estilos -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/estilos.css" rel="stylesheet" />
</head>

<body>

<!-- inicio header -->
<!-- aqui se carga el encabezado con el titulo principal -->
<?php include("headerpag3.html"); ?>
<!-- fin header -->


<!-- inicio contenedor -->
<div id="contenedor" class="container">

  <!-- inicio nav -->
  <!-- menu principal para navegar entre paginas -->
  <?php include("navpag3.html"); ?>
  <!-- fin nav -->


  <!-- inicio breadcrumb -->
  <!-- muestra en que parte del sitio esta el usuario -->
  <?php include("breadcrumbpag3.html"); ?>
  <!-- fin breadcrumb -->


  <!-- inicio jumbotron -->
  <!-- seccion destacada con mensaje principal -->
  <?php include("jumbotronpag3.html"); ?>
  <!-- fin jumbotron -->


  <!-- inicio carrusel -->
  <!-- imagenes que van cambiando automaticamente -->
  <?php include("carouselpag3.html"); ?>
  <!-- fin carrusel -->


  <!-- inicio grid -->
  <!-- estructura de columnas -->
  <div class="row">

    <!-- inicio columna izquierda -->
    <!-- contiene acciones rapidas -->
    <?php include("col_izqpag3.html"); ?>
    <!-- fin columna izquierda -->


    <!-- inicio columna central -->
    <!-- contiene acciones importantes -->
    <?php include("col_centropag3.html"); ?>
    <!-- fin columna central -->


    <!-- inicio columna derecha -->
    <!-- contiene informacion adicional -->
    <?php include("col_derechapag3.html"); ?>
    <!-- fin columna derecha -->

  </div>
  <!-- fin grid -->


  <!-- inicio acordeon -->
  <!-- seccion que se despliega al hacer clic -->
  <?php include("accordionpag3.html"); ?>
  <!-- fin acordeon -->


  <!-- inicio modal -->
  <!-- ventana emergente con mas informacion -->
  <?php include("modalpag3.html"); ?>
  <!-- fin modal -->


  <!-- inicio paginacion -->
  <!-- botones para cambiar de pagina -->
  <?php include("paginacionpag3.html"); ?>
  <!-- fin paginacion -->

</div>
<!-- fin contenedor -->


<!-- inicio footer -->
<!-- pie de pagina con informacion -->
<?php include("footerpag3.html"); ?>
<!-- fin footer -->


<!-- inicio scripts -->
<!-- archivos necesarios para que funcione bootstrap -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- fin scripts -->

</body>
</html>
