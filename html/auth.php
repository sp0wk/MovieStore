<html>
<head>
<title>MovieStore.com.ua</title>
<meta content="charset=utf-8">
<link rel="stylesheet" href="../css/login.css">
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
    	exit("Вы не ввели логин или пароль!");
    }
	
 	// connect to db
    $con = mysqli_connect("localhost", "just_user", "1234", "moviesdb");
	if ($con == FALSE) {
		 die("cannot connect to DB");
	}
 	
 	// check if login exist
    $result = mysqli_query($con, "SELECT login FROM users WHERE login='$login' AND password='$password'");
   
    if ($myrow = mysqli_fetch_array($result)) {
        session_start();
        $_SESSION['username'] = $myrow['login'];
    	header("Location: /site");
    }
    else {
    	echo "Вы ввели неверный логин или пароль"; ?>
    	<div></div>
    	<div class="log">
    	<table> 
    	  <form method="post" action="auth.php"> 
    	  <tr> 
    	    <td>Имя:</td> 
    	    <td><input type="text" name="login"></td> 
    	  </tr> 
    	  <tr> 
    	    <td>Пароль:</td> 
    	    <td><input type="password" name="password"></td> 
    	  </tr> 
		  <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    	  <tr> 
    	    <td>&nbsp;</td> 
    	    <td style="margin:10;"><input type="submit" value="Войти"></td> 
    	  </tr> 
    	  </form> 
   		</table> 
   		</div>
    <?php }

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