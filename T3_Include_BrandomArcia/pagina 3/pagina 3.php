<!doctype html>
<html lang="es">
<head>
  <!-- Configuracion basica del documento -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Titulo de la pagina -->
  <title>ODS - Acciones</title>

  <!-- Archivos de estilos -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/estilos.css" rel="stylesheet" />
</head>

<body>

<!-- ================= INICIO HEADER ================= -->
<!-- Incluye el encabezado de la pagina (titulo principal y descripcion) -->
<?php include("headerpag3.html"); ?>
<!-- ================= FIN HEADER ================= -->


<!-- ================= INICIO CONTENEDOR PRINCIPAL ================= -->
<div id="contenedor" class="container">

  <!-- ================= INICIO NAV ================= -->
  <!-- Menu de navegacion principal (Inicio, ODS, Acciones) -->
  <?php include("navpag3.html"); ?>
  <!-- ================= FIN NAV ================= -->


  <!-- ================= INICIO BREADCRUMB ================= -->
  <!-- Miga de pan: indica en qué pagina esta el usuario -->
  <?php include("breadcrumbpag3.html"); ?>
  <!-- ================= FIN BREADCRUMB ================= -->


  <!-- ================= INICIO JUMBOTRON ================= -->
  <!-- Seccion destacada con titulo grande y mensaje principal -->
  <?php include("jumbotronpag3.html"); ?>
  <!-- ================= FIN JUMBOTRON ================= -->


  <!-- ================= INICIO CARRUSEL ================= -->
  <!-- Carrusel de imagenes con información de los ODS -->
  <?php include("carouselpag3.html"); ?>
  <!-- ================= FIN CARRUSEL ================= -->


  <!-- ================= INICIO GRID ================= -->
  <!-- Estructura de columnas (layout principal de la pagina) -->
  <div class="row">

    <!-- ===== INICIO COLUMNA IZQUIERDA ===== -->
    <!-- Contiene acciones rapidas (thumbnails) -->
    <?php include("col_izqpag3.html"); ?>
    <!-- ===== FIN COLUMNA IZQUIERDA ===== -->


    <!-- ===== INICIO COLUMNA CENTRAL ===== -->
    <!-- Contiene acciones importantes (paneles principales) -->
    <?php include("col_centropag3.html"); ?>
    <!-- ===== FIN COLUMNA CENTRAL ===== -->


    <!-- ===== INICIO COLUMNA DERECHA ===== -->
    <!-- Contiene informacion social y contenido adicional -->
    <?php include("col_derechapag3.html"); ?>
    <!-- ===== FIN COLUMNA DERECHA ===== -->

  </div>
  <!-- ================= FIN GRID ================= -->


  <!-- ================= INICIO ACCORDION ================= -->
  <!-- Seccion desplegable con informacion adicional -->
  <?php include("accordionpag3.html"); ?>
  <!-- ================= FIN ACCORDION ================= -->


  <!-- ================= INICIO MODAL ================= -->
  <!-- Ventana emergente (popup) que muestra mas informacion -->
  <?php include("modalpag3.html"); ?>
  <!-- ================= FIN MODAL ================= -->


  <!-- ================= INICIO PAGINACION ================= -->
  <!-- Navegacion entre paginas (1, 2, 3) -->
  <?php include("paginacionpag3.html"); ?>
  <!-- ================= FIN PAGINACIÓN ================= -->

</div>
<!-- ================= FIN CONTENEDOR PRINCIPAL ================= -->


<!-- ================= INICIO FOOTER ================= -->
<!-- Pie de página con información institucional -->
<?php include("footerpag3.html"); ?>
<!-- ================= FIN FOOTER ================= -->


<!-- ================= INICIO SCRIPTS ================= -->
<!-- Librerias necesarias para que funcione Bootstrap -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ================= FIN SCRIPTS ================= -->

</body>
</html>
