<?php

  require_once 'config/connect.php';

  $employee_id = $_GET['id'];
  $employee = mysqli_query($conn, query: "SELECT * FROM `Сотрудники` WHERE `id` = '$employee_id'");
  $employee = mysqli_fetch_assoc($employee);
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
  <form class= "change-description__form" action="vendor/update-employees.php" method="post">
    <input type="hidden" name="id" value="<?= $employee['id'] ?>">
    <p class= "change-description__text">Фамилия</p>
    <input class= "change-description__input" type="text" name= "lastname" value="<?= $employee['Фамилия'] ?>">
    <p class= "change-description__text">Имя</p>
    <input class= "change-description__input" type="text" name= "name" value="<?= $employee['Имя'] ?>">
    <p class= "change-description__text">Отчество</p>
    <input class= "change-description__input" type="text" name= "surname" value="<?= $employee['Отчество'] ?>">
    <p class= "change-description__text">Должность</p>
    <input class= "change-description__input" type="text" name= "position" value="<?= $employee['Должность'] ?>">
    <button class= "btn btn--update" type= "submit">Обновить</button>
  </form>
  </main>
</body>
</html>









