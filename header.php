<?php include('user.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inisio</title>
    <link rel="stylesheet" href="css/inportasion.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<header class="menu-navegacion">
    <nav class="menu">
        <ul>
            <li><a href="inisio.php">inisio</a></li>
            <li><a href="categorias.php">categorias</a></li>
            <li><a href="contacto.php">contacto</a></li>
        </ul>
    </nav>
    <div class="menu-user" id="lateral">
        <div class="nombre">
            
            <button id="activador" ><p><?php  echo $nombre; ?></p><i class='bx bx-right-arrow-alt' id="flecha"></i></button>
        </div>
        
            <div class="user" id="use-menu">
                <a href="perfil.php">Pefil</a>
                <a href="login/logout.php">serrar sesion</a>
            </div>
    </div>


</header>

<script src="../js/header.js"></script>
</body>
