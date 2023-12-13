<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hệ Thống Quản Lý Sinh Viên</title>
    <link rel="shortcut icon" href="https://cdn.haitrieu.com/wp-content/uploads/2021/10/Logo-DH-Thuy-Loi.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="text-uppercase text-center text-success my-5">Quản lý Sinh Viên</h2>
        <a href="<?= DOMAIN."/public/index.php?controller=home&action=addStudent" ?>" type="button" class="btn btn-success font-weight-bolder mb-3"><i class="bi bi-person-add"></i> Add Student</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã sinh viên</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Lớp</th>
                    <th scope="col">Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($students as $student) {
                ?>
                    <tr>
                        <th scope="row"><?= $student->getId() ?></th>
                        <td><?= $student->getTenSinhVien() ?></td>
                        <td><?= $student->getEmail() ?></td>
                        <td><?= $student->getNgaySinh() ?></td>
                        <td><?= $student->getTenLop() ?></td>
                        <td>
                            <ul class="content__menu list-unstyled d-flex justify-content-around">
                                <li><a style="color: green;" href="./user_info.php?id=<?= $user['id'] ?>"><i class="bi bi-eye-fill"></i></a></li>
                                <li><a style="color: blue;" href="./user_edit.php?id=<?= $user['id'] ?>"><i class="bi bi-pencil"></i></a></li>
                                <li><a style="color: red;" href=""><i class="bi bi-trash3"></i></a></li>
                            </ul>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>