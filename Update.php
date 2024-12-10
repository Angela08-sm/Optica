<?php
session_start();  
require_once('../Conexion/Conexion.php');
?>
<!doctype html>
<html lang="es">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style-starter.css">
    <title>UPDATE PRODUCTO</title>
  </head>
  <body>
  <?php include ('../Template/Header.php');?>
        <?php
    $IDPRO = '';
    $NOM = '';
    $PRE = '';

    if (isset($_GET['ACTUALIZAR'])) {
        $EDITAR_ID = $_GET['ACTUALIZAR'];
        $CONSULTA = "SELECT * FROM producto WHERE Id_producto='$EDITAR_ID'";
        $EJECUTAR = mysqli_query($conexion, $CONSULTA) or die(mysqli_error($conexion));
        $FILA = mysqli_fetch_assoc($EJECUTAR);

        if ($FILA) {
            $IDPRO = $FILA['Id_producto'];
            $NOM = $FILA['Nombre_producto'];
            $PRE = $FILA['Precio'];
        }
    }
    ?>

    <form name="UPDATE" method="POST" action="" enctype="multipart/form-data" class="actualiza">
    <br><br>    
    <h2>ACTUALIZAR PRODUCTO</h2>
        <br>
        <p>ID PRODUCTO: 
            <input type="text" name="Id_producto" value="<?php echo($IDPRO); ?>" readonly>
        </p>
        <p>NOMBRE: 
            <input type="text" name="Nombre_producto" value="<?php echo ($NOM); ?>">
        </p>
        <p>PRECIO: 
            <input type="text" name="Precio" value="<?php echo ($PRE); ?>">
        </p>
        <p>
            <input type="submit" name="ACTUALIZAR" value="ACTUALIZAR DATOS" class="btonactualizar">
        </p>
        <br>
    </form>

    <?php
    if (isset($_POST['ACTUALIZAR'])) {
        $IDPRO = $_POST['Id_producto'];
        $NOM = mysqli_real_escape_string($conexion, $_POST['Nombre_producto']);
        $PRE = mysqli_real_escape_string($conexion, $_POST['Precio']);

        $ACTUALIZAR = "UPDATE producto SET Nombre_producto='$NOM', Precio='$PRE' WHERE Id_producto='$IDPRO'";

        $EJECUTAR = mysqli_query($conexion, $ACTUALIZAR) or die(mysqli_error($conexion));

        echo '<script type="text/javascript"> alert("Registro Actualizado"); </script>';
        echo '<script type="text/javascript"> window.open("Productos.php", "_SELF"); </script>';
    }
    ?>
    <?php include('../Template/Footer.php'); ?>

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
