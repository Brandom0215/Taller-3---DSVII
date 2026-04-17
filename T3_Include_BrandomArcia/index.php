<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>T3_ODS_Include</title>

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/estilos.css" />
  </head>
  <body>
    <!-- Incia el encabezado de la pagina-->
    <header>
      <h1>Objetivos de Desarrollo Sostenible (ODS)</h1>
      <p><center>Transformando nuestro mundo para un futuro mejor</center></p>
    </header>
    <!--Termina el encabezado-->

    <!--Inicia contenedor principal-->
    <div id="contenedor" class="container">

      <!--Inicio del panel principal para la barra de navegacion-->
      <div id="panelprincipal" class="panel">

                <!--Inicia Nav de navegacion -->

                <?php include("menu.html");?>

        <!--Finaliza nav de navegacion-->

        <!--Inicia las migas de pan-->

        <?php include("migas.html");?>

        <!--Finaliza las migas de pan-->
      </div>
      <!--Fin del Panel-->

      <!--Inicia Panel carrusel-->
      <?php include("carrusel.html"); ?>
      <!--Finaliza el carrusel-->

    
      <!--Inicia seccion de dos columnas-->
      <div class="row">
    <!--Inicia la columna izquierda-->

     <?php include("col_izq.html"); ?>

        <!--Termina columna izquierda-->

    <!--Inicia columna derecha-->
    <?php include("col_der.html"); ?>

        <!--Termina columna derecha-->

      </div>
      <!--Termina la sección de dos columnas-->

    <div class="panelPaginacion"><!-- Inicia clase paginación -->

 <!-- Inicia panel de paginación -->
  <?php include("paginacion.html"); ?>
<!-- Termina panel de paginación -->

</div><!-- Termina clase paginación -->
    </div>
    <!--Termina contenedor principal-->

        <!--Inicia el footer-->
          <?php include("footer.html"); ?>
      <!--Termina el footer-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
