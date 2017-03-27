<?php 
//Title function
$URL = substr($_SERVER['REQUEST_URI'], 1);
$title = EGOR;
function GetTitle() {
	switch ($URL) {
		case '':
			$title = "EGOR";
			break;
		case 'works':
			$title = "Работы";
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
<<<<<<< HEAD
 }
 ?>
=======
}
function contentWork() {
	echo '
	<div class="card design">
		<div class="about">
			<a class="button">Подробнее</a>
		</div>
	</div>

	<div class="card imposition">
		<div class="about">
			<a class="button" href="">Подробнее</a>
		</div>	
	</div>	
	';
}
?>





>>>>>>> c764f9619a1f0ed1290a49ee7f91e445aedf2d4f
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<<<<<<< HEAD
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
=======
	<title><?php GetTitle(); ?></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/background.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Marck+Script|Open+Sans:100,200,300,400,500,600,700,800|Pangolin|Pattaya|Playfair+Display|Press+Start+2P|Raleway+Dots|Rubik+Mono+One" rel="stylesheet">

>>>>>>> c764f9619a1f0ed1290a49ee7f91e445aedf2d4f
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
<<<<<<< HEAD
	<div class="description">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi expedita nam tenetur quia nobis esse, dolor nemo cupiditate dolorum consequuntur? Sit vitae deleniti, quia perferendis voluptatum illum esse mollitia, id.
		</p>
=======
>>>>>>> c764f9619a1f0ed1290a49ee7f91e445aedf2d4f
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

