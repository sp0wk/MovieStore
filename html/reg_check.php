<html>
<head>
<title>MovieStore.com.ua</title>
<meta content="charset=utf-8">
<link rel="stylesheet" href="../css/registration.css">
<script type="text/javascript" src="../js/main.js"></script>
</head>
<body>
<div class="wrap">
<?php include('header/header.php') ?>
<div class="body">
<?php include('body/left.php') ?>
<div class="main">
	<div class="reg_result" align="center" style="margin:20px; font: 14pt verdana;">
<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    
 	if (empty($login) or empty($password))
    {
    	exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    $fullname = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $site = $_POST['site'];
    $birthdate = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];

    // check format of input fields
    $err_message = "";

    if (!preg_match("/^[a-zA-Z0-9_]{3,}?$/", $login)) $err_message .= "- логин;<br>";
    if ($phone <> "" && !preg_match("/ (\+|00)? \s* -? \s* \d{0,3}? \s* -?  \s* \(? \s* \d{1,3}? \s* \)? \s* -? \s* (\d{3}?) \s* -? \s* (\d{2}?) \s* -? \s* (\d{2}?) \s*/x", $phone)) $err_message .= "- телефон;<br>";
    if ($email <> "" && !filter_var($email, FILTER_VALIDATE_EMAIL)) $err_message .= "- e-mail;<br>";
    if ($site <> "" && !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $site)) $err_message .= "- сайт;<br>";

    if ($err_message <> "") {
        exit("Вы некорректно заполнили поля:<br><br>" . $err_message);
    }
 	
 	// connect to db
    $con = mysqli_connect("localhost", "just_user", "1234", "moviesdb");
	if ($con == FALSE) {
		 die("cannot connect to DB");
	}
 	
 	// check if login exist
    $result = mysqli_query($con, "SELECT userid FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['userid'])) {
    	exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
	
	// create new user
    $result2 = mysqli_query ($con, "INSERT INTO users (login, password, full_name, phone, email, site, birth_date) 
    	VALUES ('$login', '$password', '$fullname', '$phone', '$email', '$site', '$birthdate')");
    
    if ($result2=='TRUE')
    {
    	echo "Вы успешно зарегистрированы! Теперь вы можете <a href='login.php' style='color:maroon;'>ВОЙТИ</a> на сайт.";
    }
 	else {
   	 	echo "Возникла ошибка! Попробуйте ещё раз.";
    }

    mysqli_close($con);
 ?>
	</div>
</div>
<?php include('body/right.php') ?>
</div>
<?php include('footer/footer.php') ?>
</div>
</body>
</html>



