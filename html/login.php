<html>
<head>
<title>MovieStore.com.ua</title>
<meta content="charset=windows-1251">
<link rel="stylesheet" href="../css/login.css">
<script type="text/javascript" src="../js/main.js"></script>
</head>
<body>
<div class="wrap">
<?php include('header/header.php') ?>
<div class="body">
<?php include('body/left.php') ?>
<div class="main">
	<div class="ptitle">Вход</div>
    <div class="log">
	<table> 
      <form method=post action="auth.php"> 
      <tr> 
        <td>Имя:</td> 
        <td><input type=text name=login></td> 
      </tr> 
      <tr> 
        <td>Пароль:</td> 
        <td><input type=password name=password></td> 
      </tr> 
	  <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
      <tr> 
        <td>&nbsp;</td> 
        <td style="margin:10;"><input type=submit value='Войти'></td> 
      </tr> 
      </form> 
   </table> 
   </div>
</div>
<?php include('body/right.php') ?>
</div>
<?php include('footer/footer.php') ?>
</div>
</body>
</html>