<?php 

	session_start();

	if ( !isset($_SESSION['login'])) {
		header("Location: login.php");
		exit();	
	}

	echo "SUCCES";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<div class="container">
		<div class="col-8 p-5">
			<div class="">
				<h1 class="text-success">Welcom to my profile<3</h1>
			</div>
			<div class="my-2">
				<h2>Login: <span><?php echo $_SESSION['login']; ?></span></h2>
			</div>
			<div class="my-5">
				<a class="btn btn-outline-danger" href="logout.php">Выйти из аккаунта</a>
			</div>
		</div>
	</div>

</body>
</html>