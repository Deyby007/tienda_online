<?php
include("../conexion.php");



//guadar los dato obtenidos del sing up
if (isset($_POST['registrar'])) {

    //si la contrasena tiene menos de ocho caracteres que se anule el formulario y aparesca un mensaje 
    if (strlen($_POST['contraseña']) < 8) {
        echo '<script> alert("La contraseña debe tener al menos 8 caracteres"); window.location.href = "sing_up.php"; </script> ';
        exit();
        }


                        //verifica que no se repitan los datos
                           $sql = "SELECT email FROM usuarios WHERE email = '" . $_POST['email'] . "'";
                            $result = mysqli_query($conex, $sql);
                            $row = mysqli_fetch_array($result);
                           if ($row) {
                            echo '<script> alert("El email ya existe"); window.location.href = "sing_up.php"; </script> ';
                           exit();
                               }


                        //verifica que no se repita la contra
                        $sql = "SELECT contraseña FROM usuarios WHERE contraseña = '" . $_POST['contraseña'] . "'";
                        $result = mysqli_query($conex, $sql);
                        $row = mysqli_fetch_array($result);
                        if ($row) {
                            echo '<script> alert("la contraseña de usuario ya existe"); window.location.href = "sing_up.php"; </script> ';
                            exit();
                            }


         if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['contraseña']) >= 1
                 ) {

        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $email = trim($_POST['email']);
        $contraseña = trim($_POST['contraseña']);
        $consulta = "INSERT INTO usuarios( nombre, apellido, email, contraseña)VALUES ('$nombre', '$apellido', '$email', '$contraseña')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            
            echo '<script> alert("Usuario registrado con exito"); window.location.href = "../login/login.php"; </script> ';

        }else {
            echo '<script> alert("Error al registrar al usuario"); window.location.href = "sing_up.php"; </script> ';
        }

    }else {
        echo '<script> alert("Debe ingresar todos los campos"); window.location.href = "sing_up.php"; </script> ';
    }



}

//cerrar coneccion
mysqli_close($conex);















?>