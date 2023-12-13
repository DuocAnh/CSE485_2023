<?php
require_once APP_ROOT . '/app/models/Student.php';
class StudentService
{
    public function getAllStudents()
    {
        // Bước 1: kết nối Database
        try {
            $conn = new PDO('mysql:host=localhost;dbname=Quanlysinhvien', 'root', 'HaDung18092003');
            // Bước 2: Truy vấn dữ liệu
            $sql = "SELECT sv.id, sv.tenSinhVien, sv.email, sv.ngaySinh, l.tenLop
                    FROM SinhVien AS sv
                    INNER JOIN Lop AS l ON l.id = sv.idLop";
            $stmt = $conn->query($sql);
            // Bước 3: Xử lý kết quả trả về
            $students = [];
            while ($row = $stmt->fetch()) {
                $student = new Student($row['id'], $row['tenSinhVien'], $row['email'], $row['ngaySinh'], $row['tenLop']);
                $students[] = $student;
            }
            return $students;
        } catch (PDOException $e) {
            return $students = [];
        }
    }

    
}
