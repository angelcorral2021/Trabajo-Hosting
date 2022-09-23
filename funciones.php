<?php


function Conectar(){
    if(!($cnn = mysqli_connect("sql200.260mb.net","n260m_32641280","tahir148"))){
        exit();
    }
    if(! mysqli_select_db($cnn,"n260m_32641280_empresa")){
        exit();
    }
    return $cnn;

}


?>