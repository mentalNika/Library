<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$surname = $_POST['surname'];
$position = $_POST['position'];

mysqli_query($conn, query: "UPDATE `Сотрудники` SET `Фамилия` = '$lastname', `Имя` = '$name', `Отчество` = '$surname', `Должность` = '$position' WHERE `Сотрудники`.`id` = '$id'");

header("Location: ../employees.php");
