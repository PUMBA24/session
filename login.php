<?php

	session_start();
    require 'db.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $login = $_POST['login'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE login = '$login'";
        $result = mysqli_query($con, $query);

        if ($result){
            $user = mysqli_fetch_assoc($result);

            if (password_verify($password, $user['password'])){
                $_SESSION['login'] = $login;
                header("Location: profile.php");
                exit();
            } else {
                echo "<h1> Invalid Password!!! </h1>";
            }

        } else {
            echo "No user found or incorrect login!!!";
        }

        mysqli_close($con);

    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<form action="login.php" method="POST">
		<div class="col-12" style="background-color: #212429; height: 247.5px;border-radius: 30px;">
			<p class="text-white m-0 mt-3"style="margin-left: 25px;margin-top: 50px;color: white;">Электронная почта</p>
			<input type="email"  name="login" class="w-25 form-control bg-dark text-white"style="margin-left: 25px">

			<p class="text-white m-0  mt-5"style="margin-left: 25px;color: white;">Введите  пароль</p>
			<input type="password" name="password" class="w-25 form-control bg-dark text-white"style="margin-left: 25px;">
			<button  class="btn  btn-primary mt-4">Войти</button>
			

	</form>

</div>

</body>
</html>