<?php 
	include 'libs/db.php';

	if (isset($_POST['vhod'])) {
		$login = R::findOne('users', 'login = ?', [$_POST['login']]);
		if($login){
			if($login->password == $_POST['password']) {
				$_SESSION['user'] = $login;
				header('Location: index.php');
			}
		}
	}
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
	</header>
	<form action="" method="post">
	  <div>
	    <label for="login">Логин</label>
	    <input type="text" id="login" name="login" />
	  </div>
	  <div>
	    <label for="password">Пароль</label>
	    <input type="password" id="password" name="password" />
	  </div>
	  <input type="submit" name="vhod" value="Вход">
	</form>
	<div class ="footer2">
		<div class ="container">
			<div class="foot">
				<p>Flowers © Все права защищены. </p>
			</div>
			<div class="map">
				<img src="img/sitemap.png"><a href="sitemap.html">Карта сайта</a>
			</div>
		</div>
	</div>
	</body>
</html>
