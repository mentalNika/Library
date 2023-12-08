<?php
$conn = mysqli_connect("localhost", "root", "", "Library");
if ($conn === false) {
  die("Ошибка: " . mysqli_connect_error());
} 
echo "Подключение успешно установлено";
?>