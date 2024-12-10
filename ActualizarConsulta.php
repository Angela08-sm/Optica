<?php
session_start();  
require_once('../Conexion/Conexion.php');
?>
<!doctype html>
<html lang="es">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style-starter.css">
    <title>Actualizar consulta</title>
  </head>
  <body>
  <?php include ('../Template/Header.php');?>
        <?php
    
    $IDCONS = '';
    $IDUS = '';
    $IDTRAT = '';
    $IDPROD = '';
    $FECHA = '';
    $HORA = '';
    $DIAGN = '';
    $RECOM = '';


    if (isset($_GET['ACTUALIZAR'])) {
        $EDITAR_ID = $_GET['ACTUALIZAR'];
        $CONSULTA = "SELECT * FROM consulta WHERE Id_consulta='$EDITAR_ID'";
        $EJECUTAR = mysqli_query($conexion, $CONSULTA) or die(mysqli_error($conexion));
        $FILA = mysqli_fetch_assoc($EJECUTAR);

        if ($FILA) {
            $IDCONS = $FILA['Id_consulta'];
            $IDUS = $FILA['Id_usuario'];
            $IDTRAT = $FILA['Id_tratamiento'];
            $IDPROD = $FILA['Id_producto'];
            $FECHA = $FILA['Fecha'];
            $HORA = $FILA['Hora'];
            $DIAGN = $FILA['Diagnostico'];
            $RECOM = $FILA['Recomendaciones'];
        }
    }
    ?>

    <form name="UPDATE" method="POST" action="" enctype="multipart/form-data" class="actualiza">
    <br><br>    
    <h2>ACTUALIZAR CONSULTA</h2>
        <br>
        <p>ID CONSULTA: 
            <input type="text" name="Id_consulta" value="<?php echo($IDCONS); ?>" readonly>
        </p>
        <p>ID USUARIO: 
            <input type="text" name="Id_usuario" value="<?php echo ($IDUS); ?>">
        </p>
        <p>ID TRATAMIENTO: 
            <input type="text" name="Id_tratamiento" value="<?php echo ($IDTRAT); ?>">
        </p>
        <p>ID PRODUCTO: 
            <input type="text" name="Id_producto" value="<?php echo ($IDPROD); ?>">
        </p>
        <p>FECHA: 
            <input type="text" name="Fecha" value="<?php echo ($FECHA); ?>">
        </p>
        <p>HORA: 
            <input type="text" name="Hora" value="<?php echo ($HORA); ?>">
        </p>
        <p>DIAGNOSTICO: 
            <input type="text" name="Diagnostico" value="<?php echo ($DIAGN); ?>">
        </p>
        <p>RECOMENDACIONES: 
            <input type="text" name="Recomendaciones" value="<?php echo ($RECOM); ?>">
        </p>
        <p>
            <input type="submit" name="ACTUALIZAR" value="ACTUALIZAR DATOS" class="btonactualizar">
        </p>
        <br>
    </form>

    <?php
    if (isset($_POST['ACTUALIZAR'])) {
        $IDCONS = $_POST['Id_consulta'];
        $IDUS = mysqli_real_escape_string($conexion, $_POST['Id_usuario']);
        $IDTRAT = mysqli_real_escape_string($conexion, $_POST['Id_tratamiento']);
        $FECHA = mysqli_real_escape_string($conexion, $_POST['Fecha']);
        $HORA = mysqli_real_escape_string($conexion, $_POST['Hora']);
        $DIAGN = mysqli_real_escape_string($conexion, $_POST['Diagnostico']);
        $RECOM = mysqli_real_escape_string($conexion, $_POST['Recomendaciones']);
        $ACTUALIZAR = "UPDATE consulta SET Id_usuario='$IDUS', Id_tratamiento='$IDTRAT', Fecha='$FECHA', Hora ='$HORA', Diagnostico ='$DIAGN', Recomendaciones ='$RECOM' WHERE Id_consulta='$IDCONS'";

        $EJECUTAR = mysqli_query($conexion, $ACTUALIZAR) or die(mysqli_error($conexion));

        echo '<script type="text/javascript"> alert("Consulta actualizada"); </script>';
        echo '<script type="text/javascript"> window.open("Consulta.php", "_SELF"); </script>';
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
