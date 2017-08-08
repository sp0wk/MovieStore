<html>
<head>
<title>MovieStore.com.ua</title>
<meta content="charset=utf-8">
<link rel="stylesheet" href="../css/top.css">
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript">
	$(document).ready(function() {	
		var rating = 0;

		//set rating filter
		function setFilter() {
			rating = $("#ratingInput").val();	//get rating from input

			resetRating();

			$("#topmovies tr").filter(function() {
				var currRating = parseFloat($(".mrating", this).text());
				return currRating < rating;
			}).hide();
		}

		//reset rating
		function resetRating() {
			$("#topmovies tr").show();
		}

		//onClick OK rating button
		$("input[name='okRating']").click(function() {
			setFilter();
		});

		//rating input on "enter"
		$("#ratingInput").keydown(function(event) {
			if (event.which == 13) setFilter();
		});

		//onClick Reset rating button
		$("input[name='resetRating'").click(function() {
			$("#ratingInput").val("");
			resetRating();
		});
	});
</script>
</head>
<body>
<div class="wrap">
<?php include('header/header.php') ?>
<div class="body">
<?php include('body/left.php') ?>
<div class="main">
	<div class="ptitle">Топ-10 фильмов за последний месяц</div>
	<div class="topcont">
		<table id="topmovies" cellspacing=0 border=1>
			<tr>
				<td width=20>1.</td>
				<td><a href="inception.html">Начало</a></td>
				<td class="mrating">9.1</td>
			</tr>
			<tr>
				<td>2.</td>
				<td><a href="#">Великий Гэтсби</a></td>
				<td class="mrating">8.9</td>
			</tr>	
			<tr>
				<td>3.</td>
				<td><a href="#">Иллюзия обмана</a></td>
				<td class="mrating">8.8</td>
			</tr>			
			<tr>
				<td>4.</td>
				<td><a href="#">Гравитация</a></td>
				<td class="mrating">8.5</td>
			</tr>			
			<tr>
				<td>5.</td>
				<td><a href="#">Обливион</a></td>
				<td class="mrating">8.3</td>
			</tr>			
			<tr>
				<td>6.</td>
				<td><a href="#">Элизиум</a></td>
				<td class="mrating">8.3</td>
			</tr>	
			<tr>
				<td>7.</td>
				<td><a href="#">Тихоокеанский рубеж</a></td>
				<td class="mrating">8.0</td>
			</tr>			
			<tr>
				<td>8.</td>
				<td><a href="#">Пипец 2</a></td>
				<td class="mrating">7.8</td>
			</tr>			
			<tr>
				<td>9.</td>
				<td><a href="#">Мы - Миллеры</a></td>
				<td class="mrating">7.7</td>
			</tr>			
			<tr>
				<td>10.</td>
				<td><a href="#">Мачете убивает</a></td>
				<td class="mrating">7.5</td>
			</tr>			
		</table>
	</div>
	<div class="chooseRating">
		<span style="font: italic 10pt Verdana; margin:10px 30px 10px 20px;">Выберите минимальный рейтинг:</span>
		<input id="ratingInput" type="text" name="rating" min="1" max="10" maxlength="3" size="3" pattern="\d(\.\d{1})?" value="">
		&nbsp;
		<input type="button" name="okRating" value="OK">
		&nbsp;
		<input type="button" name="resetRating" value="Сбросить">
	</div>
</div>
<?php include('body/right.php') ?>
</div>
<?php include('footer/footer.php') ?>
</div>
</body>
</html>