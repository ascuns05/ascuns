<?php 
//Title function
$URL = substr($_SERVER['REQUEST_URI'], 1);
$title = EGOR;
function GetTitle() {
	switch ($URL) {
		case '':
			$title = "EGOR";
			break;
		
		default:
			$title = "EGOR";
			break;
	}
	echo $title;

}
//example




function contentIndex() {
	echo '
	<h1>Колесников Егор</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe maiores mollitia sequi dolores alias excepturi maxime, voluptas autem pariatur temporibus quo nisi sunt, provident harum reprehenderit. Harum, ad veniam tempore.</p>
	<div class="hero"></div>
	';
}



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
		<a class="logo" href="">
			<img src="img/logo-white.svg">
		</a>
		<a class="right" href="">РАБОТЫ</a>
	</div>
	<div class="background"></div>
	<div class="main">
		<?php 
			contentIndex();
		 ?>
	</div>
	<div class="footer">
		<div class="social">
			<a href="" class="footer-style instagram"></a>
			<a href="" class="footer-style vk"></a>
			<a href="" class="footer-style github"></a>
			<a href="" class="footer-style love"></a>
			<a href="" class="footer-style login"></a>
		</div>
	</div>
</body>
</html>

