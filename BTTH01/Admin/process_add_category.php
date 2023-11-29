
<?php
require '../connect.php';
$ten_tloai = $_POST["ten_tloai"];
if ($ten_tloai != '') {
    $ten_tloai = mysqli_real_escape_string($strConnection, $ten_tloai);
    $insert_query = "INSERT INTO theloai (ten_tloai) VALUES ('$ten_tloai')";
    if (mysqli_query($strConnection, $insert_query)) {
        echo "Thêm mới thể loại thành công!";
        header("Location: ./category.php");
    } else {
        echo "Lỗi: " . mysqli_error($strConnection);
    }
} else {
    echo "Vui lòng nhập tên thể loại";
}

mysqli_close($strConnection)
?>