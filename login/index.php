<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="login/Login.html"></script>
        <title>Proyecto Cono Sur</title>
        <link rel="shortcut icon" href="../img/cono-sur-logo.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../css/indexstyle.css">
    </head>
    <body>
		<div class="h1">
		<a href="logout.php">
			Cerrar Sesión
		</a>
		</div>

        </ul>             
        <div class="container_cubas">
            <a href="pinot.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Bodega Pinot
            </a>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Bodega Antigua
            </a>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Bodega 1998
            </a>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Bodega 2001
            </a>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Bodega 2002
            </a>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Bodega 2008
            </a>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Bodega 2013
            </a>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Bodega Acero 2016
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Bodega Hormigon 2016
            </a>
        </div>
    </body>
</html>