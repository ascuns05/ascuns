<?php 
	require_once 'liteFunction.php';
 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title><?php GetTitle(); ?></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/background.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Marck+Script|Open+Sans:100,200,300,400,500,600,700,800|Pangolin|Pattaya|Playfair+Display|Press+Start+2P|Raleway+Dots|Rubik+Mono+One" rel="stylesheet">

</head>
<body>
	<div class="nav">
		<a class="logo" href="/">
			<img src="img/logo-white.svg">
		</a>
		<a class="right" href="works">РАБОТЫ</a>
	</div>
	<?php 
		if ($URL == '' | $URL == 'works' ) {
			echo '
			<div class="background"></div> ';
		}
	?>
	<div class="main">
		<?php 
			if ($URL == '') 
			contentIndex();
			elseif ($URL == "works")
			contentWork();
		 ?>
	</div>
	<div class="footer">
		<div class="social">
			<a href="https://www.instagram.com/ascuns_05/" class="footer-style instagram"></a>
			<a href="https://vk.com/id339385941" class="footer-style vk"></a>
			<a href="https://github.com/ascuns05/ascuns" class="footer-style github"></a>
			<a href="" class="footer-style love"></a>
			<a href="" class="footer-style login"></a>
		</div>
	</div>
</body>
</html>

