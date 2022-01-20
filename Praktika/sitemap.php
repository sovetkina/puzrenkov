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
			<a  href="index.html">			
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
			<div class="nazv">Карта сайта</div>
			<div class="mapsite">
				<nav id="site">
					<ul class="sitemap">
						<li>
							<a href="index.html">Главная страница</a>
						</li>
						<ul>
						<li>
							<a href="katalog.html">Каталог</a>
						</li>
						<li>
							<a href="dostavka.html">Доставка</a>
						</li>
						<li>
							<a href="kont.html">Контакты</a>
						</li>
						<li>
							<a href="registration.html">Регистрация</a>
						</li>
					</ul>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	</header>
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