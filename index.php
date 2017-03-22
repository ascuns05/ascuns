<?php 
	// functions
		function card($head, $text) {
			echo '
		<div class="card">
			<h3>'.$head.'</h3>
			<p>'.$text.'</p>
			<img src="" alt="">
		</div>';
		 }
	
 ?>	





<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>EGOR</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="icon" typre="image/png" href="img/logo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<script src="libs/background.js" type="text/javascript"></script>
</head>
<body>
<?php 
require_once "_backend/template/header.php";
 ?>
		<div class="hero">
			<div class="grid">
				<h1>KOLESNIKOV</h1>
			</div>	
		</div>

	<div class="content">
		<div class="cards">
		<?php 
		card(
			"ДИЗАЙН", 
			"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quam! Voluptate, corporis suscipit repellat pariatur deserunt tempora quas quia nulla dolores praesentium rerum amet cupiditate itaque sed repellendus dolor odit?"
			);
		card(
			"СОЗДАНИЕ САЙТОВ", 
			"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic voluptatem, quae veritatis in ducimus dolore atque ad perspiciatis, debitis eaque deserunt reprehenderit amet? Possimus dolorum enim architecto in porro vel!"
			);
		 ?>
		 </div>
	</div>
<?php
require_once "_backend/template/footer.php";
?>
</body>
</html>