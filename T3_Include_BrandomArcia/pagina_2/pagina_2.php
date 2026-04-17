<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>T3_ODS_Include</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/estilos.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/estilos.css" />
  </head>

  <body>
    <!--Inicio de encabezado -->
    <?php include("headerpag2.html");?>
    <!-- fin de encabezado-->

    <!-- Cuerpo de la pagina -->

    <div id="contenedor" class="container"> <!-- Contenedor principal de Bootstrap -->
      
      <!--Inicio del panel principal para la barra de navegacion-->
      <div id="panelprincipal" class="panel">
        
        <!--Inicia el Include menu de navegación -->
        <?php include("navegacion.html");?>
        <!--Termina el Include-->

        <!--Inicia el Include migas de pan -->
        <?php include("migaspan.html");?>
        <!--Termina el Include-->

      </div>
      <!-- Final el panel principal para la barra de navegación -->

      <!--Inicia el Include migas de pan -->
      <?php include("jumbotron.html");?>
      <!--Termina el Include-->
      
      <!-- DROPDOWN -->
      <div class="dropdown">
        
        <!--Inicia el Include de Boton de dropdowmenu -->
        <?php include("buttonDrowmenu.html");?>
        <!--Termina el Include-->
        
        <!--Inicia el Include de dropdowmenu -->
        <?php include("dropdowmenu.html");?>
        <!--Termina el Include-->

      </div>

      <br />
      <!-- Salto de linea -->

      <!--Inicia el Include infoDinamica -->
      <?php include("infoDinamica.html");?>
      <!--Termina el Include-->

      <!--Inicia el Include grid de imagenes -->
      <?php include("grid_imagenes.html");?>
      <!--Termina el Include-->

      <!--Inicia el Include accordion -->
      <?php include("acordion.html");?>
      <!--Termina el Include-->

      <div class="panelPaginacion"><!-- Inicia clase paginación -->
        <!-- Inicia panel de paginación -->
        <?php include("../paginacion.html"); ?>
        <!-- Termina panel de paginación -->
      </div><!-- Termina clase paginación -->

      <!--Inicia el Include de footer -->
      <?php include("../footer.html");?>
      <!--Termina el Include-->

    </div>

    <script src="../js/jquery.js"></script>
    <!-- Libreria jQuery necesaria para Bootstrap -->

    <script src="../js/bootstrap.min.js"></script>
    <!-- JavaScript de Bootstrap -->

    <!-- SCRIPT -->
    <script>
      /* Funcion que cambia el texto del boton y muestra información del ODS seleccionado */
      function cambiarODS(texto) {
        document.getElementById("btnODS").innerHTML =
          texto + ' <span class="caret"></span>';

        document.getElementById("infoODS").innerHTML =
          "<h3>" +
          texto +
          "</h3><img src='../imagenes/ods" +
          texto.split(" ")[1].replace(":", "") +
          ".png' width='120'>";
      }
    </script>
    <!-- Fin SCRIPT -->

  </body>
</html>