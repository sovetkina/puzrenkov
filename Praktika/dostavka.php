<?php
	include 'libs/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Flowers</title>
	<link rel="shortcut icon" href="img/логотип.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class ="container">
			<div class="heading clearfix">			
			<a  href="index.php">			
				<img src ="img/логотип2.png"  class="logo"></img>
			</a>			
			<nav id="menu">
				<ul class="menu">
					<li>
						<a class="menu_a" href="katalog.php">Каталог</a>
					</li>
					<li>
						<a  class="menu_a" href="dostavka.php">Доставка</a>
					</li>
					<li>
						<a class="menu_a" href="kont.php">Контакты</a>
					</li>
					<li>
						<a class="menu_a" href="registration.php">Регистрация</a>
					</li>
					<li>
						<a class="menu_a" href="vhod.php">Вход</a>
					</li>
					<li>
						<a href="exit.php"><?php echo $_SESSION['user']->name; ?></a>
					</li>
				</ul>
			</nav>
			</div>
			<div class="titles">
				<div class="titles_1">
					Доставка<br> букетов на заказ
				</div>

				<div class="titles_2">
					Цветы, подобранные с любовью.<br>
					На любой вкус и бюджет,<br> с доставкой на дом в любое время!
				</div>
			</div>	 
	</header>
	<section0>
		<div class ="container">
			<div class ="onetwo">
				<div class ="bel_block">
					<div class="bel_block_black">
						<p class="text_54">БЕСКОНТАКТНАЯ<br/>ДОСТАВКА<br/>ПРЯМО К ВАШЕЙ<br/>ДВЕРИ</p>
						<p class="text_44">Яркие букеты<br/>в уникальных вазах,<br/>которые вы можете<br/>найти только здесь!</p>
					</div>
				</div>
			</div>
		</div>
	</section0>
	<footer>
		<div class ="container">
			<div class="foot">
				<p>Flowers © Все права защищены. </p>
			</div>
			<div class="map">
				<img src="img/sitemap.png"><a href="sitemap.html">Карта сайта</a>
			</div>
		</div>
	</footer>
	</body>
</html>