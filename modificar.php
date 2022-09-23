<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modificar</title>
</head>
<body>
<form action="" method="POST">

        <?php
        error_reporting(0);

        if ($_POST['txtvolver'] == 'VOLVER') {
            echo "<script type = 'text/javascript'>window.location = 'index.php'</script>";
        }

        if ($_POST['btnConsultar'] == 'Consultar') {

            include("funciones.php");
            $cnn = Conectar();
            $rut = $_POST['txtRut'];
            $rs = mysqli_query($cnn, "SELECT * FROM `clientes` WHERE RUT = '$rut'");

            if ($row = mysqli_fetch_array($rs)) {
                $vaNom = $row[1];
                $vaApe = $row[2];
                $vaFnac = $row[3];
                $vaSex = $row[4];
                $vaRegion = $row[5];
                $vaFon = $row[6];
            }
        }

        if ($_POST['btnModificar'] == 'Modificar Datos') {
            include("funciones.php");/*Para enlazar nuestro archivo funciones*/
            $cnn = Conectar();
            $rut = $_POST['txtRut'];
            $nom = $_POST['txtNom'];
            $ape = $_POST['txtApe'];
            $fnac = $_POST['txtFnac'];
            $sex = $_POST['txtSex'];
            $reg = $_POST['txtReg'];
            $fon = $_POST['txtFon'];

            $sql = "UPDATE `clientes` SET `NOMBRES` = '$nom', `APELLIDOS` = '$ape', `FNAC` = '$fnac', `SEXO` = '$sex', `REGION` = '$reg', `FONO` = '$fon' WHERE `clientes`.`RUT` = '$rut'";

            mysqli_query($cnn, $sql);
            echo "<script>alert('Se han grabado los datos')</script>";
        }

        ?>


        <center>

            <h1>MODIFICACION DE CLIENTES</h1>
            <br><br>
            <table border="0">

                <tr>
                    <td>INGRESE EL RUT A MODIFICAR:</td>
                    <td><input type="text" name="txtRut" value="<?php echo $rut ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btnConsultar" value="CONSULTAR"></td>
                </tr>

            </table>

            <table border="0">
                <br><br>
                <tr>
                    <td>NOMBRE CLIENTE:</td>
                    <td><input type="text" name="txtNom" value="<?php echo $vaNom ?>"></td>
                </tr>
                <tr>
                    <td>APELLIDO CLIENTE:</td>
                    <td><input type="text" name="txtApe" value="<?php echo $vaApe ?>"></td>
                </tr>
                <tr>
                    <td>FECHA NACIMIENTO:</td>
                    <td><input type="text" name="txtFnac" value="<?php echo $vaFnac ?>"></td>
                </tr>

                <tr>
                    <td>SEXO:</td>
                    <td><select name="txtSex">
                            <option value="<?php echo $vaSex; ?>"><?php echo $vaSex; ?></option>
                            <option value="<?php echo $vaSex; ?>">----------------</option>

                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select></td>
                </tr>

                <tr>
                    <td>REGION:</td>
                    <td><select name="txtReg">
                            <option value="<?php echo $vaRegion; ?>"><?php echo $vaRegion; ?></option>
                            <option value="<?php echo $vaRegion; ?>">----------------</option>
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
                <tr>
                    <td>FONO:</td>
                    <td><input type="number" name="txtFon" value="<?php echo $vaFon ?>"></td>
                </tr>
                <table border="0">
                    <br><br>
                    <tr>
                        <td><input type="submit" name="btnModificar" value="MODIFICAR DATOS"></td>
                        <td><input type="submit" name="txtvolver" value="VOLVER"></td>
                    </tr>
                </table>

            </table>
        </center>
    </form>
</body>
</html>