<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Music Life</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <?php
    require './connect.php';
    $query = 'select * from baiviet';
    $songs = mysqli_query($strConnection, $query);
  ?>
  <div class="container-fluid p-0 g-0">
    <?php require './layout/header.php' ?>
    <div style="margin-bottom: 50px;" class="body">
      <div class="row">
        <div class="col-md-12 p-0">
          <div class="body__wrapped">
            <img class="w-100" src="./assets/img/thumbnail.jpg" alt="">
          </div>
          <h3 class="text-center text-primary text-uppercase mt-2 fw-normal">Top bài hát yêu thích</h3>
        </div>
      </div>
      <div class="row">
        <?php foreach ($songs as $song) { ?>
          <div class="col-md-3">
            <div class="song-wrapped border rounded pb-3 mb-3">
              <a class="d-block" href="./detail.php?id=<?= $song['ma_bviet'] ?>">
                <img style="height: 224px;" class="w-100 object-fit-cover" src="<?= $song['hinhanh'] ?>" alt="">
              </a>
              <h6 class="text-primary text-center mt-2 fw-normal"><?= $song['ten_bhat'] ?></h6>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <?php require './layout/footer.php'?>
  </div>
</body>
<?php mysqli_close($strConnection) ?>

</html>