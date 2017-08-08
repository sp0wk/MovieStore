<html>
<head>
<title>MovieStore.com.ua</title>
<meta content="charset=utf-8">
<link rel="stylesheet" href="../css/feedback.css">
<script type="text/javascript" src="../js/main.js"></script>
</head>
<body>
<div class="wrap">
<?php include('header/header.php') ?>
<div class="body">
<?php include('body/left.php') ?>
<div class="main">
	<div class="ptitle">Отзывы о сайте</div>
	<div class="fb_block">
		<div class="post-page">
			<div class="post-wrap">
				<div class="post-author">Кирилл Б.</div>
				<div class="post-date">19 Ноя. 2013 18:25</div>
				<div class="post-text"> Сайт весьма неплох, но хотелось бы иметь возможность скачивать фильмы.</div>
			</div>
			<div class="post-wrap">
				<div class="post-author">Артём Ш.</div>
				<div class="post-date">15 Ноя. 2013 12:42</div>
				<div class="post-text">Сайт понравился! Только фильмы чаще добавляйте. </div>
			</div>
			<div class="post-wrap">
				<div class="post-author">Денис К.</div>
				<div class="post-date">12 Ноя. 2013 19:04</div>
				<div class="post-text">Сайт определённо нуждается в доработке... Практически ничего не работает. </div>
			</div>
		</div>
		<div class="post-send">
		<div class="post-send-title">Добавить отзыв</div>
		<table class="post-form" cellpadding="5" border=0> 
			<form method=post action=""> 
				<tr><td width=20>Имя:</td><td><input type=text name=name size=30></td></tr> 
				<tr><td colspan="2" height="100" width="500"><textarea cols=50 rows=5 placeholder="Введите сообщение"></textarea></td></tr> 
				<tr><td colspan=2 align=center><input type=submit value='Отправить'></td></tr> 
			</form> 
		</table> 
		</div>
   </div>
</div>
<?php include('body/right.php') ?>
</div>
<?php include('footer/footer.php') ?>
</div>
</body>
</html>