
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>ODS - Acciones</title>
    <!-- Titulo de la página -->

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/estilos.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Inicio del HEADER -->
    <header>
      <h1>Objetivos de Desarrollo Sostenible (ODS)</h1>
      <p><center>Transformando nuestro mundo para un futuro mejor</center></p>
    </header>
    <!--  Fin del HEADER  -->

    <div id="contenedor" class="container">
      <!-- Inicio de contenedor -->
      <div id="panelprincipal" class="panel">

        <!--Inicia Nav de navegacion -->
        <nav class="navbar navbar-default" role="navigation">
          <div class="container">
            <a class="navbar-brand">Taller #2_ODS</a>
            <ul class="nav navbar-nav">
              <li>
                <a href="index.html">Inicio</a>
              </li>
              <li>
                <a href="pagina2.html">Objetivos de Desarrollo Sostenible</a>
              </li>
              <li class="active">
                <a href="pagina3.html">Acciones de las ODS</a>
              </li>
            </ul>
          </div>
        </nav>
        <!--Finaliza nav de navegacion-->

        <!--Inicia las migas de pan-->
        <ol class="breadcrumb">
          <li>
            <a href="index.html">Inicio</a>
          </li>
          <li>
            <a href="pagina3.html">Acciones de la ODS</a>
          </li>
        </ol>
        <!--Finaliza las migas de pan-->
      </div>
      <!--  Inicio del JUMBOTRON  -->
      <div class="jumbotron text-center">
        <h1>Acciones de la ODS</h1>
        <p>Las pequeñas acciones generan grandes cambios en el mundo.</p>
      </div>
      <!--  Fin del JUMBOTRON  -->

      <!--  Inicio del CARRUSEL  -->
      <div
        id="carouselODS"
        class="carousel slide center-block"
        data-ride="carousel"
        style="max-width: 800px"
      >
        <ol class="carousel-indicators">
          <li data-target="#carouselODS" data-slide-to="0" class="active"></li>
          <li data-target="#carouselODS" data-slide-to="1"></li>
          <li data-target="#carouselODS" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="imagenes/ods13.png" />
            <div class="carousel-caption">
              <h3 style="color: orange">Acción climática</h3>
              <p>Reduce tu huella de carbono diariamente.</p>
            </div>
          </div>

          <div class="item">
            <img src="imagenes/ods6.png" />
            <div class="carousel-caption">
              <h3 style="color: blueviolet">Agua limpia</h3>
              <p>Evita el desperdicio de agua.</p>
            </div>
          </div>

          <div class="item">
            <img src="imagenes/ods7.png" />
            <div class="carousel-caption">
              <h3 style="color: green">Energía sostenible</h3>
              <p>Utiliza energías renovables.</p>
            </div>
          </div>
        </div>

        <a class="left carousel-control" href="#carouselODS" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>

        <a class="right carousel-control" href="#carouselODS" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
      <!--  Fin del CARRUSEL  -->

      <!--  Inicio del GRID  -->
      <div class="row">
        <!--  Inicio de la columna izquierda -->
        <div class="col-md-3">
          <h3>Acciones rápidas</h3>

          <div class="thumbnail">
            <img src="imagenes/ods12.png" />
            <div class="caption">
              <p>Reduce el consumo innecesario.</p>
            </div>
          </div>

          <div class="thumbnail">
            <img src="imagenes/ods11.png" />
            <div class="caption">
              <p>Usa transporte público.</p>
            </div>
          </div>
        </div>
        <!--  Fin de la columna izquierda -->

        <!--  Inicio de la columna del centro -->
        <div class="col-md-6">
          <h3>Acciones importantes</h3>

          <!-- Panel 1 -->
          <div class="panel panel-ods">
            <img src="imagenes/ods4.png" class="imgcontenido center-block" />
            <h3>Educación de calidad</h3>
            <p>
              Promover la educación es fundamental para el desarrollo
              sostenible.
            </p>

            <center>
              <button
                class="btn"
                data-toggle="modal"
                data-target="#modal1"
              >
                Ver más
              </button>
            </center>
          </div>

          <!-- Panel 2 -->
          <div class="panel">
            <img src="imagenes/ods15.png" class="imgcontenido center-block" />
            <h3>Vida terrestre</h3>
            <p>Proteger los ecosistemas garantiza recursos para el futuro.</p>
          </div>
        </div>
        <!--  Fin de la columna del centro -->

        <!--  Inicio de la columna derecha -->
        <div class="col-md-3">
          <h3>Impacto social</h3>

          <div class="panel">
            <h3>Trabajo comunitario</h3>
            <p>Participar fortalece el desarrollo local.</p>
          </div>

          <div class="panel">
            <h3>Compromiso global</h3>
            <p>Todos debemos contribuir a los ODS.</p>
          </div>

          <div class="panel">
            <h3>Reducción de pobreza</h3>
            <p>
              Las acciones sostenibles ayudan a mejorar la calidad de vida de
              las personas.
            </p>
          </div>

          <div class="panel">
            <h3>Igualdad social</h3>
            <p>
              Promover la inclusión permite construir una sociedad más justa.
            </p>
          </div>
        </div>
        <!--  Fin de la columna derecha -->
      </div>
      <!--  Fin del GRID  -->

      <!--  Inicio del ACCORDION  -->
      <div class="panel-group">
        <div class="panel">
          <div class="panel-heading">
            <a data-toggle="collapse" href="#info1">¿Por qué actuar ahora?</a>
          </div>

          <div id="info1" class="panel-collapse collapse">
            <div class="panel-body">
              <p>
                Es necesario actuar para evitar problemas ambientales y
                sociales.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!--  Fin del ACCORDION  -->

      <!--  Inicio MODAL  -->
      <div id="modal1" class="modal fade">
        <div class="modal-dialog">
          <div
            class="modal-content"
            style="background-color: #014d44; color: #e0f7f7"
          >
            <div class="modal-header" style="border-color: #00d2c8">
              <button class="close" data-dismiss="modal">&times;</button>
              <h4 style="color: #00fff2">Educación de calidad</h4>
            </div>

            <div class="modal-body">
              <p>La educación es clave para un desarrollo sostenible.</p>
            </div>

            <div class="modal-footer" style="border-color: #00d2c8">
              <button class="btn btn-default" data-dismiss="modal">
                Cerrar
              </button>
            </div>
          </div>
        </div>
      </div>
      <!--  Fin del MODAL  -->

	  <div class="panelPaginacion"><!-- Inicia clase paginación -->

    <div class="panel-body text-center"><!-- Inicia panel de paginación -->

        <ul class="pagination"><!-- Inicia paginación -->
            <li><a href="pagina2.html">Atrás</a></li>
            <li><a href="index.html">1</a></li>
            <li><a href="pagina2.html">2</a></li>
            <li class="active"><a href="pagina3.html">3</a></li>
        </ul><!-- Termina paginación -->

    </div><!-- Termina panel de paginación -->
    </div>
    <!-- Fin contenedor -->

    <!-- FOOTER -->
    <footer class="pies">
      <div class="container text-center">
        <!-- Redes sociales -->
        <center>
          <a href=""><img src="imagenes/face.jpg" width="50px" /></a>
          <a href=""><img src="imagenes/ig.png" width="50px" /></a>
          <a href=""><img src="imagenes/redX.png" width="50px" /></a>
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
    <!--Termina footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
