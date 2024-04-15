<?php include("path.php"); 
      include("app/database/database.php")
      //session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <title>Складman</title>
  </head>
  <body>

<?php include("app/inc/header.php"); ?> 

<div class="container">
        <div class="products col-12">
            <div class="row title-table">
                <h2>Заказы</h2>
                <div class="col-1">ID</div>
                <div class="col-2">Клиент</div>
                <div class="col-2">Дата заказа</div>
                <div class="col-3">Статус заказа</div>
                <div class="col-4">Управление</div>
            </div>
            <div class="row product">
                <div class="id col-1">1</div>
                <div class="title col-2">IluxaMad</div>
                <div class="zdate col-2">05.04.2024</div>
                <div class="zdate col-3">Ожидается отправка</div>
                <div class="red col-4"><a href="">Детали</a></div>
            </div>
        </div>
    </div>
</div>

<?php include("app/inc/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/75844c3e5b.js" crossorigin="anonymous"></script>
  </body>
</html>