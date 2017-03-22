<?php 
class Card {
	public $img;
	public $header;

	function createCard($image, $head) {
		echo $image;
		echo '<br>';
		echo '
			<form action="">
				<input type="file">
			</form>
		 ';
		echo $head;
	}

}
	

$card1 = new Card;
$card1->createCard("asdas", "asdsa");

 ?>