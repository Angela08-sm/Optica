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

  <section class="contend">

  <div class="cajainsert">
  <h2 class="tituloinsert">INSERTAR PRODUCTO</h2>
  <br>
  <form action="" method="post">
    <p> NOMBRE: 
        <input type="text" name="TXTNOMBRE" required><p>
   <br> </p>
    <p> PRECIO: 
        <input type="text" name="TXTPRECIO" required><p>
    <br></p>
    <input type="submit" class="Insertar" value="Insertar">
  </form>
  </div>

<div class="cajatabla">
 
  <form method="POST" action="Select.php" enctype="multipart/form-data">
    <table class="table">
      <thead>
        <tr>
          <th>ID_PRODUCTO</th>
          <th>NOMBRE</th>
          <th>PRECIO</th>
          <th>ACTUALIZAR</th>
          <th>ELIMINAR</th>
          <th>FACTURAR</th>
        </tr>
      </thead>
      <?php
        if (!empty($_POST)) {
          if (empty($_POST['TXTNOMBRE'])) {
              echo "<script>alert ('Todos los campos son obligatorios.')</script>";
              echo "<script> window.open('Productos.php','_self')</script>";
          } else {
        $NOM = $_POST['TXTNOMBRE'];
        $PRE = $_POST['TXTPRECIO'];

        if (!is_numeric($PRE)) {
            echo "<script>alert('El precio debe ser un valor numérico.')</script>";
        } else {
            $query = "SELECT count(Id_producto) AS IDS FROM producto WHERE Nombre_producto = ?";
            $stmt = mysqli_prepare($conexion, $query);
            mysqli_stmt_bind_param($stmt, 's', $NOM); 
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $fila = mysqli_fetch_assoc($result);
            $cuenta = $fila['IDS'];

            if ($cuenta > 0) {
                echo "<script>alert('El producto ya se encuentra registrado.')</script>";
                echo "<script>window.location.href='Productos.php';</script>";
            } else {
                $query = "INSERT INTO producto (Nombre_producto, Precio) VALUES (?, ?)";
                $stmt = mysqli_prepare($conexion, $query);
                mysqli_stmt_bind_param($stmt, 'sd', $NOM, $PRE); 
                $result = mysqli_stmt_execute($stmt);

                if ($result) {
                    echo "<script>alert('Registro exitoso');</script>";
                    echo "<script>window.location.href='Productos.php';</script>";
                } else {
                    echo "<script>alert('Error al registrar el producto.')</script>";
                }}}}}
?>


        <?php 
        //-- Paginador
        $SQL_REGISTROS = mysqli_query($conexion, "SELECT COUNT(*) AS TOTAL FROM producto");
        $RESULT_REGISTROS = mysqli_fetch_array($SQL_REGISTROS);
        $TOTAL = $RESULT_REGISTROS['TOTAL'];
        $POR_PAGINA = 4;

        if (empty($_GET['PAGINA'])) {
          $PAGINA = 1;
        } else {
          $PAGINA = $_GET['PAGINA'];
        }

        $DESDE = ($PAGINA - 1) * $POR_PAGINA;
        $TOTAL_PAGINAS = ceil($TOTAL / $POR_PAGINA);
        $CONSULTA = "SELECT * FROM producto LIMIT $DESDE, $POR_PAGINA";
        $EJECUTAR = mysqli_query($conexion, $CONSULTA);

        while ($FILA = mysqli_fetch_assoc($EJECUTAR)) {
          $IDPRO = $FILA['Id_producto'];
          $NOM = $FILA['Nombre_producto'];
          $PRE = $FILA['Precio'];
        ?>
          <tr class="tablaa">
            <td><?php echo $IDPRO; ?></td>
            <td><?php echo $NOM; ?></td>
            <td><?php echo $PRE; ?></td>
            <td><a href="Update.php?ACTUALIZAR=<?php echo $IDPRO; ?>"> <img style="width: 50px;height: 50px;" src="../assets/images/actualizar-flecha.png"> </a></td>
            <td><a href="Productos.php?ELIMINAR=<?php echo $IDPRO; ?>"> <img style="width: 50px;height: 50px;" src="../assets/images/bolsa-de-la-compra.png"> </a></td>
            <td><a href="../FACTURACION/FACTURA.PHP?FACTURAR=<?php echo $IDPRO; ?>"> <img style="width: 50px;height: 50px;" src="../assets/images/factura.png"></a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </form>
  </div>
  <br>
</section>
  <?php
  if (isset($_GET['ACTUALIZAR'])) {
    include("Update.php");
  }

  if (isset($_GET['ELIMINAR'])) {
    $BORRAR_ID = $_GET['ELIMINAR'];
    $ELIMINAR = "DELETE FROM Producto WHERE Id_producto='$BORRAR_ID'";
    $EJECUTAR = mysqli_query($conexion, $ELIMINAR);

    if ($EJECUTAR) {
      echo '<script type="text/javascript"> alert("Producto eliminado"); </script>';
      echo '<script type="text/javascript"> window.open("Productos.php","_SELF");</script>';
    }
  }
  ?>
<?php
if (isset($_POST['INSERTAR'])) {
    if (empty($_POST['TXTNOMBRE']) || empty($_POST['TXTPRECIO'])) {
        echo "<script>alert('Todos los campos son obligatorios.')</script>";
    } else {
        $NOM = $_POST['TXTNOMBRE'];
        $PRE = $_POST['TXTPRECIO'];

        if (!is_numeric($PRE)) {
            echo "<script>alert('El precio debe ser un valor numérico.')</script>";
        } else {
            $query = "SELECT count(Id_producto) AS IDS FROM producto WHERE Nombre_producto = ?";
            $stmt = mysqli_prepare($conexion, $query);
            mysqli_stmt_bind_param($stmt, 's', $NOM); 
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $fila = mysqli_fetch_assoc($result);
            $cuenta = $fila['IDS'];

            if ($cuenta > 0) {
                echo "<script>alert('El producto ya se encuentra registrado.')</script>";
                echo "<script>window.location.href='Productos.php';</script>";
            } else {
                $query = "INSERT INTO producto (Nombre_producto, Precio) VALUES (?, ?)";
                $stmt = mysqli_prepare($conexion, $query);
                mysqli_stmt_bind_param($stmt, 'sd', $NOM, $PRE); 
                $result = mysqli_stmt_execute($stmt);

                if ($result) {
                    echo "<script>alert('Registro exitoso');</script>";
                    echo "<script>window.location.href='Productos.php';</script>";
                } else {
                    echo "<script>alert('Error al registrar el producto.')</script>";
                }
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