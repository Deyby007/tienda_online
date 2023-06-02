
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inisio</title>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php include ('header.php'); ?>
<main class="main">

    <div class="prinsipal">
        <h1>Bienvenido <?php echo $nombre; ?>  a <p class="logo-h1">compraFasil</p></h1>
    </div>

    <div class="contenido">
        <aside class="aside">
            <div class="aside-contenido">
                <h2>Inicio</h2>
                <a href="index.php">Inicio</a>
                <a href="carrito.php">Carrito</a>
                <a href="perfil.php">Perfil</a>
                <a href="salir.php">Cerrar sesion</a>
            </div>
        </aside>
        <div class="contenido-principal">
            <h2>Tu compra fue exitosa</h2>
            <p>Tu compra fue exitosa, te enviaremos un correo electronico cuando te confirmemos la compra</p>
            <a href="index.php" class="btn">Volver al inicio</a>
        </div>
    </div>
</main>




 <script src="js/header.js"></script>

</body>
</html>