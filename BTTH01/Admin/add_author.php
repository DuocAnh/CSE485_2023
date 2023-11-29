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
</head>

<body>
    <?php require '../connect.php' ?>
    <?php require '../layout/navigation.php' ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center my-3">THÊM MỚI TÁC GIẢ</h2>
                    <form method="POST" action="process_add_author.php">
                        <div class="input-group my-3">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Tên tác giả</span>
                            </div>
                            <input type="text" class="form-control" name="ten_tgia" placeholder="Nhập tên tác giả">
                        </div>

                        <div class="btn__wrapper text-right">
                            <button type="submit" class="bg-success border-0 font-weight-bold rounded-lg px-3 py-2 my-3">
                                <span class="text-white">Thêm mới</span>
                            </button>
                            <button class="bg-warning border-0 font-weight-bold rounded-lg px-3 py-2 my-3">
                                <a href="./author.php" class="text-white">Quay lại</a>
                            </button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </main>
    <?php require '../layout/footer.php' ?>

</body>
<?php mysqli_close($strConnection) ?>


</html>