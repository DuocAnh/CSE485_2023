<?php
// Xử lý khi người dùng submit form thêm thể loại
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy thông tin từ form
    $ten_tloai = $_POST['ten_tloai'];

    // Thực hiện thêm thể loại vào cơ sở dữ liệu
    // Cần tùy chỉnh phần này để phù hợp với cấu trúc và quy tắc lưu trữ của bạn

    // Kết nối đến cơ sở dữ liệu
    $strConnection = mysqli_connect('localhost', 'root', '', 'btth01_cse485');

    // Chuẩn bị truy vấn INSERT
    $query = "INSERT INTO theloai (ten_tloai) VALUES (:ten_tloai)";
    $stmt = $db->prepare($query);

    // Gán giá trị cho các tham số
    $stmt->bindParam(':ten_tloai', $ten_tloai);

    // Thực thi truy vấn
    $stmt->execute();

    // Chuyển hướng về trang quản lý thể loại
    header("Location: category.php");
    exit;
}
?>

<!-- Hiển thị form thêm thể loại -->
<form method="POST" action="add_category.php">
    <label for="ten_tloai">Tên thể loại:</label>
    <input type="text" id="ten_tloai" name="ten_tloai" required><br>

    <input type="submit" value="Thêm">
</form>
