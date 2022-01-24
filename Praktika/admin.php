<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if (! $_SESSION['admin'])
header('Location: vhod.php');


?>
<!doctype html>
<html lang="ru">
<head>
  <title>Админ-панель</title>
  <link rel="shortcut icon" href="img/логотип.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style2.css">
</head>
<body>
<?php if($_SESSION['user']->admin == '2') : ?>

<?php elseif ($_SESSION['user']->admin == '1') : ?>

<?php else : ?>

<?php endif; ?>

  <?php
    $host = 'localhost';  
    $user = 'root';    
    $pass = 'root'; 
    $db_name = 'flowers';   
    $link = mysqli_connect($host, $user, $pass, $db_name); 

    
    if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }

    
    if (isset($_POST["name"])) {
      //Если запрос на обновление, то обновляем
      if (isset($_GET['red_id'])) {
          $sql = mysqli_query($link, "UPDATE `products` SET `photo` = '{$_POST['photo']}',`name` = '{$_POST['name']}',`price` = '{$_POST['price']}', `description` = '{$_POST['description']}' WHERE `id`={$_GET['red_id']}");
      } else {
          //Иначе вставляем данные
          $sql = mysqli_query($link, "INSERT INTO `products` (`photo`,`name`, `price`, `description`) VALUES ('{$_POST['photo']}', '{$_POST['name']}', '{$_POST['price']}', '{$_POST['description']}')");
      }

      
      if ($sql)
        echo '<p>Успешно!</p>';
      } 
    

    if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
      //удаляем строку из таблицы
      $sql = mysqli_query($link, "DELETE FROM `products` WHERE `id` = {$_GET['del_id']}");
      if ($sql) {
        echo "<p>Товар удален.</p>";
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }

    //Если передана переменная red_id, то надо обновлять данные
    if (isset($_GET['red_id'])) {
      $sql = mysqli_query($link, "SELECT `id`, `photo`, `name`, `price`, `description` FROM `products` WHERE `id`={$_GET['red_id']}");
      $product = mysqli_fetch_array($sql);
    }
  ?>
  <form action="" method="post">
    <table class="kl">
    <tr>
        <td>Фото:</td>
        <td><input type="text" name="photo" value="<?= isset($_GET['red_id']) ? $product['photo'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>Наименование:</td>
        <td><input type="text" name="name" id="text" value="<?= isset($_GET['red_id']) ? $product['name'] : ''; ?>">
          <input type="button" value="B" id="button" />
          <input type="button" value="I" id="button2" />
          <input type="button" value="U" id="button3" />
        </td>
    </tr>
      <tr>
        <td>Цена:</td>
        <td><input type="text" name="price" size="3" value="<?= isset($_GET['red_id']) ? $product['price'] : ''; ?>"> руб.</td>
      </tr>
      <tr>
        <td>Описание:</td>
        <td><textarea name="description" size="3" value="<?= isset($_GET['red_id']) ? $product['description'] : ''; ?>"></textarea></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="OK"></td>
      </tr>
    </table>
  </form>
  <p><a href="?add=new">Добавить новый товар</a></p>
  <table border='1'>
    <tr>
      <td>Номер</td>
      <td>Фото</td>
      <td>Название</td>
      <td>Цена</td>
      <td>Описание</td>
      <td>Удалить</td>
      <td>Редактировать</td>
    </tr>
    <?php
      $sql = mysqli_query($link, 'SELECT `id`, `photo`,`name`, `price`, `description` FROM `products`');
      while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
             "<td>{$result['id']}</td>" .
             "<td>{$result['photo']}</td>" .
             "<td>{$result['name']}</td>" .
             "<td>{$result['price']}₽</td>" .
             "<td>{$result['description']}</td>" .
             "<td><a href='?del_id={$result['id']}'>Удалить</a></td>" .
             "<td><a href='?red_id={$result['id']}'>Изменить</a></td>" .
             '</tr>';
      }
    ?>
  </table>
      <script type="text/javascript">
        document.getElementById("button").addEventListener('click', function () {
        var text = document.getElementById('text');
        text.value += '<b></b>';
        });
      </script>
      <script type="text/javascript">
        document.getElementById("button2").addEventListener('click', function () {
        var text = document.getElementById('text');
        text.value += '<i></i>';
        });
      </script>
      <script type="text/javascript">
        document.getElementById("button3").addEventListener('click', function () {
        var text = document.getElementById('text');
        text.value += '<u></u>';
        });
      </script>
</body>
</html>