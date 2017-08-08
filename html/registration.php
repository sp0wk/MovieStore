<html>
<head>
<title>MovieStore.com.ua</title>
<meta content="charset=utf-8">
<link rel="stylesheet" href="../css/registration.css">
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script>
	function beforeCheck() {
		$("#logincheck").css("color", "black");
		$("#logincheck").text("Проверка логина...");
	}

	function funcSuccess(data) {
		if (data == "exist") {
			$("#logincheck").css("color", "red");
			$("#logincheck").text("Логин уже занят");
		}
		else {
			$("#logincheck").css("color", "green");
			$("#logincheck").text("Логин свободен");
		}
	}

	$(document).ready(function() {
		$("input[name='login']").bind("change keydown paste input", function() {
			var login = $("input[name='login']").val();
			if (login.length >= 3) {
				$.ajax({
					url: "logincheck.php",
					type: "POST",
					data: ({login: login}),
					dataType: "text",
					beforeSend: beforeCheck,
					success: funcSuccess
				})
			}
			else {
				$("#logincheck").css("color", "black");
				$("#logincheck").text("Логин должен быть не менее 3 символов");
			}
		})
	})
</script>
</head>
<body>
<div class="wrap">
<?php include('header/header.php') ?>
<div class="body">
<?php include('body/left.php') ?>
<div class="main">
	<div class="ptitle">Регистрация</div>
	<div class="register">
		<table class="tbreg" cellspacing="5" cellpadding="5"> 
			<form method="post" action="reg_check.php"> 
			<tr>
				<td>Логин: *</td>
				<td><input id="login_field" type="text" name="login"></td>
			</tr> 
			<tr>
				<td></td>
				<td id="logincheck" style="font: 12px verdana;"></td>
			</tr>
			<tr>
				<td>Пароль: *</td>
				<td><input type="password" name="password"></td>
			</tr> 
			<tr>
				<td>ФИО:</td>
				<td><input type="text" name="full_name"></td>
			</tr> 
			<tr>
				<td>Телефон:</td>
				<td><input type="text" name="phone"></td>
			</tr> 
			<tr>
				<td>E-mail:</td>
				<td><input type="text" name="email"></td>
			</tr> 
			<tr>
				<td>Ваш сайт:</td>
				<td><input type="text" name="site"></td>
			</tr> 
			<tr>
				<td>Дата рождения:</td>
				<td>
					<select name="day">
						<?php
							for($i = 1; $i <= 31 ; $i++)
							{
								echo "<option value=$i>$i</option>";
							}
						?>
					</select>
					<select name="month">
						<?php
							for($i = 1; $i <= 12 ; $i++)
							{
								echo "<option value=$i>$i</option>";
							}
						?>
					</select>
					<select name="year">
						<?php
							for($i = 1960; $i <= 2015 ; $i++)
							{
								echo "<option value=$i>$i</option>";
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Зарегистрироваться"></td>
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



 