<?php
require '../connect.php';
$ma_tgia = $_POST["ma_tgia"];
$ten_tgia = $_POST["ten_tgia"];

if ($ten_tgia != '' and $ma_tloai != '') {
    $ten_tgia = mysqli_real_escape_string($strConnection, $ten_tloai);
    $update_query = "UPDATE tacgia SET ten_tgia='$ten_tgia' WHERE ma_tgia='$ma_tgia'";

    if (mysqli_query($strConnection, $update_query)) {
        header("Location: ./author.php");
        exit();
    } else {
        echo "Lỗi: " . mysqli_error($strConnection);
    }
}

mysqli_close($strConnection);
?>
