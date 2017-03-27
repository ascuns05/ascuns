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
	<p>
	 Мне 18 лет, я студент и начинающий веб дизайнер.
		
	</p>
	<div class="hero"></div>
	';
}
function contentWork() {
	echo '
	<div class="card design">
		<div class="about">
			<a class="button" href="">Подробнее</a>
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


