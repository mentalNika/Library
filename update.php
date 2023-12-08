<?php

  require_once 'config/connect.php';

  $product_id = $_GET['id'];
  $product = mysqli_query($conn, query: "SELECT * FROM `Список книг` WHERE `id` = '$product_id'");
  $product = mysqli_fetch_assoc($product);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title class ="modal__title">Изменить описание</title>
  <link rel="stylesheet" href="style.css.php" />
</head>
<body>
<header class= "header">
    <a href="index.php">
      <h1 class = "header__title">{Библиотечный фонд}</h1>
    </a>
  </header>

<main class= "change-description">
<h2 class= "change-description__title">Изменить описание</h2>
  <form class= "change-description__form" action="vendor/update.php" method="post">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <p class= "change-description__text">Изображение</p>
    <input class= "change-description__input" type="text" name= "pic" value="<?= $product['Изображение'] ?>">
    <img class= "change-description__img" src="<?= $product['Изображение'] ?>" alt="">
    <p class= "change-description__text">Название</p>
    <input class= "change-description__input" type="text" name= "title" value="<?= $product['Название'] ?>">
    <p class= "change-description__text">Автор</p>
    <input class= "change-description__input" type="text" name= "author" value="<?= $product['Автор'] ?>">
    <p class= "change-description__text">Количество страниц</p>
    <input class= "change-description__input" type="number" name= "pages" value="<?= $product['Количество страниц'] ?>">
    <button class= "btn btn--update" type= "submit">Обновить</button>
  </form>
  </main>
</body>
</html>









