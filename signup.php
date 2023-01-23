<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//save to database
		$user_id = random_num(20);
		$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

		mysqli_query($con, $query);

		header("Location: login.php");
		die;
	} else {
		echo "Please enter some valid information!";
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
	<title>Signup</title>
	<style>
		:root {
			--clr1: #EDE7E3;
			--clr2: #16697A;
			--clr3: #489FB5;
			--clr4: #82C0CC;
			--clr5: #FFA62B;
			--clr6: #3D1A4B;
		}

		*,
		*::before,
		*::after {
			box-sizing: border-box;
		}

		body {
			font-family: 'Inter', sans-serif;
			margin: 0;
		}

		.bg-image {
			width: 100%;
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
		}

		.image {
			background-image: url('./blob-scene-haikei.svg');
		}

		h2 {
			color: var(--clr5);
		}

		.container {
			background-color: var(--clr2);
			border-radius: 10px;
			margin: 20vh 40vw;
			padding-bottom: 1rem;
			text-align: center;
			overflow: hidden;
		}

		#text,
		.button,
		.redirect,
		.redirect>button {
			border-radius: 5px;
			border-style: none;
		}

		.login-signup {
			display: flex;
			margin-left: 6.3rem;
		}

		.button,
		.redirect>button {
			background-color: var(--clr6);
		}

		.button:hover,
		.redirect>button:hover {
			transition: .5s;
			background-color: var(--clr5);
		}

		.button:hover {
			z-index: 2;
		}

		.redirect {
			display: inline-flex;
			align-items: center;
		}

		a {
			text-decoration: none;
		}

		.button,
		a {
			color: var(--clr1);
		}

		.redirect>button {
			margin-left: -7px;
			z-index: 1;
		}

		@media only screen and (max-width: 800px) {
			.container {
				margin-left: 18rem;
				margin-right: 18rem;
			}

			.login-signup {
				margin-left: 2.5rem;
			}
		}
	</style>
</head>

<body class="bg-image image">

	<div class="container">

		<form method="post">
			<h2>Signup</h2>

			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>
			<div class="login-signup">
				<input class="button" type="submit" value="Signup">
				<div class="redirect">
					<button><a href="login.php">Login</a></button>
				</div>
			</div>
		</form>
	</div>
</body>

</html>