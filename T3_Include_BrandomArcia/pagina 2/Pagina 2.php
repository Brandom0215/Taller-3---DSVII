
<!doctype html>
<html lang="es">
  <head>
    <!-- ================= INICIO ENCABEZADO ================= -->
    <header>
      <h1>Objetivos de Desarrollo Sostenible (ODS)</h1>
      <p><center>Transformando nuestro mundo para un futuro mejor</center></p>
    </header>
    <!-- ================= FIN ENCABEZADO ================= -->

    <meta charset="utf-8" />
    <!-- Permite usar caracteres especiales como tildes -->

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Hace que la pagina sea responsive en dispositivos moviles -->

    <title>ODS - Página 2</title>
    <!-- Titulo que aparece en la pestaña del navegador -->

    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <!-- Enlace al archivo CSS de Bootstrap -->

    <link href="../css/estilos.css" rel="stylesheet" />
    <!-- Enlace a estilos personalizados -->
  </head>

  <body>
    <!-- Cuerpo de la pagina -->

    <div id="contenedor" class="container"> <!-- Contenedor principal de Bootstrap -->
      <!--Inicio del panel principal para la barra de navegacion-->
      <div id="panelprincipal" class="panel">
        <!--Inicia Nav de navegacion -->
        <nav class="navbar navbar-default" role="navigation">
          <div class="container">
            <a class="navbar-brand">Taller #2_ODS</a>
            <ul class="nav navbar-nav">
              <li>
                <a href="../index.php">Inicio</a>
              </li>
              <li class="active">
                <a href="../pagina 2/pagina 2.php">Objetivos de Desarrollo Sostenible</a>
              </li>
              <li>
                <a href="../pagina 3/pagina 3.php">Acciones de las ODS</a>
              </li>
            </ul>
          </div>
        </nav>
        <!--Finaliza nav de navegacion-->

        <!--Inicia las migas de pan-->
        <ol class="breadcrumb">
          <li>
            <a href="../index.php">Inicio</a>
          </li>
          <li>
            <a href="../pagina 2/pagina 2.php">Objetivos de Desarrollo Sostenible</a>
          </li>
        </ol> <!--Finaliza las migas de pan-->
      </div>
      <!-- Final el panel principal para la barra de navegación -->

      <!-- JUMBOTRON -->
      <div class="jumbotron text-center">
        <!-- Sección destacada -->

        <h1>Objetivos de Desarrollo Sostenible</h1>
        <p>17 objetivos para transformar el mundo</p>
      </div>
      <!-- FIN DE JUMBOTRon-->
      <!-- DROPDOWN -->
      <div class="dropdown">
        <!-- Menú desplegable -->

        <button
          id="btnODS"
          class="btn btn-primary dropdown-toggle"
          data-toggle="dropdown"
        >
          Seleccionar ODS
          <span class="caret"></span>
        </button>

        <ul class="dropdown-menu">
          <!-- Opciones del dropdown -->

          <li>
            <a href="#" onclick="cambiarODS('ODS 1: Fin de la pobreza')"
              >ODS 1: Fin de la pobreza</a
            >
          </li>
          <li>
            <a href="#" onclick="cambiarODS('ODS 2: Hambre cero')"
              >ODS 2: Hambre cero</a
            >
          </li>
          <li>
            <a href="#" onclick="cambiarODS('ODS 3: Salud y bienestar')"
              >ODS 3: Salud y bienestar</a
            >
          </li>
          <li>
            <a href="#" onclick="cambiarODS('ODS 4: Educación de calidad')"
              >ODS 4: Educación de calidad</a
            >
          </li>
          <li>
            <a href="#" onclick="cambiarODS('ODS 5: Igualdad de género')"
              >ODS 5: Igualdad de género</a
            >
          </li>
          <li>
            <a href="#" onclick="cambiarODS('ODS 6: Agua limpia')"
              >ODS 6: Agua limpia</a
            >
          </li>
          <li>
            <a href="#" onclick="cambiarODS('ODS 7: Energía asequible')"
              >ODS 7: Energía asequible</a
            >
          </li>
          <li>
            <a href="#" onclick="cambiarODS('ODS 8: Trabajo decente')"
              >ODS 8: Trabajo decente</a
            >
          </li>
          <li>
            <a href="#" onclick="cambiarODS('ODS 9: Industria e innovación')"
              >ODS 9: Industria e innovación</a
            >
          </li>
          <li>
            <a
              href="#"
              onclick="cambiarODS('ODS 10: Reducción de desigualdades')"
              >ODS 10: Reducción de desigualdades</a
            >
          </li>
          <li>
            <a href="#" onclick="cambiarODS('ODS 11: Ciudades sostenibles')"
              >ODS 11: Ciudades sostenibles</a
            >
          </li>
          <li>
            <a href="#" onclick="cambiarODS('ODS 12: Producción responsable')"
              >ODS 12: Producción responsable</a
            >
          </li>
          <li>
            <a href="#" onclick="cambiarODS('ODS 13: Acción por el clima')"
              >ODS 13: Acción por el clima</a
            >
          </li>
          <li>
            <a href="#" onclick="cambiarODS('ODS 14: Vida submarina')"
              >ODS 14: Vida submarina</a
            >
          </li>
          <li>
            <a href="#" onclick="cambiarODS('ODS 15: Vida terrestre')"
              >ODS 15: Vida terrestre</a
            >
          </li>
          <li>
            <a href="#" onclick="cambiarODS('ODS 16: Paz y justicia')"
              >ODS 16: Paz y justicia</a
            >
          </li>
          <li>
            <a href="#" onclick="cambiarODS('ODS 17: Alianzas')"
              >ODS 17: Alianzas</a
            >
          </li>
        </ul>
      </div>

      <br />
      <!-- Salto de linea -->

      <!-- INFO DINÁMICA -->
      <div id="infoODS" class="alert alert-info text-center">
        <!-- Contenedor donde se mostrará la información del ODS seleccionado -->
        Seleccione un ODS para ver información
      </div>

      <?php include("grid_imagenes.html"); ?>

      <!-- ACCORDION -->
      <div class="panel-group">
        <!-- Grupo de paneles -->

        <div class="panel panel-default">
          <!-- Panel individual -->

          <div class="panel-heading">
            <a data-toggle="collapse" href="#collapse1">¿Qué buscan los ODS?</a>
          </div>

          <div id="collapse1" class="panel-collapse collapse">
            <!-- Contenido muuestra hacia abajo  -->

            <div class="panel-body">
              Los Objetivos de Desarrollo Sostenible (ODS) son 17 metas globales
              de la ONU para 2030 que buscan erradicar la pobreza, proteger el
              planeta y asegurar la prosperidad para todos. Esta agenda
              universal integra el equilibrio económico, social y ambiental,
              promoviendo la igualdad, la paz, la acción climática y el consumo
              responsable.
            </div>
          </div>
        </div>
      </div>

	  <div class="panelPaginacion"><!-- Inicia panel paginación -->

    <div class="panel-body text-center"><!-- Inicia panel de paginación -->

        <ul class="pagination"><!-- Inicia paginación -->
            <li><a href="../index.php">Atrás</a></li>
            <li><a href="../index.php">1</a></li>
            <li class="active"><a href="../pagina 2/pagina 2.php">2</a></li>
            <li><a href="../pagina 3/pagina 3.php">3</a></li>
            <li><a href="../pagina 3/pagina 3.php">Siguiente</a></li>
        </ul><!-- Termina paginación -->

    </div><!-- Termina panel de paginación -->

    <!-- FOOTER -->
    <footer class="pies">
      <div class="container text-center">
        <!-- Redes sociales -->
        <center>
          <a href=""><img src="../imagenes/face.jpg" width="50px" /></a>
          <a href=""><img src="../imagenes/ig.png" width="50px" /></a>
          <a href=""><img src="../imagenes/redX.png" width="50px" /></a>
        </center>

        <br /><strong>UNIVERSIDAD TECNOLÓGICA DE PANAMÁ</strong><br />
        <br /><strong>CENTRO REGIONAL DE COCLÉ</strong><br />
        <br />FACULTAD DE INGENIERÍA EN SISTEMAS<br />
        Desarrollo de Software VII<br />
        Facilitadora: Ing. María Y. Tejedor<br />
        <br />Asignación desarrollada por: Anthony Perez, Brandon Arcia,
        Alexandra de Gracia, Luis Vasques<br /><br />
      </div>
    </footer>
    <!--Termina FOOTER-->

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
