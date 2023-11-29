<?php
require '../connect.php';
$ma_tloai = $_POST["ma_tloai"];
$ten_tloai = $_POST["ten_tloai"];

if ($ten_tloai != '' and $ma_tloai != '') {
    $ten_tloai = mysqli_real_escape_string($strConnection, $ten_tloai);
    $update_query = "UPDATE theloai SET ten_tloai='$ten_tloai' WHERE ma_tloai='$ma_tloai'";

    if (mysqli_query($strConnection, $update_query)) {
        header("Location: ./category.php");
        exit();
    } else {
        echo "Lỗi: " . mysqli_error($strConnection);
    }
}

mysqli_close($strConnection);
?>
