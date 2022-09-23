<?php


function Conectar(){
    if(!($cnn = mysqli_connect("Nombre del dominio","Usuario","Contraseña del PanelC"))){
        exit();
    }
    if(! mysqli_select_db($cnn,"Nombre de la base de datoas en el hosting")){
        exit();
    }
    return $cnn;

}


?>
