<?php
session_start();  
require_once('../Conexion/Conexion.php');
?>
<!doctype html>
<html lang="es">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style-starter.css">
    <title>Actualizar cita</title>
  </head>
  <body>
  <?php include ('../Template/Header.php');?>
        <?php
    $IDCI = '';
    $IDPACI = '';
    $IDESCITA = '';
    $IDUSU = '';
    $IDTICI = '';
    $FEC =  '';
    $HOR = '';



    if (isset($_GET['ACTUALIZAR'])) {
        $EDITAR_ID = $_GET['ACTUALIZAR'];
        $CONSULTA = "SELECT * FROM cita WHERE Id_cita='$EDITAR_ID'";
        $EJECUTAR = mysqli_query($conexion, $CONSULTA) or die(mysqli_error($conexion));
        $FILA = mysqli_fetch_assoc($EJECUTAR);

        if ($FILA) {
            $IDCI = $FILA['Id_cita'];
            $IDPACI = $FILA['Id_paciente'];
            $IDESCITA = $FILA['Id_estado_cita'];
            $IDUSU = $FILA['Id_usuario'];
            $IDTICI = $FILA['Id_tipo_cita'];
            $FEC = $FILA['Fecha'];
            $HOR = $FILA['Hora'];
        }
    }
    ?>

    <form name="UPDATE" method="POST" action="" enctype="multipart/form-data" class="actualiza">
    <br><br>    
    <h2>ACTUALIZAR CITA</h2>
        <br>
        <p>ID CITA: 
            <input type="text" name="Id_producto" value="<?php echo($IDCI); ?>" readonly>
        </p>
        <p>ID PACIENTE: 
            <input type="text" name="Nombre_producto" value="<?php echo ($IDPACI); ?>">
        </p>
        <p>ID ESTADO CITA: 
            <input type="text" name="Precio" value="<?php echo ($IDESCITA); ?>">
        </p>
        <p>ID USUARIO: 
            <input type="text" name="Precio" value="<?php echo ($IDUSU); ?>">
        </p>
        <p>ID TIPO CITA: 
            <input type="text" name="Precio" value="<?php echo ($IDTICI); ?>">
        </p>
        <p>FECHA: 
            <input type="text" name="Precio" value="<?php echo ($FEC); ?>">
        </p>
        <p>HORA: 
            <input type="text" name="Precio" value="<?php echo ($HOR); ?>">
        </p>
        <p>
            <input type="submit" name="ACTUALIZAR" value="ACTUALIZAR DATOS" class="btonactualizar">
        </p>
        <br>
    </form>

    <?php
    if (isset($_POST['ACTUALIZAR'])) {
        $IDCI = $_POST['Id_cita'];
        $IDPACI = mysqli_real_escape_string($conexion, $_POST['Id_paciente']);
        $IDESCITA = mysqli_real_escape_string($conexion, $_POST['Id_estado_cita']);
        $FECHA = mysqli_real_escape_string($conexion, $_POST['Fecha']);
        $HINICIO = mysqli_real_escape_string($conexion, $_POST['Hora_inicio']);
        $HFIN = mysqli_real_escape_string($conexion, $_POST['Hora_fin']);
        $ACTUALIZAR = "UPDATE agenda SET Id_usuario='$IDUS', Id_cita='$IDCITA', Fecha='$FECHA', Hora_inicio ='$$HINICIO', Hora_fin ='$$HFIN' WHERE Id_agenda='$IDAGENDA'";

        $EJECUTAR = mysqli_query($conexion, $ACTUALIZAR) or die(mysqli_error($conexion));

        echo '<script type="text/javascript"> alert("Agenda Actualizado"); </script>';
        echo '<script type="text/javascript"> window.open("Citas.php", "_SELF"); </script>';
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
