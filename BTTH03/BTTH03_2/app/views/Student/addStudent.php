<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sinh viên</title>
    <link rel="shortcut icon" href="https://cdn.haitrieu.com/wp-content/uploads/2021/10/Logo-DH-Thuy-Loi.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                if (isset($_GET['error'])) {
                    echo "<p style='background-color:orange'>{$_GET['error']}</p>";
                }
                ?>
                <form method="post" action="<?= DOMAIN . '/app/path/process_addstudent.php' ?>">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Họ và tên</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Nguyễn Văn A" name="fullname">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ngày sinh</label>
                        <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Lớp</label>
                        <select name="class" class="form-control" id="exampleFormControlSelect1">
                            <?php
                            $conn = new PDO("mysql:host=localhost;dbname=Quanlysinhvien", "root", "HaDung18092003");
                            $query = "SELECT * FROM Lop";
                            $stmt = $conn->query($query);
                            $class = $stmt->fetchAll();
                            foreach ($class as $cls) {
                            ?>
                                <option value="<?= $cls['id'] ?>"><?= $cls['tenLop'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button name="sbmSave" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    function formatDate() {
        var input = document.getElementById("dateOfBirth");
        var inputValue = input.value;

        // Chuyển đổi ngày tháng thành định dạng "yyyy-mm-dd"
        var formattedDate = new Date(inputValue).toISOString().split('T')[0];

        // Gán giá trị đã định dạng lại vào thẻ input
        input.value = formattedDate;
    }
</script>

</html>