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
	<section2>
			<div class = "block2katalog">
				<div id="kat" class = "verh">
				</div>
				<div class ="container">
					<div  class="titles_4">
					Каталог
				</div>
				 <?php 
					$db_host='localhost';
					$db_name='flowers';
					$db_user='root';
					$db_pass='root';
					mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
					$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
					$mysqli->set_charset("utf8mb4");
					$result = $mysqli->query('SELECT * FROM `products`'); 

					while($row = $result->fetch_assoc())
					{
					    echo "<a class='contentblock' ><img class='contentphoto'src='" . $row['photo'] . "' alt='' />";
						echo '<p align="left" class="contenttext">' . $row['name'] . '<br>' . $row['price'] . '<br>' . '<p align="left" class="contenttext2">' . $row['description'] .'</p></a>';
					}
				?>
				</div>
				<div id="dost" class = "niz"></div>
				</div>
			</div>
	</section2>
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