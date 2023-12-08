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
    
  </main>
  
</body>
</html>
