<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//read from database
		$query = "select * from users where user_name = '$user_name' limit 1";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['password'] === $password) {

					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location: home.php");
					die;
				}
			}
		}

		echo "Wrong username or password!";
	} else {
		echo "Wrong username or password!";
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

	<title>Login</title>
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
			font-size: 2rem;
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
			margin-bottom: -0.8rem;
		}


		.container {
			background-color: var(--clr2);
			border-radius: 10px;
			margin: 19vh 40vw;
			height: 25rem;
			width: 25rem;
			text-align: center;
			overflow: hidden;
		}


		#text1, #text2,
		.button,
		.redirect,
		.redirect>button {
			border-radius: 5px;
			border-style: none;
		}

		.login-signup {
			display: flex;
			margin: -1rem 6.7rem;

		}

		.button,
		.redirect>button {
			background-color: var(--clr6);
			height: 2rem;
			width: 6rem;
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

		@media only screen and (max-width: 1000px) {
			.container {
				margin: 20vh 35vw;
			}
		}
	</style>
</head>

<body class="bg-image image">

	<div class="container">

		<form method="post">
			<h2>Login</h2>

			<input id="text1" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text2" type="password" name="password" placeholder="Password"><br><br>
			<div class="login-signup">
				<input class="button" type="submit" value="Login">
				<div class="redirect">
					<button><a href="signup.php">Signup</a></button>
				</div>
			</div>
		</form>
	</div>
</body>

</html>