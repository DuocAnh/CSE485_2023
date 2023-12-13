<?php
if (isset($_POST['sbmSave'])) {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $date = $_POST['dateOfBirth'];
    $class = $_POST['class'];
    //Buoc 1: Ket noi DBServer
    require '../config/connect.php';

    //Buoc 2: Thuc hien truy van
    $sql_check = "SELECT * FROM sinhvien WHERE email='$email'";
    $stmt = $conn->prepare($sql_check);
    $stmt->execute();

    //Buoc 3: Xử lý kết quả
    if ($stmt->rowCount() > 0) {
        header("Location:http://127.0.0.1/CSE485/CSE485_0923/BTTH03/app/views/Student/addStudent.php?error=existed");
    } else {
        $sql_insert = "INSERT INTO sinhvien (tenSinhVien, email, ngaysinh, idLop) VALUES ('$name', '$email','$date', '$class')";
        $stmt = $conn->prepare($sql_insert);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            header("Location:" . DOMAIN . "/public/index.php?error=added");
        }
    }
}
