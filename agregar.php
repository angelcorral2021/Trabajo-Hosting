<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro</title>
</head>

<body>

    <form action="" method="POST">


        <center>
            <br>
            <h1>REGISTRO DE CLIENTES</h1>
            <br><br>
            <br>

            <table border="0">

                <tr>
                    <td>RUT:</td>
                    <td><input type="text" name="txtRut" value=""></td>
                </tr>
                <tr>
                    <td>NOMBRE:</td>
                    <td><input type="text" name="txtNom" value=""></td>
                </tr>
                <tr>
                    <td>APELLIDO:</td>
                    <td><input type="text" name="txtApe" value=""></td>
                </tr>
                <tr>
                    <td>FECHA DE NACIMIENTO:</td>
                    <td><input type="text" name="txtFnac" value=""></td>
                </tr>
                <tr>
                    <td>SEXO:</td>
                    <td><select name="txtSex" size="1" multiple>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select></td>
                </tr>
                <tr>
                    <td>REGION:</td>
                    <td><select name="txtReg" size="2" multiple>
                            

                        </select></td>
                </tr>
                <tr>
                    <td>FONO:</td>
                    <td><input type="number" name="txtFon" value=""></td>
                </tr>

            </table>

            <br><br>

            <table border="0">

                <tr>
                    <td><input type="submit" name="btnRegistrar" value="REGISTRAR"></td>
                    <td><input type="submit" name="txtvolver" value="VOLVER"></td>
                </tr>

            </table>

        </center>

    </form>

    <?php

    error_reporting(0);
    if ($_POST['txtvolver'] == 'VOLVER') {
        echo "<script type = 'text/javascript'>window.location = 'index.php'</script>";
    }

    if ($_POST['btnRegistrar'] == 'Registrar') {
        include("funciones.php");
        $cnn = Conectar();
        $rut = $_POST['txtRut'];
        $nom = $_POST['txtNom'];
        $ape = $_POST['txtApe'];
        $fnac = $_POST['txtFnac'];
        $sex = $_POST['txtSex'];
        $reg = $_POST['txtReg'];
        $fon = $_POST['txtFon'];

        $sql = "insert into clientes values ('$rut','$nom','$ape','$fnac','$sex','$reg','$fon')";

        mysqli_query($cnn, $sql);
        echo "<script>alert('Se han grabado los datos')</script>";
    }


    ?>



</body>

</html>