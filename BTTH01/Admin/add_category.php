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
  <?php
    require '../connect.php';
    require '../layout/navigation.php';
  ?>

  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center my-3">THÊM MỚI THỂ LOẠI</h2>

          <form method="POST" action="process_add_category.php">
            <div class="form-group">
              <label for="name">Tên thể loại</label>
              <input type="text" class="form-control" name="ten_tloai" id="name" placeholder="Nhập tên thể loại" required>
            </div>

            <div class="btn__wrapper text-right">
              <button type="submit" class="btn btn-success">Thêm mới</button>
              <a href="./category.php" class="btn btn-warning">Quay lại</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <?php require '../layout/footer.php'; ?>

  <?php mysqli_close($strConnection); ?>
</body>

