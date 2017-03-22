<?php
function menu() {
	echo '
	<a href="/pages/works"><p>Мои работы</p></a>
	<a href=""><p>Музыка</p></a>
	<a href=""><p>example</p></a>
	';
}
?>
<div class="loading">
	
</div>
<div class="menu">
<div class="menuitem">
	<?php menu(); ?>
</div>
</div>
<div class="nav">

	<a href="/" class="logo"><img src="/img/logo-white.svg" alt=""></a>
	<div class="menubar">
	<?php menu();?>
	</div>
	<div class="menubutton">
		<div class="lineone"></div>
		<div class="linetwo"></div>
	</div>
</div>