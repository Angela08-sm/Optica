<?php
SESSION_START();
REQUIRE_ONCE('./Conexion/Conexion.php');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>ÓPTICA MIRADA PERFECTA</title>

  <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <section class="w3l-bootstrap-header">
    <nav class="navbar navbar-expand-md navbar-light py-3">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="assets/images/award.png" class="img-fluid" width="52px">
          Mirada perfecta</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          Menu
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./Agenda/Agenda.php">Agenda</a>
          </li>
            <a class="nav-link" href="./Cita/Citas.php">Citas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Consulta/Consulta.php">Consulta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Factura/Factura.php">Factura</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Historial_clinico/Historial_clinicio.php">Historial clinico </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Nomina/Nomina.php">Nomina</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Nosotros.php">Pacientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Producto/Productos.php">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Tratamiento/Tratamiento.php">Tratamiento</a>
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
              <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./Agenda/Agenda.php">Agenda</a>
          </li>
            <a class="nav-link" href="./Cita/Citas.php">Citas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Consulta/Consulta.php">Consulta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Factura/Factura.php">Factura</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Historial_clinico/Historial_clinicio.php">Historial clinico </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Nomina/Nomina.php">Nomina</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Nosotros.php">Pacientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Producto/Productos.php">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Tratamiento/Tratamiento.php">Tratamiento</a>
          </li>
          </ul>
              </nav>
            </div>
            <div class="widget-social-icons mt-sm-5 mt-4">
              <h5 class="widget-title">Contáctanos</h5>
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
  <section class="w3l-main-slider" id="home">
    <div class="companies20-content">

      <div class="owl-one owl-carousel owl-theme">
        <div class="item">
          <li>
            <div class="slider-info banner-view bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    
                    <h6>¡Bienvenido! en Mirada perfecta nos enfocamos en proporcionarle la mejor experiencia de compra de gafas, lentes de contacto y atención óptica.</h6>
                    <a class="btn btn-style btn-style-outline mt-sm-5 mt-4" href="#loginModal" data-toggle="modal">Iniciar sesión</a>

                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>

        <div class="item">
          <li>
            <div class="slider-info  banner-view banner-top1 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <h6>¡Oferta del mes! 20% de descuento en todas las gafas y lentes de contacto.</h6>
                   
                    <a class="btn btn-style btn-style-outline mt-sm-5 mt-4" href="#loginModal" data-toggle="modal">Iniciar sesión</a>

                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info banner-view banner-top2 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <h6>¡Aprovecha las oportunidades! Revisión optica gratuita por la compra de gafas.</h6>
                    <a class="btn btn-style btn-style-outline mt-sm-5 mt-4" href="#loginModal" data-toggle="modal">Iniciar sesión</a>

                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info banner-view banner-top3 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <h6>¡Tu satisfacción es nuestra prioridad! Consulta los servicios que tenemos disponibles para ti.</h6>
                    <a class="btn btn-style btn-style-outline mt-sm-5 mt-4" href="#loginModal" data-toggle="modal">Iniciar sesión</a>

                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
      </div>
    </div>
    </div>
  </section>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="../Administrador/InicioAdmin.php" method="POST">
          <div class="form-group">
            <label for="username">Usuario</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block" a href="../Administrador/InicioAdmin.php">Ingresar </button>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <?php
        IF(ISSET($_SESSION['ERROR'])){
            $ERROR = $_SESSION["ERROR"];
            echo "<span> $ERROR </SPAN>";
        }
        ?>
        </form>
      </div>
    </div>
  </div>
</div>

  <section class="w3l-medpill-footer ">
    <footer class="footer-28">
      <div class="footer-bg-layer">
        <div class="container py-lg-3">
          <div class="row footer-top-28">
            <div class="col-lg-4 col-md-6 col-sm-7 footer-list-28 mt-sm-5 mt-4">
              <h6 class="footer-title-28">Información de contacto</h6>
              <ul class="address">
                <li>
                  <p> Calle 9a # 21 - 16  <br>Garagoa-Boyacá</p>
                </li>
                <li class="mt-4">
                  <p><span class="fa fa-phone"></span> <a href="tel:+404-11-22-89">313 213 25 64</a></p>
                </li>
                <li>
                  <p><span class="fa fa-envelope"></span> <a
                      href="mailto:medpillhospital@mail.com">miradaperfec@gmail.com</a></p>
                </li>
              </ul>
            </div>
           
            <div class="col-lg-2 col-md-6 col-sm-4 footer-list-28 mt-sm-5 mt-4">
              <h6 class="footer-title-28">Nuestros servicios</h6>
              <ul>
                <li><a href="#url">Oftalmología</a></li>
                <li><a href="#url">Optometría</a></li>
                <li><a href="#url"> Gafas</a></li>
                <li><a href="#url">Lentes de contacto</a></li>
              
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8 footer-list-28 mt-sm-5 mt-4">
              <h6 class="footer-title-28">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Horario</h6>
              <ul class="timing mb-lg-4">
                <li><a href="#URL"><span class="fa fa-clock-o"></span>Lunes a viernes : <span>08:00 - 12:00 <br>&nbsp &nbsp 2:00-7:00</span></a></li>
                <li><a href="#URL"><span class="fa fa-clock-o"></span>Sábados : <span>09:00 - 1:00</span></a></li>
                <li><a href="#URL"><span class="fa fa-clock-o"></span>Domingos : <span>10:00 - 2:00</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="midd-footer-28 align-center py-lg-4 py-3 mt-md-5 mt-3">
        <div class="container">
          <p class="copy-footer-28 text-center"> &copy; 2024 Mirada Perfecta. All Rights Reserved. Design by: Angela Martinez<a
              href="https://w3layouts.com/"></a></p>
        </div>
      </div>
      </div>
    </footer>

    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
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

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <script src="assets/js/green-audio-player.js"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        new GreenAudioPlayer('.ready-player-1', { stopOthersOnPlay: true });
      });
    </script>

    <script>
      $('#notify').change(function () {
        if ($('#notify').is("Active")) {
          $('body').css('overflow', 'hidden');
        } else {
          $('body').css('overflow', 'auto');
        }
      });
    </script>

    <script src="assets/js/owl.carousel.js"></script>
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

    <script>
      $(function () {
        $('.navbar-toggler').click(function () {
          $('body').toggleClass('noscroll');
        })
      });
    </script>

    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>