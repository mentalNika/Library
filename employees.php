<?php

require_once 'config/connect.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Библиотечный фонд</title>
  <link rel="stylesheet" href="style.css.php" />
</head>
<body class= "page">
  <header class= "header">
    <h1 class = "header__title">Сотрудники</h1>
  </header>
  <table>
        <tr>
            <th>Номер</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */

            $employees = mysqli_query($conn, "SELECT * FROM `Сотрудники`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $employees = mysqli_fetch_all($employees);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($employees as $employee) {
                ?>
                    <tr>
                        <td><?= $employee[0] ?></td>
                        <td><?= $employee[1] ?></td>
                        <td><?= $employee[3] ?></td>
                        <td><?= $employee[2] ?></td>
                        <td><a href="update-employees.php?id=<?= $employee[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="vendor/delete-employees.php?id=<?= $employee[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    
    <div class="modal" id= "my-modal">
          <div class="modal__box">
            <button class= "modal__close-btn" id= "close-my-modal-btn">
            <svg xmlns="http://www.w3.org/2000/svg"         xml:space="preserve" width="100%" height="100%" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd;   clip-rule:evenodd"
              viewBox="0 0 500 500"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs>
              <style type="text/css">
              <![CDATA[
              .str0 {stroke:#fd3730;stroke-width:80;stroke-linecap:round}
              .fil0 {fill:none}
              ]]>
              </style>
              </defs>
              <g id="Layer_x0020_1">
              <metadata id="CorelCorpID_0Corel-Layer"/>
              <path class="fil0 str0" d="M425 75l-350 350m350 0l-350 -350"/>
              </g>
            </svg>
            </button>
          <h2 class ="modal__title">{Добавить новую книгу}</h2>
          <form action="vendor/create.php" method="post">
            <p class ="modal__text">Изображение</p>
            <input class ="modal__input" type="text" name= "pic" placeholder= "Введите url адрес изображения">
            <p class ="modal__text">Название</p>
            <input class ="modal__input"type="text" name= "title" placeholder= "Введите название книги">
            <p class ="modal__text">Автор</p>
            <input class ="modal__input" type="text" name= "author" placeholder= "Введите автора книги">
            <p class ="modal__text">Количество страниц</p>
            <input class ="modal__input" type="number" name= "pages" placeholder= "Введите количество страниц">
            <button class ="btn btn--add" type= "submit">Добавить</button>
        </form>
          </div>
      </div> 
  </main>
  
</body>
</html>
