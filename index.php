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
    <h1 class = "header__title">{Библиотечный фонд}</h1>
  </header>

  <section class= "books">
    <h2 class= "books__title">{Вечная классика}</h2>
    <div class= "books__wrapper">
      <p class= "books__text">Книги, которые<br>
    никогда не<br>
    устареют!
      </p>
    <div class="books__container">
  <?php
            /*
             * Делаем выборку всех строк из таблицы "products"
             */

    $products = mysqli_query($conn, "SELECT * FROM `Список книг`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

    $products = mysqli_fetch_all($products);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */
    
    foreach ($products as $product) {
      ?>
      <div class="book">
        <!-- <p ><?= $product[0] ?></p> -->
        <img class="book__img" src="<?= $product[1] ?>" alt="Изображение не найдено">
        <div class="book__description-list">
          <p class="book__name"><?= $product[2] ?></p>
          <p class="book__author"><?= $product[3] ?></p>
          <p class="book__pages"><?= $product[4] ?> стр</p>
        </div>   
          <a class="btn btn--change" href="update.php?id=<?= $product[0] ?>">Изменить</a>
          <a class="btn btn--delete" href="vendor/delete.php?id=<?= $product[0] ?>">Удалить
          <img class= "book__icon" src="/images/Remove.png" alt="удалить">
        </a>
        
      </div>
      <?php
  } 
?>  

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
    </section>

    <section class="add-book">
      <button class= "add-book__btn" button id= "open-modal-btn">Добавить новую книгу</button>
    </section>   

    <a href="employees.php">Сотрудники</a>





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








