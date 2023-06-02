


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea tu cuenta</title>
    <link rel="stylesheet" href="../css/formulario.css">

</head>
<body>
<!--Crea un sing up-->
<form action="consulta.php" method="post" class="sing_up">
    <h2>Registrate</h2>
    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" name="nombre" placeholder="Escibe tu nombre" class="input" required >
    <label for="apellido">Apellido: </label>
    <input type="text" id="apellido" name="apellido" placeholder="Escribe tu apellido" class="input" required>
    <label for="email">Email: </label>
    <input type="email" id="email" name="email" placeholder="Escribe tu correo" class="input" required>
    <label for="password">Password: </label>
    <input type="password" id="contraseña" name="contraseña" placeholder="Escribe tu contraseña" class="input" required>
    <input type="submit" value="Enviar" name="registrar" class="boton-crear-1" id="boton-crear">
    <label for="">o</label>
    <a href="../login/login.php" class="boton-login-1" id="boton-crear">Inisiar sesion</a>
</form>
    <?php
    require ('consulta.php')

    ?>
     <!--Script para limitar el numero de caracteres-->
    <script src="../js/limiacion_de_caracter.js"></script>




</body>
</html>