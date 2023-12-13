<?php
require_once APP_ROOT . '/app/models/Cls.php';
class ClsService
{
    public function getAllClass()
    {
        // Bước 1: kết nối Database
        try {
            $conn = new PDO('mysql:host=localhost;dbname=Quanlysinhvien', 'root', 'HaDung18092003');
            // Bước 2: Truy vấn dữ liệu
            $sql = "SELECT * FROM Lop";
            $stmt = $conn->query($sql);
            // Bước 3: Xử lý kết quả trả về
            $clss = [];
            while ($row = $stmt->fetch()) {
                $cls = new Cls($row['id'], $row['tenLop']);
                $clss[] = $cls;
            }
            return $clss;
        } catch (PDOException $e) {
            return $clss = [];
        }
    }
}
