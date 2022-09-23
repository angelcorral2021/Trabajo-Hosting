<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
</head>

<body>




    <form action="" method="POST">

        <?php
        error_reporting(0);
        if ($_POST['txtbusqueda'] == 'BUSQUEDAS') {
            echo "<script type = 'text/javascript'>window.location ='busqueda.php'</script>";
        }
        if ($_POST['txtagregar'] == 'AGREGAR') {
                echo "<script type = 'text/javascript'>window.location = 'agregar.php'</script>";
            }
        if ($_POST['txteliminar'] == 'ELIMINAR'){
            echo "<script type = 'text/javascript'>window.location = 'eliminar.php'</script>";
        }
        if ($_POST['txtmodificar'] == 'MODIFICAR'){
            echo "<script type = 'text/javascript'>window.location = 'modificar.php'</script>";
        }
        

        ?>

        <center>
            <h1>TRABAJO ACUMULATIVO</h1>

            <table border="0">
                
                <img src="rrss.jpg" width="450" height="250" alt="Logo AIEP">
                <br><br><br><br>

                <tr>

                    <td><input type="submit" name="txtagregar" value="AGREGAR"></td>


                    <td><input type="submit" name="txteliminar" value="ELIMINAR"></td>


                    <td><input type="submit" name="txtmodificar" value="MODIFICAR"></td>


                    <td><input type="submit" name="txtbusqueda" value="BUSQUEDAS"></td>
                </tr>







            </table>









        </center>








    </form>


</body>

</html>