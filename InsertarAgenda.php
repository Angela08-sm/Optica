<?php
SESSION_START();
REQUIRE_ONCE('../Conexion/Conexion.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Agenda</title>

    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/style-starter.css">
  </head>
  <body>
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-md navbar-light py-3">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="../assets/images/award.png" class="img-fluid" width="52px">
        MIRADA PERFECTA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        Menu
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../Inicio.php">Inicio</a>
          <li class="nav-item">
            <a class="nav-link" href="../Cita/Citas.php">Citas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Consulta/Consulta.php">Consulta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Factura/Factura.php">Factura</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Historial_clinico/Historial_clinicio.php">Historial clinico </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Nomina/Nomina.php">Nomina</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Nosotros.php">Pacientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Tratamiento/Tratamiento.php">Tratamiento</a>
          </li>
        </ul>
      </div>
      <a href="#domain" class="domain ml-3" data-toggle="modal" data-target="#DomainModal">
        <div class="hamburger1">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </a>
    </div>
  </nav>
</section>
<div class="modal right fade" id="DomainModal" tabindex="-1" role="dialog" aria-labelledby="DomainModalLabel2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
          aria-hidden="true">&times;</span></button>

      <div class="modal-body">
        <div class="modal__content">
          <h2 class="logo"><img src="assets/images/award.png" class="img-fluid"> Mirada Perfecta</h2>
          <p class="mt-md-3 mt-2"></p>
          <div class="widget-menu-items mt-sm-5 mt-4">
            <h5 class="widget-title">Menú</h5>
            <nav class="navbar p-0">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="./Inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Servicios.php">Servicios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Productos.php">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Citas.php">Citas</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="widget-social-icons mt-sm-5 mt-4">
            <h5 class="widget-title">Agenda</h5>
            <ul class="icon-rounded address">
              <li>
                <p> Calle 9a # 21 - 16  <br>Garagoa-Boyacá</p>
              </li>
              <li class="mt-3">
                <p><span class="fa fa-phone"></span> <a href="tel:+404-11-22-89">313 213 25 64</a></p>
              </li>
              <li class="mt-2">
                <p><span class="fa fa-envelope"></span> <a
                    href="mailto:medpillhospital@mail.com">miradaperfec@gmail.com</a></p>
              </li>
              <li class="top_li1 mt-2">
                <li><a href="#URL"><span class="fa fa-clock-o"></span> Lunes a viernes : <span> 08:00 - 12:00 <br>&nbsp &nbsp 2:00-7:00</span></a></li><br>
                <li><a href="#URL"><span class="fa fa-clock-o"></span> Sábados : <span> 09:00 - 1:00 </span></a></li><br>
                <li><a href="#URL"><span class="fa fa-clock-o"></span> Domingos : <span> 10:00 - 2:00 </span></a></li>
              </li>
            </ul>
          </div>
          <div class="widget-social-icons mt-sm-5 mt-4">
            <h5 class="widget-title">Síguenos</h5>
            <ul class="icon-rounded">
              <li><a class="social-link twitter" href="#url" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a class="social-link linkedin" href="#url" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="social-link tumblr" href="#url" target="_blank"><i class="fa fa-tumblr"></i></a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-services py-5">
      <div class="container py-lg-5 py-md-3">
        <h2>Agenda</h2>
        <p></p>
      </div>
    </div>
  </section>

  <section class="contend">

<div class="cajainsert">
  <h2 class="tituloinsert">INSERTAR AGENDA</h2>
  <br>
  <form action="" method="post">
    <p> ID_USUARIO: 
      <input type="text" name="TXTIDUSUARIO" required></p>
    <br>
    <p> ID_CITA: 
      <input type="text" name="TXTIDCITA" required></p>
    <br>
    <p> FECHA: 
      <input type="date" name="TXTFECHA" required>&nbsp;&nbsp;&nbsp;&nbsp;
    HORA_INICIO: 
      <input type="time" name="TXTHORA_INICIO" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    HORA_FIN: 
      <input type="time" name="TXTHORA_FIN" required></p>
    <br>
    <input type="submit" class="Insertar" value="Insertar">
  </form>
</div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST['TXTIDUSUARIO']) || empty($_POST['TXTIDCITA']) || empty($_POST['TXTFECHA']) || empty($_POST['TXTHORA_INICIO']) || empty($_POST['TXTHORA_FIN'])) {
            echo "<script>alert('Todos los campos son obligatorios.')</script>";
        } else {
            $IDUS = $_POST['TXTIDUSUARIO'];
            $IDCITA = $_POST['TXTIDCITA']; 
            $FECHA = $_POST['TXTFECHA'];  
            $HINICIO = $_POST['TXTHORA_INICIO']; 
            $HFIN = $_POST['TXTHORA_FIN'];

   

            // Comprobar si el usuario ya tiene una agenda
            $query = mysqli_query($conexion, "SELECT COUNT(Id_agenda) AS IDS FROM agenda WHERE Id_usuario='$IDUS'");
            $fila = mysqli_fetch_assoc($query);
            $cuenta = $fila['IDS'] ?? 0;

            if ($cuenta > 0) {
                echo "<script>alert('El usuario ya tiene una agenda registrada.')</script>";
            } else {
                $SQL = "INSERT INTO agenda (Id_usuario, Id_cita, Fecha, Hora_inicio, Hora_fin) 
                        VALUES ('$IDUS', '$IDCITA', '$FECHA', '$HINICIO', '$HFIN')";
                $RESULT = mysqli_query($conexion, $SQL);

                if ($RESULT) {
                    echo "<script>alert('Agenda insertada correctamente.')</script>";
                    echo '<script type="text/javascript"> window.open("Agenda.php","_SELF");</script>';
                } else {
                    echo "<script>alert('Error al insertar la agenda: " . mysqli_error($conexion) . "')</script>";
                }
            }
        }
    }
?>

<?php include ('../Template/Footer.php');?>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    
    <script src="assets/js/green-audio-player.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new GreenAudioPlayer('.ready-player-1', { stopOthersOnPlay: true });
        });
    </script>

    <!-- video popup -->
    <script>
      $('#notify').change(function () {
        if ($('#notify').is("Active")) {
          $('body').css('overflow', 'hidden');
        } else {
          $('body').css('overflow', 'auto');
        }
      });
    </script>
    <!-- //video popup -->

    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
      $(document).ready(function () {
        $('.owl-one').owlCarousel({
          loop: true,
          margin: 0,
          nav: false,
          responsiveClass: true,
          autoplay: false,
          autoplayTimeout: 5000,
          autoplaySpeed: 1000,
          autoplayHoverPause: false,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            480: {
              items: 1,
              nav: false
            },
            667: {
              items: 1,
              nav: true
            },
            1000: {
              items: 1,
              nav: true
            }
          }
        })
      })
    </script>
    <!-- //script -->
    
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

    <script src="assets/js/bootstrap.min.js"></script>

    </body>

    </html>