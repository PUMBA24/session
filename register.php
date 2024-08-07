<?php

    require 'db.php';


    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $login = $_POST['login']; 
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

        $query = "INSERT INTO users(login, password) VALUES ('$login', '$password')";
        $result = mysqli_query($con, $query);

        if($result){
            echo "Success";
        }else{
            echo "error" . mysqli_error($con);
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

	<form action="register.php" method="POST">
		<div class="col-12" style="background-color: #212429;width: 800px; height: 350px;border-radius: 30px;margin-top: 250px;margin-left: 500px">
			<p style="margin-left:350px;color: white;">Зарегистрироваться</p>
			<p class="text-white m-0 mt-3"style="margin-left: 25px;margin-top: 50px;color: white;">Электронная почта</p>
			<input type="email"  name="login" class="w-25 form-control bg-dark text-white"style="margin-left: 25px">

			<p class="text-white m-0  mt-5"style="margin-left: 25px;color: white;">Создать  пароль</p>
			<input type="password" name="password" class="w-25 form-control bg-dark text-white"style="margin-left: 25px;">
			<button class="btn  btn-primary mt-4">Регистрация</button>
			<a href="login.php" class="btn  btn-primary mt-4">У меня уже есть аккаунт</a>
		</div>
	</form>
			




</body>
</html>