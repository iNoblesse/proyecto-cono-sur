<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
	<link rel="shortcut icon" href="../img/iconlogin.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/loginstyle.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
	<div class="box">
		<form method="post">
			<h1>Registrate</h1>
			<input id="text" type="text" name="user_name" placeholder="Ingrese un nombre de Usuario"><br><br>
			<input id="text" type="password" name="password" placeholder="Ingrese una Contraseña"><br><br>
			<input id="button" type="submit" value="Registrarme"><br><br>
			<a href="login.php">Iniciar Sesión</a><br><br>
		</form>
	</div>
</body>
</html>