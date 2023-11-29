<?php
require '../connect.php';
if (isset($_GET['ma_tloai']))
  $ma_tloai = $_GET['ma_tloai'];

$query = "delete from theloai where ma_tloai = '$ma_tloai'";
mysqli_query($strConnection, $query);

mysqli_close($strConnection);

header('location: ./category.php');