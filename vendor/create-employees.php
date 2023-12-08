<?php

require_once '../config/connect.php';

$lastname = $_POST['lastname'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$position = $_POST['position'];

mysqli_query($conn, query: "INSERT INTO `Сотрудники` (`id`, `Фамилия`, `Имя`, `Отчество`, `Должность`) VALUES (NULL, '$lastname', '$name', '$surname', '$position')");

header("Location: ../employees.php");
