<?php include("../../path.php"); 
      include("../../app/database/database.php")
      //session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <title>Складman</title>
  </head>
  <body>

<?php include("../../app/inc/header-admin.php"); ?> 

<div class="container">
    <div class="row">
        <div class="sidebar col-3">
            <ul>
                <li>
                    <a href="">Товары</a>
                </li>
                <li>
                    <a href="">Заказы</a>
                </li>
                <li>
                    <a href="">Категории</a>
                </li>
            </ul>
        </div>
        <div class="products col-9">
            <div class="button row">
                <a href="create.php" class="col-3 btn btn-success">Add Product</a>
                <span class="col-1"></span>
                <a href="index.php" class="col-3 btn btn-warning">Manage Products</a>
            </div>
            <div class="row title-table">
                <h2>Управление записями</h2>
                <div class="col-1">ID</div>
                <div class="col-5">Название</div>
                <div class="col-2">Поставщик</div>
                <div class="col-4">Управление</div>
            </div>
            <div class="row product">
                <div class="id col-1">1</div>
                <div class="title col-5">Продкут 1</div>
                <div class="provider col-2">Поставщик 1</div>
                <div class="red col-2"><a href="">edit</a></div>
                <div class="del col-2"><a href="">delete</a></div>
            </div>
        </div>
    </div>
</div>

<?php include("../../app/inc/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/75844c3e5b.js" crossorigin="anonymous"></script>
  </body>
</html>