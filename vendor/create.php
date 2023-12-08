<?php

require_once '../config/connect.php';

$pic = $_POST['pic'];
$title = $_POST['title'];
$author = $_POST['author'];
$pages = $_POST['pages'];

mysqli_query($conn, query: "INSERT INTO `Список книг` (`id`, `Изображение`, `Название`, `Автор`, `Количество страниц`) VALUES (NULL, '$pic', '$title', '$author', '$pages')");

header("Location: ../index.php");
