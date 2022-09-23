<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Busqueda</title>
</head>

<body>
    <?php

error_reporting(0);

if($_POST['txtvolver'] == 'VOLVER'){
    echo "<script type = 'text/javascript'>window.location = 'index.php'</script>";
}
if($_POST['txtregistro'] == 'BUSCAR REGISTRO'){
    echo "<script type = 'text/javascript'>window.location = 'consultaRegistro.php'</script>";
  }
  if($_POST['txtregion'] == 'BUSCAR REGION'){
    echo "<script type = 'text/javascript'>window.location = 'consultaRegion.php'</script>";
  }
  if($_POST['txtfechas'] == 'BUSCAR FECHAS'){
    echo "<script type = 'text/javascript'>window.location = 'consultaFecha.php'</script>";
  }
?>

    <form action="" method="post">
        <center>
            <h1>BUSQUEDAS</h1>
            <table border="0">
                <br><br><br><br>
                <tr>
                    <td><input type="submit" name="txtmostrar" value="MOSTRAR TODO"></td>
                    <td><input type="submit" name="txtregistro" value="BUSCAR REGISTRO"></td>
                    <td><input type="submit" name="txtregion" value="BUSCAR REGION"></td>
                    <td><input type="submit" name="txtfechas" value="BUSCAR FECHAS"></td>
                </tr>
            </table>
            <br><br>
            <?php
            error_reporting(0);
            if ($_POST['txtmostrar'] == 'MOSTRAR TODO') {
            include("funciones.php");
            $cnn = Conectar();
            $sql = "select * from clientes";
            $rs = mysqli_query($cnn, $sql);
            echo "<table align = 'center' border = '5'>";
            echo "<tr align = 'center'>";
            echo "<td><b>Rut</td>";
            echo "<td><b>Nombre</td>";
            echo "<td><b>Apellido</td>";
            echo "<td><b>F.Nacimiento</td>";
            echo "<td><b>Sexo</td>";
            echo "<td><b>Region</td>";
            echo "<td><b>Fono</td>";
            echo "<tr>";
            while ($row = mysqli_fetch_array($rs)) {
                echo "<tr>";
                echo "<td>$row[RUT] </td>";
                echo "<td>$row[NOMBRES] </td>";
                echo "<td>$row[APELLIDOS] </td>";
                echo "<td>$row[FNAC] </td>";
                echo "<td>$row[SEXO] </td>";
                echo "<td>$row[REGION] </td>";
                echo "<td>$row[FONO] </td>";
            }
            echo "</table>";
        }
            ?>
            <br><br>
            <table border="0">
                <tr>
                    <td><input type="submit" name="txtvolver" value="VOLVER"></td>
                </tr>
            </table>
        </center>
    </form>
</body>

</html>