<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "oefnbvtr_0207", "12345", "oefnbvtr_0207");

if ($mysqli == false) {
  print("error");
} else {
$inputValue = $_POST['value'];
$item = $_POST['item'];
$id = $_SESSION['id'];
$mysqli->query("UPDATE `users` SET `name`=[value-2],`lastname`=[value-3],`email`=[value-4],`pass`=[value-5] WHERE 1");

}
