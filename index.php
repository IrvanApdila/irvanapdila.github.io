<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		.container {
			margin: 0 auto;
			width: 30%;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #ddd;
			border-radius: 5px;
			box-shadow: 0px 0px 10px #ddd;
		}
		h1 {
			text-align: center;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 20px;
		}
		label {
			font-weight: bold;
			margin-bottom: 10px;
		}
		input[type="text"],
		input[type="password"] {
			padding: 10px;
			width: 100%;
			border-radius: 3px;
			border: 1px solid #ccc;
			margin-bottom: 20px;
			box-sizing: border-box;
			font-size: 16px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 3px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		.error {
			color: red;
			text-align: center;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Halaman Login</h1>
		<?php
			if(isset($_POST['submit'])){
			    $username = $_POST['username'];
			    $password = $_POST['password'];

			    if($username == "admin" && $password == "admin123"){
			        $_SESSION['user'] = "admin";
			        header("Location: admin.php");
			    }
			    else if($username == "staf" && $password == "staf123"){
			        $_SESSION['user'] = "staf";
			        header("Location: staf.php");
			    }
			    else if($username == "user" && $password == "user123"){
			        $_SESSION['user'] = "user";
			        header("Location: user.php");
			    }
			    else{
			        echo "<p class='error'>Username atau password salah</p>";
			    }
			}
		?>
		<form method="POST">
		    <label for="username">Username</label>
		    <input type="text" name="username" id="username" required>
		    <label for="password">Password</label>
		    <input type="password" name="password" id="password" required>
		    <input type="submit" name="submit" value="Login">
		</form>
	</div>
</body>
</html>
