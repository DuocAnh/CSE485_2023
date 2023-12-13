<?php
try {
  $conn = new PDO("mysql:host=localhost;dbname=Quanlysinhvien", "root", "HaDung18092003");
} catch (PDOException $e) {
  die("Lỗi kết nối: " . $e->getMessage());
}
