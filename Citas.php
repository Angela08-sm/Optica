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
  <?php include ('../Template/Header.php'); ?>
    

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

  <br><br><br>
<a class="btooninsertar" href="../Cita/InsetarCita.php"> + AGREGAR CITA NUEVA</A>
<br><br><br>
<div class="cajatabla">
<form method="POST" action="Select.php" enctype="multipart/form-data">
  <table class="table">
    <thead>
      <tr>
        <th>ID_CITA</th>
        <th>ID_PACIENTE</th>
        <th>ID_ESTADO_CITA</th>
        <th>ID_USUARIO</th>
        <th>ID_TIPO_CITA</th>
        <th>FECHA</th>
        <th>HORA</th>
        <th>ACTUALIZAR</th>
        <th>ELIMINAR</th>
        <th>FACTURAR</th>
      </tr>
    </thead>
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


      <?php 
      //-- Paginador
      $SQL_REGISTROS = mysqli_query($conexion, "SELECT COUNT(*) AS TOTAL FROM cita");
      $RESULT_REGISTROS = mysqli_fetch_array($SQL_REGISTROS);
      $TOTAL = $RESULT_REGISTROS['TOTAL'];
      $POR_PAGINA = 5;

      if (empty($_GET['PAGINA'])) {
        $PAGINA = 1;
      } else {
        $PAGINA = $_GET['PAGINA'];
      }

      $DESDE = ($PAGINA - 1) * $POR_PAGINA;
      $TOTAL_PAGINAS = ceil($TOTAL / $POR_PAGINA);
      $CONSULTA = "SELECT * FROM cita LIMIT $DESDE, $POR_PAGINA";
      $EJECUTAR = mysqli_query($conexion, $CONSULTA);

      while ($FILA = mysqli_fetch_assoc($EJECUTAR)) {
        $IDCITA = $FILA['Id_cita'];
        $IDPAC = $FILA['Id_paciente'];
        $IDESTADO = $FILA['Id_estado_cita'];
        $IDUSUARIO = $FILA['Id_usuario'];
        $IDTIPOC = $FILA['Id_tipo_cita'];
        $FECHA = $FILA['Fecha'];
        $HORA =$FILA['Hora']
      ?>
        <tr class="tablaa">
          <td><?php echo $IDCITA; ?></td>
          <td><?php echo $IDPAC; ?></td>
          <td><?php echo $IDESTADO; ?></td>
          <td><?php echo $IDUSUARIO; ?></td>
          <td><?php echo $IDTIPOC; ?></td>
          <td><?php echo $FECHA; ?></td>
          <td><?php echo $HORA;?></td>
          <td><a href="ActualizarCita.php?ACTUALIZAR=<?php echo $IDCITA; ?>"> <img style="width: 50px;height: 50px;" src="../assets/images/actualizar-flecha.png"> </a></td>
          <td><a href="Productos.php?ELIMINAR=<?php echo $IDCITA; ?>"> <img style="width: 50px;height: 50px;" src="../assets/images/bolsa-de-la-compra.png"> </a></td>
          <td><a href="../FACTURACION/FACTURA.PHP?FACTURAR=<?php echo $IDCITA ; ?>"> <img style="width: 50px;height: 50px;" src="../assets/images/factura.png"></a></td>
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
  include("ActualizarCita.php");
}

if (isset($_GET['ELIMINAR'])) {
  $BORRAR_ID = $_GET['ELIMINAR'];
  $ELIMINAR = "DELETE FROM agenda WHERE Id_agenda='$BORRAR_ID'";
  $EJECUTAR = mysqli_query($conexion, $ELIMINAR);

  if ($EJECUTAR) {
    echo '<script type="text/javascript"> alert("Producto eliminado"); </script>';
    echo '<script type="text/javascript"> window.open("ActualizarCita.php","_SELF");</script>';
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