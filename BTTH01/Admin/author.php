<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        .nav-item.active {
            font-weight: bold;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <?php require '../connect.php' ?>
    <?php require '../layout/navigation.php' ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button class="bg-success border-0 font-weight-bold rounded-lg px-3 py-2 my-3"><a href="./add_author.php" class="text-white">Thêm mới</a></button>

                    <table class="table">
                        <?php
                        $query = "SELECT * FROM tacgia";
                        $posts = mysqli_query($strConnection, $query);

                        // Check if there are any rows returned from the query
                        if (mysqli_num_rows($posts) > 0) {
                        ?>
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên tác giả</th>
                                    <th scope="col">Sửa</th>
                                    <th scope="col">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($p = mysqli_fetch_array($posts)) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $p['ma_tgia'] ?></th>
                                        <td><?= $p['ten_tgia'] ?></td>
                                        <td><a href="./edit_author.php?ma_tgia=<?= $p['ma_tgia'] ?>"><i class="bi bi-pencil-square"></i></a></td>
                                        <td><a id="delete-icon" href="./process_delete_author.php?ma_tgia=<?= $p['ma_tgia']?>"><i class="bi bi-trash"></i></a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        <?php
                        }
                        ?>
                    </table>

                </div>
            </div>
        </div>
    </main>
    <?php require '../layout/footer.php' ?>

</body>
<?php mysqli_close($strConnection) ?>
<script src="../assets/js/admin.js"></script>

</html>