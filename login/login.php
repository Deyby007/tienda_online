<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inisiar sesion</title>
    <link rel="stylesheet" href="../css/formulario.css">

</head>
<body>

<!--Crea un sing up-->
<form action="validar.php" method="post" class="login">
    <h2>Inicia sesion</h2>
    <label for="email">Email: </label>
    <input type="email" id="email" name="email" placeholder="Escribe tu correo" class="input-2" required>
    <label for="password">Password: </label>
    <input type="password" id="contraseña" name="pass" placeholder="Escribe tu contraseña" class="input-2" required>
    <input type="submit" value="Enviar" name="Iniciar_sesion" class="boton-login-2" id="boton-login-2">
    <label for="">o</label>
    <a href="../sing/sing_up.php" class="boton-crear-2" id="boton-crear-2">Crear cuenta</a>
    </form>
    
    <?php include ('validar.php');?>

     <!--Script para limitar el numero de caracteres-->
    <script src="js/login.js"></script>



</body>
</html>