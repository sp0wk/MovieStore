<html>
<head>
<title>MovieStore.com.ua</title>
<meta content="charset=utf-8">
<link rel="stylesheet" href="../css/movies.css">
<script type="text/javascript" src="../js/main.js"></script>
<style type="text/css">
	.minfo_list {
		margin: 10 0;
	}
</style>
</head>
<body>
<div class="wrap">
<?php include('header/header.php') ?>
<div class="body">
<?php include('body/left.php') ?>
<div class="main">
	<div class="ptitle">Фильмы</div>
	<div class="mcont">
	<?php
		$con = mysqli_connect("localhost", "just_user", "1234", "moviesdb");
		if ($con == FALSE) {
			 die("cannot connect to DB");
		}
	
		$count = 0;
	
		mysqli_set_charset($con, "utf8");
		$query = "SELECT * FROM movies ORDER BY title";
		$result = mysqli_query($con, $query);
	
		while ($row = mysqli_fetch_array($result)) {
			echo "<div class=\"mitem\">";
				echo "<div class=\"bleft\">";
					echo "<div class=\"mtitle\">";
						echo "<span class=\"nn\">" . ++$count . "</span>";
						echo "<a href=\"" . $row['movie_url'] . "\">" . $row['title'] . "</a>";
					echo "</div>";				
					echo "<div class=\"addons\">";
						echo "<ul style=\"list-style-type:square;\">";
							echo "<li class=\"minfo_list\"><b>Жанр: </b>" . $row['genre'] . "</li>";
							echo "<li class=\"minfo_list\"><b>Качество: </b>" . $row['quality'] . "</li>";
							echo "<li class=\"minfo_list\"><b>Язык: </b>" . $row['language'] . "</li>";
							echo "<li class=\"minfo_list\"><b>Страна: </b>" . $row['country'] . "</li>";
						echo "</ul>";
					echo "</div>";
				echo "</div>";
	
				echo "<div class=\"bright\">";
					echo "<div class=\"y\">" . (new DateTime($row['year']))->format("Y") . "</div>";
					echo "<div class=\"q\">" . $row['quality'] . "</div>";
				echo "</div>";
	
				echo "<div class=\"cover\">";
					echo "<a href=\"" . $row['movie_url'] . "\">" . "<img class=\"cover_img\" src=\"../images/" . $row['image_path'] . "\"></a>";
				echo "</div>";
			echo "</div>";	
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