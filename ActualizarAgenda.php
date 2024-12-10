<?php
session_start();  
require_once('../Conexion/Conexion.php');
?>
<!doctype html>
<html lang="es">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style-starter.css">
    <title>Actualizar agenda</title>
  </head>
  <body>

    <?php include ('../Template/Header.php'); ?>
    
    <?php
    $IDAGENDA = '';
    $IDUS = '';
    $IDCITA = '';
    $FECHA = '';
    $HINICIO = '';
    $HFIN = '';

    if (isset($_GET['ACTUALIZAR']) && is_numeric($_GET['ACTUALIZAR'])) {
        $EDITAR_ID = $_GET['ACTUALIZAR'];
        $CONSULTA = "SELECT * FROM agenda WHERE Id_agenda='$EDITAR_ID'";
        $EJECUTAR = mysqli_query($conexion, $CONSULTA) or die(mysqli_error($conexion));
        $FILA = mysqli_fetch_assoc($EJECUTAR);

        if ($FILA) {
            $IDAGENDA = $FILA['Id_agenda'];
            $IDUS = $FILA['Id_usuario'];
            $IDCITA = $FILA['Id_cita'];
            $FECHA = $FILA['Fecha'];
            $HINICIO = $FILA['Hora_inicio'];
            $HFIN = $FILA['Hora_fin'];
        }
    }
    ?>

    <form name="UPDATE" method="POST" action="" enctype="multipart/form-data" class="actualiza">
    <br><br>    
    <h2>ACTUALIZAR AGENDA</h2>
        <br>
        <p>ID AGENDA: 
            <input type="text" name="Id_agenda" value="<?php echo($IDAGENDA); ?>" readonly>
        </p>
        <p>ID USUARIO: 
            <input type="text" name="Id_usuario" value="<?php echo ($IDUS); ?>">
        </p>
        <p>ID CITA: 
            <input type="text" name="Id_cita" value="<?php echo ($IDCITA); ?>">
        </p>
        <p>FECHA: 
            <input type="text" name="Fecha" value="<?php echo ($FECHA); ?>">
        </p>
        <p>HORA INICIO 
            <input type="text" name="Hora_inicio" value="<?php echo ($HINICIO); ?>">
        </p>
        <p>HORA FIN: 
            <input type="text" name="Hora_fin" value="<?php echo ($HFIN); ?>">
        </p>
        <p>
            <input type="submit" name="ACTUALIZAR" value="ACTUALIZAR DATOS" class="btonactualizar">
        </p>
        <br>
    </form>

    <?php
    if (isset($_POST['ACTUALIZAR'])) {
        $IDAGENDA = $_POST['Id_agenda']; // Se usa 'Id_agenda' porque es el nombre correcto del input
        $IDUS = mysqli_real_escape_string($conexion, $_POST['Id_usuario']);
        $IDCITA = mysqli_real_escape_string($conexion, $_POST['Id_cita']);
        $FECHA = mysqli_real_escape_string($conexion, $_POST['Fecha']);
        $HINICIO = mysqli_real_escape_string($conexion, $_POST['Hora_inicio']);
        $HFIN = mysqli_real_escape_string($conexion, $_POST['Hora_fin']);
        
        // Consulta SQL de actualización
        $ACTUALIZAR = "UPDATE agenda SET 
            Id_usuario='$IDUS', 
            Id_cita='$IDCITA', 
            Fecha='$FECHA', 
            Hora_inicio='$HINICIO', 
            Hora_fin='$HFIN' 
            WHERE Id_agenda='$IDAGENDA'";

        // Ejecutar la consulta
        $EJECUTAR = mysqli_query($conexion, $ACTUALIZAR) or die(mysqli_error($conexion));

        // Mensaje de éxito
        echo '<script type="text/javascript"> alert("Agenda Actualizada correctamente"); </script>';
        echo '<script type="text/javascript"> window.open("Agenda.php", "_SELF"); </script>';
    }
    ?>

    <?php include('../Template/Footer.php'); ?>

  </body>
</html>
