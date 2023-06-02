<?php
include ('conexion.php');

session_start();
//valida la sesion; de no aver inisiado sesion que me rediriga a otro lado
if (isset($_SESSION['user'])) {
    //busca todos los datos de la tabla usuarios en la base de datos para poder inprimirlos
        $user = $_SESSION['user'];
        $sql = "SELECT * FROM usuarios WHERE email = '$user'";
        $result = mysqli_query($conex, $sql);
        $row = mysqli_fetch_array($result);
        $id = $row['ID'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $email = $row['email'];

    }else{
        
        header('location: login/login.php');

}

?>