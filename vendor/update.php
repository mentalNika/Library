<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$pic = $_POST['pic'];
$title = $_POST['title'];
$author = $_POST['author'];
$pages = $_POST['pages'];

mysqli_query($conn, query: "UPDATE `Список книг` SET `Изображение` = '$pic', `Название` = '$title', `Автор` = '$author', `Количество страниц` = '$pages' WHERE `Список книг`.`id` = '$id'");

header("Location: ../index.php");
