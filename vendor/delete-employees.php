<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($conn, query:"DELETE FROM `Сотрудники` WHERE `Сотрудники`.`id` = '$id'");

header("Location: ../employees.php");