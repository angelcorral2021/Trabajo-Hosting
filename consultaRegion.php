<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ConsultaRegion</title>
</head>

<body>
    <?php

    error_reporting(0);

    if ($_POST['txtvolver'] == 'VOLVER') {
        echo "<script type = 'text/javascript'>window.location = 'busqueda.php'</script>";
    }
     
    ?>
    <form action="" method="POST">

        <center>
            <br><br>
            <br>
            <table border="0">

                <h1>CONSULTAR POR REGIÓN</h1>
                <tr>
                    <td>SELECCIONE LA REGIÓN : </td>
                    <td><select name="txtreg" size="2">
                            <option value="I region">I Region</option>
                            <option value="II region">II Region</option>
                            <option value="III region">III Region</option>
                            <option value="IV region">IV Region</option>
                            <option value="V region">V Region</option>
                            <option value="VI region">VI Region</option>
                            <option value="VII region">VII Region</option>
                            <option value="VIII region">VIII Region</option>
                            <option value="IX region">IX Region</option>
                            <option value="X region">X Region</option>
                            <option value="XI region">XI Region</option>
                            <option value="XII region">XII Region</option>
                            <option value="XIII region">XIII Region</option>
                            <option value="XIV region">XIV Region</option>
                            <option value="XV region">XV Region</option>
                            <option value="XVI region">XVI Region</option>
                        </select></td>
                </tr>
                
                <table border=0"">
                    <br><br><br><br>
                    <tr>
                        <td><input type="submit" name="btnvisualizar" value='VER LISTADO'></td>
                        <td><input type="submit" name="txtvolver" value="VOLVER"></td>
                    </tr>
                </table>
        </center>
    </form>
    <br><br><br>
    <?php
    if ($_POST['btnvisualizar'] == 'VER LISTADO') {
        $region = $_POST['txtreg'];
        include("funciones.php");
        $cnn = Conectar();
        $sql = "SELECT * FROM clientes WHERE `clientes`.`REGION` = '$region'";
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
</body>

</html>