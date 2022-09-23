<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mostrar</title>
</head>

<body>

    <form action="" method="post">
<?php
error_reporting(0);
if($_POST['volver'] == 'VOLVER'){
    echo "<script type = 'text/javascript'>window.location = 'busqueda.php'</script>";  
}
?>
        <center>
            <h1>MOSTRAR TODO</h1>
            <table border="0">
                <br><br><br><br>
                <tr>
                    <td>
                        <input type="submit" name="mostrar" value="MOSTRAR TODO">
                        <input type="submit" name="volver" value="VOLVER">
                    </td>
                </tr>

            </table>
        </center>
    </form>
    <br><br><br><br>
    <?php
        error_reporting(0);
        if ($_POST['mostrar'] == 'MOSTRAR TODO') {
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
</body>
</html>