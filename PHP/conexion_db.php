<?

    $conexiondb = mysqli_connect("localhost", "root", "", "login_register_db");

    if($conexiondb){
        echo 'conectado';
    }else{
        echo 'error de conexion';
    }

?>