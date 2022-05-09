<?php

    $conexiondb = mysqli_connect("localhost", "root", "", "inicio_registro_db");

    if($conexiondb){
        echo 'conectado';
    }else{
        echo 'error de conexion';
    }

?>