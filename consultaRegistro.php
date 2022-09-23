<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ConsultaRegistro</title>
</head>

<body>
    <?php

    error_reporting(0);

    if ($_POST['btnconsultar'] == 'BUSCAR') {
        include("funciones.php");
        $cnn = Conectar();
        $rut = $_POST['txtrut'];
        $sql = "SELECT *  FROM `clientes` WHERE `clientes`.`RUT` = '$rut'";
        $rs = mysqli_query($cnn, $sql);
        if ($row = mysqli_fetch_array($rs)) {
            $nom = $row[1];
            $ape = $row[2];
        }
    }
    if ($_POST['txtvolver'] == 'VOLVER') {
        echo "<script type = 'text/javascript'>window.location = 'busqueda.php'</script>";
    }
   
    ?>
    <form action="" method="POST">

        <center>
            <br><br>
            <br>
            <table border="0">

                <h1>CONSULTAR REGISTRO</h1>
                <tr>
                    <td>RUT : <input type="text" name="txtrut" value="<?php echo $rut ?>"><input type="submit" name="btnconsultar" value='BUSCAR'></td>
                </tr>
                <table border="0">
                    <tr>
                        <td> NOMBRE : <input type="text" name="txtnombre" value="<?php echo $nom; ?>"></td>
                    </tr>
                    <tr>
                        <td> APELLIDO : <input type="text" name="txtapellido" value="<?php echo $ape; ?>"></td>
                    </tr>
                </table>
                <table border=0"">
                    <br><br><br><br>
                    <tr>
                        <td><input type="submit" name="txtvolver" value="VOLVER"></td>
                    </tr>
                </table>
        </center>
    </form>
</body>
</html>