<?php
require '../connect.php';
if (isset($_GET['ma_tgia']))
  $ma_tgia = $_GET['ma_tgia'];

$query = "delete from tacgia where ma_tgia = '$ma_tgia'";
mysqli_query($strConnection, $query);

mysqli_close($strConnection);

header('location: ./author.php');