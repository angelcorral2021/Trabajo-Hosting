<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ConsultaFecha</title>
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
            <br>
            <table border="0">

                <h1>CONSULTAR POR FECHA</h1>
                <br>
                <tr>
                    <td>INGRESA LA FECHA INICIAL: <input type="text" name="txtfecha1" value="<?php echo $_POST['txtfecha1']; ?>"></td>
                </tr>
                <tr>
                    <td>INGRESA LA FECHA FINAL: <input type="text" name="txtfecha2" value="<?php echo $_POST['txtfecha2']; ?>"></td>
                </tr>
                <table border=0"">
                    <br>
                    <tr>
                        <td><input type="submit" name="btnvisualizar" value='VER LISTADO'></td>
                        <td><input type="submit" name="txtvolver" value="VOLVER"></td>
                    </tr>
                </table>
        </center>
    </form>
    <br>
    <?php
    if ($_POST['btnvisualizar'] == 'VER LISTADO') {
        $region = $_POST['txtreg'];
        $fecha1 = $_POST['txtfecha1'];
        $fecha2 = $_POST['txtfecha2'];
        include("funciones.php");
        $cnn = Conectar();
        $sql = "SELECT * FROM `clientes` WHERE `clientes`.`FNAC` BETWEEN $fecha1 AND $fecha2;";
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