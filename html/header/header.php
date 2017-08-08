<div class="header">
	<?php session_start(); ?>
	<?php if (isset($_SESSION['username'])) { ?>
		<div class="rh" style="height:150px; padding: 0;">
			<div class="profile_img"></div>
			<div class="username"><?php echo $_SESSION['username'] ?></div>
			<div class="logout">
				<a href="/site/html/logout.php?action=logout">Выйти</a>
			</div>
		</div>
	<?php  } 
	else { ?>
		<div class="rh">
			<ul class="reg">
				<li><a href="/site/html/login.php">Вход</a></li>
				<li>|</li>
				<li><a href="/site/html/registration.php">Регистрация</a></li>
			</ul>
		</div>
	<?php } ?>

	<div class="logo"><a href="/site"><span class="title">MovieStore</span></a></div>
	<div class="hc">
		<form class="search" action="" method="post">
			<input class="i"  type="text" placeholder="Найти..." value="" name="query">
			<input class="go" type="submit" value="Поиск" name="op">
		</form>
	</div>
</div>