<?php include("../../path.php"); 
      //include("../../app/database/database.php");
      include("../../app/controllers/products.php")       
?>

<!doctype html>
<html lang="ru">
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
                <h2>Редактирование товара</h2>
            </div>
            <div class="row add-product">
                <div class = "mb-12 col-12 col-md-12 err">
                    <?php include ('../../app/helps/errorinfo.php'); ?>
                </div>
                <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type ="hidden" name="id" value="<?=$id;?>">
                    <div class="col mb-4">
                        <input name = "title" value="<?=$title?>" type="text" class="form-control" placeholder="Название продукта" aria-label="Название продукта">
                    </div>
                    <div class="col mb-4">
                        <input name = "price" value="<?=$price?>" type="text" class="form-control" placeholder="Цена" aria-label="Цена">
                    </div>
                    <div class="col mb-4">
                        <input name = "sum" value="<?=$sum?>" type="text" class="form-control" placeholder="Количество" aria-label="Количество">
                    </div>
                    <div class="col">
                        <label for="editor" class="form-label">Описание товара</label>
                        <textarea name = "content" id="editor" class="form-control" rows="6"><?=$content?></textarea>
                    </div>
                    <div class="input-group col mb-4 mt-4">
                        <input name="img" type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Загрузка</label>
                    </div>
                    <select name="category" class="form-select mb-2" aria-label="Пример выбора по умолчанию">
                        <?php foreach ($categories as $key => $category): ?>
                            <option value="<?=$category['id']?>"><?=$category['name'];?></option> 
                        <?php endforeach;?>    
                    </select>
                    <div class="form-check">
                        <?php if (empty($putUp) && $putUp == 0): ?>
                            <input class="form-check-input" type="checkbox" name="putUp" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Выставить на продажу</label>
                        <?php else: ?>
                            <input class="form-check-input" type="checkbox" name="putUp" value="1" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">Выставить на продажу</label>
                        <?php endif; ?>
                    </div>
                    <div class="col mb-6">
                        <button name="edit_product" class="btn btn-primary" type="submit">Обновить товар</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../../app/inc/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/75844c3e5b.js" crossorigin="anonymous"></script>
    <!--Визуальный редактор к текстовому полю-->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script src="../../assets/js/scripts.js"></script>
  </body>
</html>
