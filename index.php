<?php 
function standartBlock($element) {
	echo '
		<div class="blockHead">
			'.$element.'	
		</div>
		<div class="initalBlock">
		</div>
	';
 }
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>EGOR</title>
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/fonts.css">
	<link rel="stylesheet" href="/css/footer.css">
	<link rel="stylesheet" href="/css/header.css">
	<link rel="icon" typre="image/png" href="img/logo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<script src="/libs/paralax.js"></script>
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
		<?php 
		standartBlock("<h1>Колесников Егор</h1>");
		 ?>
	<div class="description">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi expedita nam tenetur quia nobis esse, dolor nemo cupiditate dolorum consequuntur? Sit vitae deleniti, quia perferendis voluptatum illum esse mollitia, id.
		</p>
	</div>
	</div>
<?php
require_once "_backend/template/footer.php";
?>
</body>
</html>