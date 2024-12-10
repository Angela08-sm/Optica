<?php
SESSION_START();
REQUIRE_ONCE('../Conexion/Conexion.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Citas</title>

    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style-starter.css">
  </head>
  <body>
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-md navbar-light py-3">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="../assets/images/award.png" class="img-fluid" width="52px">
        MIRADA PERFECTA</a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        Menu
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
              <a class="nav-link" href="Inicio.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./Producto/Productos.php">Productos y servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./Cita/Citas.php">Citas</a>
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


<!-- Domain Modal -->
<div class="modal right fade" id="DomainModal" tabindex="-1" role="dialog" aria-labelledby="DomainModalLabel2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
          aria-hidden="true">&times;</span></button>

      <div class="modal-body">
        <div class="modal__content">
          <h2 class="logo"><img src="../assets/images/award.png" class="img-fluid"> Mirada Perfecta</h2>
          <!-- if logo is image enable this   
        <h2 class="logo">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </h2> -->
          <p class="mt-md-3 mt-2"></p>
          <div class="widget-menu-items mt-sm-5 mt-4">
            <h5 class="widget-title">Menú</h5>
            <nav class="navbar p-0">
              <ul class="navbar-nav">
              <li class="nav-item active">
              <a class="nav-link" href="../Inicio.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./Producto/Productos.php">Productos y servicios</a>
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
    <!-- //modal-content -->
  </div>
  <!-- //modal-dialog -->
</div>
<!-- //Domain modal -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-services py-5">
      <div class="container py-lg-5 py-md-3">
        <h2>Citas</h2>
      </div>
    </div>
  </section>
  <section class="contend">

<div class="cajainsert">
<h2 class="tituloinsert">INSERTAR CITA</h2>
<br>
<form action="" method="post">
  <p> ID_PACIENTE: 
      <input type="text" name="TXTID_PACIENTE" required class="into"><p>
 <br> </p>
  <p> ID_ESTADO_CITA: 
      <input type="text" name="TXTID_ESTADO" required class="into"><p>
  <br></p>
  <p> ID_USUARIO: 
      <input type="text" name="TXTID_USUARIO" required class="into"><p>
  <br></p>
  <p> ID_TIPO_CITA: 
      <input type="text" name="TXTID_CITA" required class="into"><p>
  <br></p>
  <p> FECHA: 
      <input type="text" name="TXTFECHA" required class="into"><p>
  <br></p>
  <p> HORA: 
      <input type="text" name="TXTHORA" required class="into"><p>
  <br></p>
  <input type="submit" class="Insertar" value="Insertar">
</form>
</div>


    <?php
     if (!empty($_POST)) {
      if (empty($_POST['TXTID_PACIENTE'])) {
          echo "<script>alert ('Todos los campos son obligatorios.')</script>";
          echo "<script> window.open('Citas.php','_self')</script>";
      } else {
  
          $IDPAC= $_POST['TXTID_PACIENTE']; 
          $IDESTADO= $_POST['TXTID_ESTADO'];
          $IDUSUARIO= $_POST['TXTID_USUARIO'];  
          $IDCITA= $_POST['TXTID_CITA']; 
          $FECHA=$_POST['TXTFECHA'];
          $HORA= $_POST['TXTHORA']; 
  
          $query = mysqli_query($conexion, "SELECT count(ID_PERSONA) AS IDS FROM persona WHERE N_DOCUMENTO='$NUM_DOC'");
          $i = 0;
          while ($fila = mysqli_fetch_assoc($query)) {
              $cuenta = $fila['IDS'];
          }
          echo $cuenta;
          if ($cuenta > 0) {
              echo "<script>alert ('La cedula ya se encuentra registrada')</script>";
              echo "<script> window.open('Cliente.php','_self')</script>";
          } else  {
              $SQL="INSERT INTO persona (ID_ROL, NOMBRE, APELLIDO, DIRECCION, TELEFONO, EMAIL, ID_TIPO_DOCUMENTO, N_DOCUMENTO, CONTRASENA) 
              VALUES (5,'$NOM', '$APE', '$DIR', '$TEL', '$CORREO', '$T_DOC', '$NUM_DOC', '$PSW')";
               $RESULT = MYSQLI_QUERY($conexion,$SQL) OR DIE (MYSQLI_ERROR($conexion));
               echo '<script type="text/javascript"> alert("Registro exitoso"); </script>';
               echo '<script type="text/javascript"> window.open("clieselec.php","_SELF");</script>';
  
          }
      }
  }
?>




<?php include ('../Template/Footer.php');?>