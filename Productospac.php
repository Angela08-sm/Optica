<?php
SESSION_START();
REQUIRE_ONCE('../Conexion/Conexion.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Productos</title>

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
            <a class="nav-link" href="./Inicio.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Nosotros.php">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Servicios.php">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Contáctanos.php">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Citas.php">Citas</a>
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
            <h5 class="widget-title">Productos</h5>
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
        <h2>Productos</h2>
        <p>¡Conoce todos los productos<br> que tenemos disponibles para ti!</p>
      </div>
    </div>
  </section>

 
<div class="imagess">
  <div class="div1">
    <h3>Gafas transition</h3>
    <img src="../assets/images/transition.jpg" width="100px" height="100px">
    <h4>$650.000</h4>
  </div>
  <div class="div1">
    <h3>Gafas de sol polarizadas</h3>
    <img src="../assets/images/polarizadas.jpg" width="100px" height="100px">
    <h4>$650.000</h4>
  </div>
  <div class="div1">
    <h3>Lentes de contacto</h3>
    <img src="../assets/images/contacto.jpg" width="100px" height="100px">
    <h4>$500.000</h4>
  </div>
  <div class="div1">
    <h3>Cirugía</h3>
    <img src="../assets/images/cirugia.jpg" width="100px" height="100px">
    <h4>$2.500.000</h4>
  </div>
  <div class="div1">
    <h3>Lentes antireflejo</h3>
    <img src="../assets/images/antireflejo.jpg" width="100px" height="100px">
    <h4>$670.000</h4>
  </div>
  <div class="div1">
    <h3>Liquido limpiador</h3>
    <img src="../assets/images/liquido.jfif" width="100px" height="100px">
    <h4>$50.000</h4>
  </div>
</div>

<?php include ('./Template/Footer.php');?>

  </body>
</html>