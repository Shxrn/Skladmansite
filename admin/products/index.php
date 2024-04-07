<?php include("../../path.php"); 
      //include("../../app/database/database.php");
      include("../../app/controllers/products.php")  
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
<?php include ('../../app/inc/sidebar-admin.php'); ?>
        <div class="products col-9">
            <div class="button row">
                <a href="<?php echo BASE_URL . "admin/products/create.php";?>" class="col-3 btn btn-success">Добавить товар</a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/products/index.php";?>" class="col-3 btn btn-warning">Редактировать товар</a>
            </div>
            <div class="row title-table">
                <h2>Управление товарами</h2>
                <div class="col-1">ID</div>
                <div class="col-3">Название</div>
                <div class="col-2">Категория</div>
                <div class="col-6">Управление</div>
            </div>
            <?php foreach ($productsCtg as $key => $product): ?>
            <div class="row product">
                <div class="id col-1"><?=$key + 1;?></div>
                <div class="title col-3"><?=$product['title'];?></div>
                <div class="category col-2"><?=$product['name'];?></div>
                <div class="red col-2"><a href="">edit</a></div>
                <div class="del col-2"><a href="">delete</a></div>
                <?php if ($product['status']): ?>
                <div class="status col-2"><a href="">take off</a></div>
                <?php else: ?>
                <div class="status col-2"><a href="">put up</a></div>
                <?php endif ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include("../../app/inc/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/75844c3e5b.js" crossorigin="anonymous"></script>
  </body>
</html>