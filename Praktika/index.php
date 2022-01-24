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
						<a class="menu_a" href="kont.html">Контакты</a>
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
			<div id="out-1" class="out-num">0</div>
				<p class="hero">посетителей</p>
				<p class="hero2">ПОЛЬЗУЮТСЯ НАШЕЙ ДОСТАВКОЙ!</p>
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
	<section2>
			<div class = "block2">
				<div id="kat" class = "verh">
				</div>
				<div class ="container">
					<div  class="titles_4">
					Каталог
					</div>
					<div class="flower">
					</div>
				</div>
				<div id="dost" class = "niz">
				</div>
				</div>
			</div>
	</section2>
	<section3>
		<div class ="container">
				<div  class="titles_3">
				Доставка
				</div>
				<div class = "block1">
					<p class="text_12">ДОСТАВКА ОСУЩЕСТВЛЯЕТСЯ ЕЖЕДНЕВНО, <br/> В ЛЮБОЕ ДЛЯ ВАС ВРЕМЯ.</p>
					<p class="text_13">Для заказа выберите букет в разделе «Каталог» <br/>и оплатите онлайн с помощью банковской <br/>карты или наличными при получении.</p>
				</div>
		</div>				
	</section3>
	<section4>
		<div class = "block4">
			<div id="kont" class = "verh">
			</div>
		<div class ="container">
				<div  class="titles_4">
				Контакты
				</div>
				<div class="geo">
				<p><img src="img/гео.png" width="50" height="50" align="middle" />Пенза</p>
				<div class="telefon">
				<p><img src="img/телефон.png" width="50" height="50" align="middle" />+7 (900) 468 08 02</p>
			</div>
			</div>
		</div>
			<div class = "niz">
			</div>
	</section4>
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
	<script>
		const time=2000;
		const step=20;

		function outNum(num, elem){
			let l=document.querySelector('#'+elem);
			n=0;
			let t=Math.round(time/(num/step));
			let interval=setInterval(()=>{
				n=n+step;
				if(n==num){
					clearInterval(interval);
				}
				l.innerHTML=n;
			},
			t);
		}
		outNum(4800, 'out-1');
	</script>
</body>
</html>
