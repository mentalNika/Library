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

    <button class= "add-book__btn" button id= "open-modal-btn">Добавить сотрудника</button>
    
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
          <h2 class ="modal__title">{Добавить Сотрудника}</h2>
          <form action="vendor/create-employees.php" method="post">
            <p class ="modal__text">Фамилия</p>
            <input class ="modal__input" type="text" name= "lastname" placeholder= "Введите фамилию">
            <p class ="modal__text">Имя</p>
            <input class ="modal__input"type="text" name= "name" placeholder= "Введите Имя">
            <p class ="modal__text">Отчество</p>
            <input class ="modal__input" type="text" name= "surname" placeholder= "Введите Отчество">
            <p class ="modal__text">Должность</p>
            <input class ="modal__input" type="text" name= "position" placeholder= "Введите должность">
            <button class ="btn btn--add" type= "submit">Добавить</button>
        </form>
          </div>
      </div> 
  </main>
  
    <!-- javascript -->
    <script type='text/javascript'>
    document
    .getElementById("open-modal-btn")
    .addEventListener("click", function () {
      document.getElementById("my-modal").classList.add("open");
    });

    document
    .getElementById("close-my-modal-btn")
    .addEventListener("click", function () {
      document.getElementById("my-modal").classList.remove("open");
    });

    window.addEventListener('keydown', (e) => {
      if (e.key ===  "Escape") {
        document.getElementById("my-modal").classList.remove("open");
      }
    });

    document.querySelector("#my-modal .modal__box").addEventListener ('click', event => {
      event._isClickWithInModal = true;
    });
    document.getElementById("my-modal").addEventListener('click', event => {
      if (event._isClickWithInModal) return;
      event.currentTarget.classList.remove('open');
    });
</script>
</body>
</html>
