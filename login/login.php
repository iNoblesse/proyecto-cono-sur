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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <title>Iniciar Sesión</title>
        <link rel="shortcut icon" href="../img/iconlogin.png" type="image/x-icon">
        <link rel="stylesheet" href="../css/loginstyle.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">	
	</head>
	<body>
		<div class="box">
			<form method="post">
				<h1>Login</h1>
				<input id="text" type="text" name="user_name" placeholder="Usuario"><br><br>
				<input id="text" type="password" name="password" placeholder="Contraseña"><br><br>
				<input id="button" type="submit" value="Entrar"><br><br>
				<a href="signup.php">Registrarse</a><br><br>
			</form>
		</div>
	</body>
</html>