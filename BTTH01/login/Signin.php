<?php
require '../connect.php';

// Xử lý đăng nhập khi form được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $username = $_POST["username"];
    $password = $_POST["PASSWORD"];

    // Bảo vệ dữ liệu trước khi truy vấn để ngăn chặn tấn công SQL injection
    $username = mysqli_real_escape_string($strConnection, $username);
    $password = mysqli_real_escape_string($strConnection, $password);

    // Truy vấn kiểm tra thông tin đăng nhập
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $strConnection->query($query);

    // Kiểm tra kết quả truy vấn
    if ($result->num_rows == 1) {
        echo "Đăng nhập thành công!";
        echo "<a href='../index.php'>";
        echo "Trở về trang chủ";
        echo "</a>";
        
    } else {
        echo "Tên đăng nhập hoặc mật khẩu không đúng.";
    }
}

mysqli_close($strConnection)
?>
