<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($conn, query:"DELETE FROM `Список книг` WHERE `Список книг`.`id` = '$id'");

header("Location: ../index.php");