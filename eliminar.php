<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Eliminar</title>
</head>

<body>
<?php

error_reporting(0);
if ($_POST['btnconsultar'] == 'CONSULTAR') {
    include("funciones.php");/*Para enlazar nuestro archivo funciones*/
    $cnn = Conectar();
    $rut = $_POST['txtrut'];
    $rs = mysqli_query($cnn, "SELECT * FROM `clientes` WHERE `clientes`.`RUT` = '$rut'");
    if ($row = mysqli_fetch_array($rs)) {
        $Nom = $row[1];
    }
}

if ($_POST['btnEliminar'] == 'Eliminar') {
    include("funciones.php");
    $cnn = Conectar();
    $rut = $_POST['txtrut'];
    $sql = "DELETE FROM `clientes` WHERE `clientes`.`RUT` = '$rut'";
    mysqli_query($cnn, $sql);
    echo "<script>alert('Se ha eliminado el rut')</script>";
}
if ($_POST['txtvolver'] == 'VOLVER') {
    echo "<script type = 'text/javascript'>window.location = 'index.php'</script>";
}
?>

    <form action="" method="POST">
         <center>
            <br><br><br>
            <table border="0">

                <h1>ELIMINAR</h1>

                <tr>
                    <td>INGRESE EL RUT A ELIMINAR : <input type="text" name="txtrut" value="<?php echo $rut ?>"><input type="submit" name="btnconsultar" value="CONSULTAR"></td>
                </tr>
            </table>

            <table border="0">
                    <tr>
                        <td> NOMBRE : <input type="text" name="txtnombre" value="<?php echo $Nom ?>"></td>
                    </tr>
                </table>                                       

                <table border="0">
                    <br><br><br><br>
                    <tr>
                    <td><input type="submit" name="btnEliminar" value="ELIMINAR"><td>
                    <td><input type="submit" name="txtvolver" value="VOLVER"></td>
                   </tr>
                </table>
                    
                                                                                                                                                                                                                                                                                  
                    
        </center>
    </form>
</body>
</html>