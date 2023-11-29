<?php
// Kết nối đến cơ sở dữ liệu
$strConnection = mysqli_connect('localhost', 'root', '', 'btth01_cse485');

// Xử lý khi người dùng xác nhận xóa thể loại
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy thông tin từ form
    $id_tloai = $_POST['id_tloai'];

    // Thực hiện xóa thể loại khỏi cơ sở dữ liệu
    // Cần tùy chỉnh phần này để phù hợp với cấu trúc và quy tắc lưu trữ của bạn

    // Chuẩn bị truy vấn DELETE
    $query = "DELETE FROM theloai WHERE id_tloai = :id_tloai";
    $stmt = $db->prepare($query);

    // Gán giá trị cho tham số
    $stmt->bindParam(':id_tloai', $id_tloai);

    // Thực thi truy vấn
    $stmt->execute();

    // Chuyển hướng về trang quản lý thể loại
    header("Location: category.php");
    exit;
}

// Lấy thông tin thể loại từ cơ sở dữ liệu
$id_tloai = $_GET['id'];
$query = "SELECT * FROM theloai WHERE id_tloai = :id_tloai";
$stmt = $db->prepare($query);
$stmt->bindParam(':id_tloai', $id_tloai);
$stmt->execute();
$theloai = $stmt->fetch(PDO::FETCH_ASSOC);

// Kiểm tra xem thể loại có tồn tại không
if (!$theloai) {
    echo "Thể loại không tồn tại.";
    exit;
}
?>
