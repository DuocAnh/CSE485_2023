
<?php
require '../connect.php';
$ten_tgia = $_POST["ten_tgia"];
if ($ten_tgia != '') {
    $ten_tgia = mysqli_real_escape_string($strConnection, $ten_tgia);
    $insert_query = "INSERT INTO tacgia (ten_tgia) VALUES ('$ten_tgia')";
    if (mysqli_query($strConnection, $insert_query)) {
        echo "Thêm mới tác giả thành công!";
        header("Location: ./author.php");
    } else {
        echo "Lỗi: " . mysqli_error($strConnection);
    }
} else {
    echo "<a href='http://localhost/BTTH01/btth01/admin/add_author.php'>";
echo "<h1>Vui lòng nhập tên tác giả</h1>";
echo "</a>";

}

mysqli_close($strConnection)
?>