<?php include("../../path.php"); 
      include("../../app/controllers/categories.php");
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
<?php include ('../../app/inc/sidebar-admin.php'); ?>
        <div class="products col-9">
            <div class="button row">
                <a href="<?php echo BASE_URL . "admin/categories/create.php";?>" class="col-4 btn btn-success">Создать категорию</a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/categories/index.php";?>" class="col-4 btn btn-warning">Редактировать категорию</a>
            </div>
            <div class="row title-table">
                <h2>Добавление Категории</h2>
            </div>
            <div class="row add-product">
                <div class="mb-12 col-12 col-md-12 err">
                    <p><?=$errMsg?></p>
                </div>
                <form action="create.php" method="post">
                    <div class="col">
                        <input name="name" value="<?=$name;?>"type="text" class="form-control" placeholder="Название категории" aria-label="Название категории">
                    </div>
                    <div class="col">
                        <label for="content" class="form-label">Описание категории</label>
                        <textarea name="description" value="<?=$description;?>" class="form-control" id="content" rows="6"><?=$description;?></textarea>
                    </div>
                    <div class="col">
                        <button name="category-create" class="btn btn-primary" type="submit">Добавить категорию</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../../app/inc/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/75844c3e5b.js" crossorigin="anonymous"></script>
  </body>
</html>