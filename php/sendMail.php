<?php
header('Content-Type: text/html; charset=utf-8');

//$userName = $_GET['user_name'];
$userName = $_POST['user_name'];

//mail('chchizh@gmail.com', 'Тестовое письмо', "Привет, $userName");

echo "Hello! $userName";
